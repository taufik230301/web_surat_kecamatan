<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izin_Media_Reklame extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_izin_media_reklame');
	}

	public function view_admin()
	{
		$data['izin_media_reklame'] = $this->m_izin_media_reklame->read_all_izin_media_reklame()->result_array();
		$this->load->view('admin/izin_media_reklame.php', $data);
    }

    public function view_kepala_kasi()
	{
		$data['izin_media_reklame'] = $this->m_izin_media_reklame->read_all_izin_media_reklame()->result_array();
		$this->load->view('kepala_kasi/izin_media_reklame.php', $data);
    }

    public function view_masyarakat()
	{	
		$data['izin_media_reklame'] = $this->m_izin_media_reklame->read_all_izin_media_reklame_by_id($this->session->userdata('id_user'))->result_array();
		$this->load->view('masyarakat/izin_media_reklame.php', $data);
	}
	
	public function tambah_izin_media_reklame()
	{
		$nomor_surat = $this->input->post('nomor_surat');
		$berlaku_awal = $this->input->post('berlaku_awal');
		$berlaku_akhir = $this->input->post('berlaku_akhir');
		$jenis_reklame = $this->input->post('jenis_reklame');
		$merk = $this->input->post('merk');
		$jumlah = $this->input->post('jumlah');
		$ukuran = $this->input->post('ukuran');
		$lokasi_reklame = $this->input->post('lokasi_reklame');
		$id_user = $this->session->userdata('id_user');

		$id_status_verifikasi_surat = 1;

		$foto_name = md5($nomor_surat.$berlaku_akhir.$jumlah.$lokasi_reklame.rand(1, 9999));



		$path = './assets/izin_media_reklame';

		$this->load->library('upload');
		$config['upload_path'] = './assets/izin_media_reklame';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name.'_foto_ktp_pemohon';
		$this->upload->initialize($config);
		$foto_ktp_pemohon_upload = $this->upload->do_upload('foto_ktp_pemohon');
		
		if($foto_ktp_pemohon_upload){
			$foto_ktp_pemohon = $this->upload->data();
		}else{
			
			$this->session->set_flashdata('error_foto_ktp_pemohon','error_foto_ktp_pemohon');
			redirect('Pengajuan/pengajuan_izin_media_reklame_masyarakat');
		}

		$config['upload_path'] = './assets/izin_media_reklame';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name.'_foto_sketsa_lokasi';
		$this->upload->initialize($config);
		$foto_sketsa_lokasi_upload = $this->upload->do_upload('foto_sketsa_lokasi');
		
		if($foto_sketsa_lokasi_upload){
			$foto_sketsa_lokasi = $this->upload->data();
		}else{
			
			@unlink($path.$foto_ktp_pemohon['file_name']);
			
			$this->session->set_flashdata('error_foto_sketsa_lokasi','error_foto_sketsa_lokasi');
			redirect('Pengajuan/pengajuan_izin_media_reklame_masyarakat');
		}

		$config['upload_path'] = './assets/izin_media_reklame';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name.'_foto_desain';
		$this->upload->initialize($config);
		$foto_desain_upload = $this->upload->do_upload('foto_desain');
		
		if($foto_desain_upload){
			$foto_desain = $this->upload->data();
		}else{
			
			@unlink($path.$foto_ktp_pemohon['file_name']);
			@unlink($path.$foto_sketsa_lokasi['file_name']);
			
			$this->session->set_flashdata('error_foto_desain','error_foto_pengantar_lurah_setempat');
			redirect('Pengajuan/pengajuan_izin_media_reklame_masyarakat');
		}

		$config['upload_path'] = './assets/izin_media_reklame';
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
			
			@unlink($path.$foto_ktp_pemohon['file_name']);
			@unlink($path.$foto_sketsa_lokasi['file_name']);
			@unlink($path.$foto_desain['file_name']);
			
			$this->session->set_flashdata('error_foto_bukti_lunas_pbb','error_foto_bukti_lunas_pbb');
			redirect('Pengajuan/pengajuan_izin_media_reklame_masyarakat');
		}


			// echo var_dump($foto_ktp['file_name']);
			// echo var_dump($foto_akta_usaha['file_name']);
			// echo var_dump($foto_pengantar_lurah_setempat['file_name']);
			// echo var_dump($foto_bukti_lunas_pbb['file_name']);
			// die();

		$hasil = $this->m_izin_media_reklame->insert_izin_media_reklame($nomor_surat, $berlaku_awal, $berlaku_akhir, $jenis_reklame, $merk, $jumlah, $ukuran, $lokasi_reklame, $foto_ktp_pemohon['file_name'], $foto_sketsa_lokasi['file_name'], $foto_desain['file_name'], $foto_bukti_lunas_pbb['file_name'], $id_user, $id_status_verifikasi_surat);

		if($hasil==false){
				$this->session->set_flashdata('eror_input','eror_input');
				redirect('Pengajuan/pengajuan_izin_media_reklame_masyarakat');
		}else{
				$this->session->set_flashdata('input','input');
				redirect('Pengajuan/pengajuan_izin_media_reklame_masyarakat');
		}
	}

	public function ubah_izin_media_reklame()
	{

		$id_izin_penyediaan_media_reklame = $this->input->post('id_izin_penyediaan_media_reklame');
		$nomor_surat = $this->input->post('nomor_surat');
		$berlaku_awal = $this->input->post('berlaku_awal');
		$berlaku_akhir = $this->input->post('berlaku_akhir');
		$jenis_reklame = $this->input->post('jenis_reklame');
		$merk = $this->input->post('merk');
		$jumlah = $this->input->post('jumlah');
		$ukuran = $this->input->post('ukuran');
		$lokasi_reklame = $this->input->post('lokasi_reklame');

		$foto_name = md5($nomor_surat.$berlaku_akhir.$jumlah.$lokasi_reklame.rand(1, 9999));

		$path = './assets/izin_media_reklame/';

		$this->load->library('upload');

       if($_FILES['foto_ktp_pemohon']['tmp_name'] != ""){
			
			$config['upload_path'] = './assets/izin_media_reklame';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '2048';  //2MB max
			$config['max_width'] = '4480'; // pixel
			$config['max_height'] = '4480'; // pixel
			$config['file_name'] = $foto_name.'_foto_ktp_pemohon';
			$this->upload->initialize($config);
			$foto_ktp_pemohon_upload = $this->upload->do_upload('foto_ktp_pemohon');

			
			

			if($foto_ktp_pemohon_upload){
				$foto_ktp_pemohon_file = $this->upload->data();
				$foto_ktp_pemohon = $foto_ktp_pemohon_file['file_name'];
			}else{
				
				$this->session->set_flashdata('error_foto_ktp_pemohon','error_foto_ktp_pemohon');
				redirect('Izin_Media_Reklame/view_admin');
			}
	   }else{
			$foto_ktp_pemohon = $this->input->post('foto_ktp_pemohon_old');
	   }
	  
		

	   
       if($_FILES['foto_sketsa_lokasi']['tmp_name'] != ""){
			$config['upload_path'] = './assets/izin_media_reklame';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '2048';  //2MB max
			$config['max_width'] = '4480'; // pixel
			$config['max_height'] = '4480'; // pixel
			$config['file_name'] = $foto_name.'_foto_sketsa_lokasi';
			$this->upload->initialize($config);
			$foto_sketsa_lokasi_upload = $this->upload->do_upload('foto_sketsa_lokasi');
			
			if($foto_sketsa_lokasi_upload){
				$foto_sketsa_lokasi_file = $this->upload->data();
				$foto_sketsa_lokasi = $foto_sketsa_lokasi_file['file_name'];
			}else{
				
				@unlink($path.$foto_ktp_pemohon_file['file_name']);
				
				
				$this->session->set_flashdata('error_foto_sketsa_lokasi','error_foto_sketsa_lokasi');
				redirect('Izin_Media_Reklame/view_admin');
			}
		}else{
			$foto_sketsa_lokasi = $this->input->post('foto_sketsa_lokasi_old');
		}

		if($_FILES['foto_desain']['tmp_name'] != ""){
			$config['upload_path'] = './assets/izin_media_reklame';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '2048';  //2MB max
			$config['max_width'] = '4480'; // pixel
			$config['max_height'] = '4480'; // pixel
			$config['file_name'] = $foto_name.'_foto_desain';
			$this->upload->initialize($config);
			$foto_desain_upload = $this->upload->do_upload('foto_desain');
			
			if($foto_desain_upload){
				$foto_desain_file = $this->upload->data();
				$foto_desain = $foto_desain_file['file_name'];
			}else{
				
				@unlink($path.$foto_ktp_pemohon_file['file_name']);
				@unlink($path.$foto_sketsa_lokasi_file['file_name']);
				
				$this->session->set_flashdata('error_foto_desain','error_foto_desain');
				redirect('Izin_Media_Reklame/view_admin');
			}

		}else{
			$foto_desain = $this->input->post('foto_desain_old');
		}


	if($_FILES['foto_bukti_lunas_pbb']['tmp_name'] != ""){
			$config['upload_path'] = './assets/izin_media_reklame';
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
				
				@unlink($path.$foto_ktp_pemohon_file['file_name']);
				@unlink($path.$foto_sketsa_lokasi_file['file_name']);
				@unlink($path.$foto_desain_file['file_name']);
				
				$this->session->set_flashdata('error_foto_bukti_lunas_pbb','error_foto_bukti_lunas_pbb');
				redirect('Izin_Media_Reklame/view_admin');
			}

	}else{
		$foto_bukti_lunas_pbb = $this->input->post('foto_bukti_lunas_pbb_old');
	}
	$hasil = $this->m_izin_media_reklame->update_izin_media_reklame($nomor_surat, $berlaku_awal, $berlaku_akhir, $jenis_reklame, $merk, $jumlah, $ukuran, $lokasi_reklame, $foto_ktp_pemohon, $foto_sketsa_lokasi, $foto_desain, $foto_bukti_lunas_pbb, $id_izin_penyediaan_media_reklame);

		if($hasil==false){
				$this->session->set_flashdata('eror_update','eror_update');
				redirect('Izin_Media_Reklame/view_admin');
		}else{

			if($foto_ktp_pemohon != $this->input->post('foto_ktp_pemohon_old')){
				@unlink($path.$this->input->post('foto_ktp_pemohon_old'));
			}
				
			if($foto_sketsa_lokasi != $this->input->post('foto_sketsa_lokasi_old')){
				@unlink($path.$this->input->post('foto_sketsa_lokasi_old'));
			}
				  
			if($foto_desain != $this->input->post('foto_desain_old')){
				@unlink($path.$this->input->post('foto_desain_old'));
			}
              	
			if($foto_bukti_lunas_pbb != $this->input->post('foto_bukti_lunas_pbb_old')){
				@unlink($path.$this->input->post('foto_bukti_lunas_pbb_old'));
			}

				
				  
				$this->session->set_flashdata('update','update');
				redirect('Izin_Media_Reklame/view_admin');
		}


	}

	public function acc_izin_media_reklame($id_status_verifikasi_surat)
	{

		$id_izin_penyediaan_media_reklame = $this->input->post('id_izin_penyediaan_media_reklame');

		$hasil = $this->m_izin_media_reklame->verify_izin_penyediaan_media_reklame($id_status_verifikasi_surat, $id_izin_penyediaan_media_reklame);

		if($hasil==false){
				$this->session->set_flashdata('eror_acc','eror_acc');
				redirect('Izin_Media_Reklame/view_admin');
		}else{
				$this->session->set_flashdata('acc','acc');
				redirect('Izin_Media_Reklame/view_admin');
		}

	}

	public function delete_izin_media_reklame_admin()
	{
		$id_izin_penyediaan_media_reklame = $this->input->post("id_izin_penyediaan_media_reklame");

		$path = './assets/izin_media_reklame/';
  
		$hasil = $this->m_izin_media_reklame->delete_izin_media_reklame($id_izin_penyediaan_media_reklame);
  
		  if($hasil==false){

					$this->session->set_flashdata('eror_delete','eror_delete');
					redirect('Izin_Media_Reklame/view_admin');

		  }else{

				@unlink($path.$this->input->post('foto_ktp_pemohon_old'));
				@unlink($path.$this->input->post('foto_sketsa_lokasi_old'));
				@unlink($path.$this->input->post('foto_desain_old'));
				@unlink($path.$this->input->post('foto_bukti_lunas_pbb_old'));

					$this->session->set_flashdata('delete','delete');
					redirect('Izin_Media_Reklame/view_admin');
		  }
		
	}
}