<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izin_Domisili extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_izin_domisili');
	}

	public function view_admin()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$data['izin_domisili'] = $this->m_izin_domisili->read_all_domsisili()->result_array();
			$this->load->view('admin/izin_domisili.php', $data);
		
		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function acc_izin_domisili_admin($id_status_verifikasi_surat)
	{

		$id_izin_domisili = $this->input->post('id_izin_domisili');

		$hasil = $this->m_izin_domisili->verify_izin_domisili($id_status_verifikasi_surat, $id_izin_domisili);

		if($hasil==false){
				$this->session->set_flashdata('eror_acc','eror_acc');
				redirect('Izin_Domisili/view_admin');
		}else{
				$this->session->set_flashdata('acc','acc');
				redirect('Izin_Domisili/view_admin');
		}

	}
	
	public function view_kepala_kasi()
	{
		$data['izin_domisili'] = $this->m_izin_domisili->read_all_domsisili()->result_array();
		$this->load->view('kepala_kasi/izin_domisili.php', $data);
	}
	
	public function view_masyarakat()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

			$data['izin_domisili'] = $this->m_izin_domisili->read_all_domsisili_by_id($this->session->userdata('id_user'))->result_array();
			$this->load->view('masyarakat/izin_domisili.php', $data);
		
		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}
	
	public function tambah_izin_domisili_masyarakat()
	{
		$nomor_surat = $this->input->post('nomor_surat');
		$nama_usaha = $this->input->post('nama_usaha');
		$alamat_usaha = $this->input->post('alamat_usaha');
		$kegiatan_usaha = $this->input->post('kegiatan_usaha');
		$berlaku_awal = $this->input->post('berlaku_awal');
		$berlaku_akhir = $this->input->post('berlaku_akhir');
		$id_user = $this->session->userdata('id_user');
		$id_status_verifikasi_surat = 1;

		$foto_name = md5($nomor_surat.$nama_usaha.$alamat_usaha.rand(1, 9999));



		$path = './assets/izin_domisili';

		$this->load->library('upload');
		$config['upload_path'] = './assets/izin_domisili';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name.'_foto_ktp';
		$this->upload->initialize($config);
		$foto_ktp_upload = $this->upload->do_upload('foto_ktp');
		
		if($foto_ktp_upload){
			$foto_ktp = $this->upload->data();
		}else{
			
			$this->session->set_flashdata('error_foto_ktp','error_foto_ktp');
			redirect('Pengajuan/pengajuan_izin_domisili_masyarakat');
		}

		$config['upload_path'] = './assets/izin_domisili';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name.'_foto_akta_usaha';
		$this->upload->initialize($config);
		$foto_akta_usaha_upload = $this->upload->do_upload('foto_akta_usaha');
		
		if($foto_akta_usaha_upload){
			$foto_akta_usaha = $this->upload->data();
		}else{
			
			@unlink($path.$foto_ktp['file_name']);
			
			$this->session->set_flashdata('error_foto_akta_usaha','error_foto_akta_usaha');
			redirect('Pengajuan/pengajuan_izin_domisili_masyarakat');
		}

		$config['upload_path'] = './assets/izin_domisili';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name.'_foto_pengantar_lurah_setempat';
		$this->upload->initialize($config);
		$foto_pengantar_lurah_setempat_upload = $this->upload->do_upload('foto_pengantar_lurah_setempat');
		
		if($foto_pengantar_lurah_setempat_upload){
			$foto_pengantar_lurah_setempat = $this->upload->data();
		}else{
			
			@unlink($path.$foto_ktp['file_name']);
			@unlink($path.$foto_akta_usaha['file_name']);
			
			$this->session->set_flashdata('error_foto_pengantar_lurah_setempat','error_foto_pengantar_lurah_setempat');
			redirect('Pengajuan/pengajuan_izin_domisili_masyarakat');
		}

		$config['upload_path'] = './assets/izin_domisili';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name.'_foto_bukti_lunas_pbb';
		$this->upload->initialize($config);
		$foto_bukti_lunas_pbb_upload = $this->upload->do_upload('foto_bukti_lunas_pbb');
		
		if($foto_bukti_lunas_pbb_upload){
			$foto_bukti_lunas_pbb = $this->upload->data();
		}else{
			
			@unlink($path.$foto_ktp['file_name']);
			@unlink($path.$foto_akta_usaha['file_name']);
			@unlink($path.$foto_pengantar_lurah_setempat['file_name']);
			
			$this->session->set_flashdata('error_foto_bukti_lunas_pbb','error_foto_bukti_lunas_pbb');
			redirect('Pengajuan/pengajuan_izin_domisili_masyarakat');
		}


			// echo var_dump($foto_ktp['file_name']);
			// echo var_dump($foto_akta_usaha['file_name']);
			// echo var_dump($foto_pengantar_lurah_setempat['file_name']);
			// echo var_dump($foto_bukti_lunas_pbb['file_name']);
			// die();

		$hasil = $this->m_izin_domisili->insert_izin_domisili($nomor_surat, $nama_usaha, $alamat_usaha, $kegiatan_usaha, $berlaku_awal, $berlaku_akhir, $foto_ktp['file_name'], $foto_akta_usaha['file_name'], $foto_pengantar_lurah_setempat['file_name'], $foto_bukti_lunas_pbb['file_name'], $id_user, $id_status_verifikasi_surat);

		if($hasil==false){
				$this->session->set_flashdata('eror_input','eror_input');
				redirect('Pengajuan/pengajuan_izin_domisili_masyarakat');
		}else{
				$this->session->set_flashdata('input','input');
				redirect('Pengajuan/pengajuan_izin_domisili_masyarakat');
		}

	}

	public function edit_izin_domisili_admin()
	{
		$id_izin_domisili = $this->input->post('id_izin_domisili');
		$nomor_surat = $this->input->post('nomor_surat');
		$nama_usaha = $this->input->post('nama_usaha');
		$alamat_usaha = $this->input->post('alamat_usaha');
		$kegiatan_usaha = $this->input->post('kegiatan_usaha');
		$berlaku_awal = $this->input->post('berlaku_awal');
		$berlaku_akhir = $this->input->post('berlaku_akhir');

		$foto_name = md5($nomor_surat.$nama_usaha.$alamat_usaha.rand(1, 9999));

		$path = './assets/izin_domisili/';

		$this->load->library('upload');

       if($_FILES['foto_ktp']['tmp_name'] != ""){
			
			$config['upload_path'] = './assets/izin_domisili';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '2048';  //2MB max
			$config['max_width'] = '4480'; // pixel
			$config['max_height'] = '4480'; // pixel
			$config['file_name'] = $foto_name.'_foto_ktp';
			$this->upload->initialize($config);
			$foto_ktp_upload = $this->upload->do_upload('foto_ktp');

			
			

			if($foto_ktp_upload){
				$foto_ktp_file = $this->upload->data();
				$foto_ktp = $foto_ktp_file['file_name'];
			}else{
				
				$this->session->set_flashdata('error_foto_ktp','error_foto_ktp');
				redirect('Izin_Domisili/view_admin');
			}
	   }else{
			$foto_ktp = $this->input->post('foto_ktp_old');
	   }
	  
		

	   
       if($_FILES['foto_akta_usaha']['tmp_name'] != ""){
			$config['upload_path'] = './assets/izin_domisili';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '2048';  //2MB max
			$config['max_width'] = '4480'; // pixel
			$config['max_height'] = '4480'; // pixel
			$config['file_name'] = $foto_name.'_foto_akta_usaha';
			$this->upload->initialize($config);
			$foto_akta_usaha_upload = $this->upload->do_upload('foto_akta_usaha');
			
			if($foto_akta_usaha_upload){
				$foto_akta_usaha_file = $this->upload->data();
				$foto_akta_usaha = $foto_akta_usaha_file['file_name'];
			}else{
				
				@unlink($path.$foto_ktp_file['file_name']);
				
				
				$this->session->set_flashdata('error_foto_akta_usaha','error_foto_akta_usaha');
				redirect('Izin_Domisili/view_admin');
			}
		}else{
			$foto_akta_usaha = $this->input->post('foto_akta_usaha_old');
		}

		if($_FILES['foto_pengantar_lurah_setempat']['tmp_name'] != ""){
			$config['upload_path'] = './assets/izin_domisili';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '2048';  //2MB max
			$config['max_width'] = '4480'; // pixel
			$config['max_height'] = '4480'; // pixel
			$config['file_name'] = $foto_name.'_foto_pengantar_lurah_setempat';
			$this->upload->initialize($config);
			$foto_pengantar_lurah_setempat_upload = $this->upload->do_upload('foto_pengantar_lurah_setempat');
			
			if($foto_pengantar_lurah_setempat_upload){
				$foto_pengantar_lurah_setempat_file = $this->upload->data();
				$foto_pengantar_lurah_setempat = $foto_pengantar_lurah_setempat_file['file_name'];
			}else{
				
				@unlink($path.$foto_ktp_file['file_name']);
				@unlink($path.$foto_akta_usaha_file['file_name']);
				
				$this->session->set_flashdata('error_foto_pengantar_lurah_setempat','error_foto_pengantar_lurah_setempat');
				redirect('Izin_Domisili/view_admin');
			}

		}else{
			$foto_pengantar_lurah_setempat = $this->input->post('foto_pengantar_lurah_setempat_old');
		}


	if($_FILES['foto_bukti_lunas_pbb']['tmp_name'] != ""){
			$config['upload_path'] = './assets/izin_domisili';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '2048';  //2MB max
			$config['max_width'] = '4480'; // pixel
			$config['max_height'] = '4480'; // pixel
			$config['file_name'] = $foto_name.'_foto_bukti_lunas_pbb';
			$this->upload->initialize($config);
			$foto_bukti_lunas_pbb_upload = $this->upload->do_upload('foto_bukti_lunas_pbb');
			
			if($foto_bukti_lunas_pbb_upload){
				$foto_bukti_lunas_pbb_file = $this->upload->data();
				$foto_bukti_lunas_pbb = $foto_bukti_lunas_pbb_file['file_name'];
			}else{
				
				@unlink($path.$foto_ktp_file['file_name']);
				@unlink($path.$foto_akta_usaha_file['file_name']);
				@unlink($path.$foto_pengantar_lurah_setempat_file['file_name']);
				
				$this->session->set_flashdata('error_foto_bukti_lunas_pbb','error_foto_bukti_lunas_pbb');
				redirect('Izin_Domisili/view_admin');
			}

	}else{
		$foto_bukti_lunas_pbb = $this->input->post('foto_bukti_lunas_pbb_old');
	}


			// echo var_dump($foto_ktp['file_name']);
			// echo var_dump($foto_akta_usaha['file_name']);
			// echo var_dump($foto_pengantar_lurah_setempat['file_name']);
			// echo var_dump($foto_bukti_lunas_pbb['file_name']);
			// die();

		$hasil = $this->m_izin_domisili->update_izin_domisili($nomor_surat, $nama_usaha, $alamat_usaha, $kegiatan_usaha, $berlaku_awal, $berlaku_akhir, $foto_ktp, $foto_akta_usaha, $foto_pengantar_lurah_setempat, $foto_bukti_lunas_pbb, $id_izin_domisili);

		if($hasil==false){
				$this->session->set_flashdata('eror_update','eror_update');
				redirect('Izin_Domisili/view_admin');
		}else{

			if($foto_ktp != $this->input->post('foto_ktp_old')){
				@unlink($path.$this->input->post('foto_ktp_old'));
			}
				
			if($foto_akta_usaha != $this->input->post('foto_akta_usaha_old')){
				@unlink($path.$this->input->post('foto_akta_usaha_old'));
			}
				  
			if($foto_pengantar_lurah_setempat != $this->input->post('foto_pengantar_lurah_setempat_old')){
				@unlink($path.$this->input->post('foto_pengantar_lurah_setempat_old'));
			}
              	
			if($foto_bukti_lunas_pbb != $this->input->post('foto_bukti_lunas_pbb_old')){
				@unlink($path.$this->input->post('foto_bukti_lunas_pbb_old'));
			}

				
				  
				$this->session->set_flashdata('update','update');
				redirect('Izin_Domisili/view_admin');
		}

	}

	public function delete_izin_domisili_admin()
	{
		$id_izin_domisili = $this->input->post("id_izin_domisili");

		$path = './assets/izin_domisili/';
  
		$hasil = $this->m_izin_domisili->delete_izin_domisili($id_izin_domisili);
  
		  if($hasil==false){

					$this->session->set_flashdata('eror_delete','eror_delete');
					redirect('Izin_Domisili/view_admin');

		  }else{

				@unlink($path.$this->input->post('foto_ktp_old'));
				@unlink($path.$this->input->post('foto_akta_usaha_old'));
				@unlink($path.$this->input->post('foto_pengantar_lurah_setempat_old'));
				@unlink($path.$this->input->post('foto_bukti_lunas_pbb_old'));

					$this->session->set_flashdata('delete','delete');
					redirect('Izin_Domisili/view_admin');
		  }
		
	}

	
}