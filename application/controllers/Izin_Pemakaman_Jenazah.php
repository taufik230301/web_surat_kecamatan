<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izin_Pemakaman_Jenazah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_izin_pemakaman_jenazah');
	}


	public function view_admin()
	{
		$this->load->view('admin/izin_pemakaman_jenazah.php');
	}
	
	public function view_kepala_kasi()
	{
		$this->load->view('kepala_kasi/izin_pemakaman_jenazah.php');
	}
	
	public function view_masyarakat()
	{
		$this->load->view('masyarakat/izin_pemakaman_jenazah.php');
    }

	public function tambah_izin_pemakaman_jenazah()
	{
		$nomor_surat = $this->input->post('nomor_surat');
		$tanggal_ditetapkan = $this->input->post('tanggal_ditetapkan');
		$nama_alm = $this->input->post('nama_alm');
		$umur_alm = $this->input->post('umur_alm');
		$agama_alm = $this->input->post('agama_alm');
		$nik_alm = $this->input->post('nik_alm');
		$tanggal_meninggal = $this->input->post('tanggal_meninggal');
		$tanggal_kubur = $this->input->post('tanggal_kubur');
		$blok_petak = $this->input->post('blok_petak');
		$jenis_pemakaman = $this->input->post('jenis_pemakaman');

		$id_user = $this->session->userdata('id_user');
		$id_status_verifikasi_surat = 1;

		$foto_name = md5($nomor_surat.$nama_usaha.$alamat_usaha.rand(1, 9999));



		$path = './assets/izin_pemakaman_jenazah';

		$this->load->library('upload');
		$config['upload_path'] = './assets/izin_pemakaman_jenazah';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name.'_foto_surat_ket_lap';
		$this->upload->initialize($config);
		$foto_surat_ket_lap_upload = $this->upload->do_upload('foto_surat_ket_lap');
		
		if($foto_surat_ket_lap_upload){
			$foto_surat_ket_lap = $this->upload->data();
		}else{
			
			$this->session->set_flashdata('error_foto_surat_ket_lap','error_foto_surat_ket_lap');
			redirect('Pengajuan/pengajuan_izin_pemakaman_jenazah_masyarakat');
		}

		$config['upload_path'] = './assets/izin_pemakaman_jenazah';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name.'_foto_surat_pemeriksaan_jenazah';
		$this->upload->initialize($config);
		$foto_surat_pemeriksaan_jenazah_upload = $this->upload->do_upload('foto_surat_pemeriksaan_jenazah');
		
		if($foto_surat_pemeriksaan_jenazah_upload){
			$foto_surat_pemeriksaan_jenazah = $this->upload->data();
		}else{
			
			@unlink($path.$foto_surat_ket_lap['file_name']);
			
			$this->session->set_flashdata('error_foto_surat_pemeriksaan_jenazah','error_foto_surat_pemeriksaan_jenazah');
			redirect('Pengajuan/pengajuan_izin_pemakaman_jenazah_masyarakat');
		}

		$config['upload_path'] = './assets/izin_pemakaman_jenazah';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name.'_foto_kk_alm';
		$this->upload->initialize($config);
		$foto_kk_alm_upload = $this->upload->do_upload('foto_kk_alm');
		
		if($foto_kk_alm_upload){
			$foto_kk_alm = $this->upload->data();
		}else{
			
			@unlink($path.$foto_surat_ket_lap['file_name']);
			@unlink($path.$foto_surat_pemeriksaan_jenazah['file_name']);
			
			$this->session->set_flashdata('error_foto_kk_alm','error_foto_kk_alm');
			redirect('Pengajuan/pengajuan_izin_pemakaman_jenazah_masyarakat');
		}

		$config['upload_path'] = './assets/izin_pemakaman_jenazah';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name.'_foto_surat_rekomendasi_dinas_pupr';
		$this->upload->initialize($config);
		$foto_surat_rekomendasi_dinas_pupr_upload = $this->upload->do_upload('foto_surat_rekomendasi_dinas_pupr');
		
		if($foto_surat_rekomendasi_dinas_pupr_upload){
			$foto_surat_rekomendasi_dinas_pupr = $this->upload->data();
		}else{
			
			@unlink($path.$foto_surat_ket_lap['file_name']);
			@unlink($path.$foto_surat_pemeriksaan_jenazah['file_name']);
			@unlink($path.$foto_kk_alm['file_name']);
			
			$this->session->set_flashdata('error_foto_surat_rekomendasi_dinas_pupr','error_foto_surat_rekomendasi_dinas_pupr');
			redirect('Pengajuan/pengajuan_izin_pemakaman_jenazah_masyarakat');
		}


			// echo var_dump($foto_surat_ket_lap['file_name']);
			// echo var_dump($foto_surat_pemeriksaan_jenazah['file_name']);
			// echo var_dump($foto_kk_alm['file_name']);
			// echo var_dump($foto_surat_rekomendasi_dinas_pupr['file_name']);
			// die();

		$hasil = $this->m_izin_pemakaman_jenazah->insert_izin_pemakaman_jenazah($nomor_surat, $tanggal_ditetapkan, $nama_alm, $umur_alm, $agama_alm, $nik_alm, $tanggal_meninggal, $tanggal_kubur, $blok_petak, $jenis_pemakaman, $foto_surat_ket_lap['file_name'], $foto_surat_pemeriksaan_jenazah['file_name'], $foto_kk_alm['file_name'], $foto_surat_rekomendasi_dinas_pupr['file_name'], $id_user, $id_status_verifikasi_surat);

		if($hasil==false){
				$this->session->set_flashdata('eror_input','eror_input');
				redirect('Pengajuan/pengajuan_izin_pemakaman_jenazah_masyarakat');
		}else{
				$this->session->set_flashdata('input','input');
				redirect('Pengajuan/pengajuan_izin_pemakaman_jenazah_masyarakat');
		}

		

	}
}