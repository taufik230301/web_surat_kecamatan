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
		$this->load->view('admin/izin_domisili.php');
	}
	
	public function view_kepala_kasi()
	{
		$this->load->view('kepala_kasi/izin_domisili.php');
	}
	
	public function view_masyarakat()
	{

		$data['izin_domisili'] = $this->m_izin_domisili->read_all_domsisili_by_id($this->session->userdata('id_user'))->result_array();
		$this->load->view('masyarakat/izin_domisili.php', $data);
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
		$config['allowed_types'] = 'gif';
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
}