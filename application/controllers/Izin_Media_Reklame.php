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
		$this->load->view('kepala_kasi/izin_media_reklame.php');
    }

    public function view_masyarakat()
	{
		$this->load->view('masyarakat/izin_media_reklame.php');
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
}