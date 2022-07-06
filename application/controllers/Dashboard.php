<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_izin_domisili');
		$this->load->model('m_user');
        $this->load->model('m_izin_media_reklame');
        $this->load->model('m_izin_pemakaman_jenazah');
	}

	public function dashboard_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$data['izin_domisili'] = $this->m_izin_domisili->count_surat_izin_domisili()->row_array();
			$data['izin_domisili_wait_confirmed'] = $this->m_izin_domisili->count_surat_izin_domisili_wait_confirmed()->row_array();
			$data['izin_domisili_not_confirmed'] = $this->m_izin_domisili->count_surat_izin_domisili_not_confirmed()->row_array();
			$data['izin_domisili_confirmed'] = $this->m_izin_domisili->count_surat_izin_domisili_confirmed()->row_array();
			$data['izin_media_reklame'] = $this->m_izin_media_reklame->count_surat_izin_media_reklame()->row_array();
			$data['izin_media_reklame_wait_confirmed'] = $this->m_izin_media_reklame->count_surat_izin_media_reklame_wait_confirmed()->row_array();
			$data['izin_media_reklame_not_confirmed'] = $this->m_izin_media_reklame->count_surat_izin_media_reklame_not_confirmed()->row_array();
			$data['izin_media_reklame_confirmed'] = $this->m_izin_media_reklame->count_surat_izin_media_reklame_confirmed()->row_array();
			$data['izin_pemakaman_jenazah'] = $this->m_izin_pemakaman_jenazah->count_surat_izin_pemakaman_jenazah()->row_array();
			$data['izin_pemakaman_jenazah_wait_confirmed'] = $this->m_izin_pemakaman_jenazah->count_surat_izin_pemakaman_jenazah_wait_confirmed()->row_array();
			$data['izin_pemakaman_jenazah_not_confirmed'] = $this->m_izin_pemakaman_jenazah->count_surat_izin_pemakaman_jenazah_not_confirmed()->row_array();
			$data['izin_pemakaman_jenazah_confirmed'] = $this->m_izin_pemakaman_jenazah->count_surat_izin_pemakaman_jenazah_confirmed()->row_array();

			$this->load->view('admin/dashboard.php', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
    }
    
    public function dashboard_kepala_kasi()
	{

	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
			
			$data['izin_domisili'] = $this->m_izin_domisili->count_surat_izin_domisili()->row_array();
			$data['izin_domisili_wait_confirmed'] = $this->m_izin_domisili->count_surat_izin_domisili_wait_confirmed()->row_array();
			$data['izin_domisili_not_confirmed'] = $this->m_izin_domisili->count_surat_izin_domisili_not_confirmed()->row_array();
			$data['izin_domisili_confirmed'] = $this->m_izin_domisili->count_surat_izin_domisili_confirmed()->row_array();
			$data['izin_media_reklame'] = $this->m_izin_media_reklame->count_surat_izin_media_reklame()->row_array();
			$data['izin_media_reklame_wait_confirmed'] = $this->m_izin_media_reklame->count_surat_izin_media_reklame_wait_confirmed()->row_array();
			$data['izin_media_reklame_not_confirmed'] = $this->m_izin_media_reklame->count_surat_izin_media_reklame_not_confirmed()->row_array();
			$data['izin_media_reklame_confirmed'] = $this->m_izin_media_reklame->count_surat_izin_media_reklame_confirmed()->row_array();
			$data['izin_pemakaman_jenazah'] = $this->m_izin_pemakaman_jenazah->count_surat_izin_pemakaman_jenazah()->row_array();
			$data['izin_pemakaman_jenazah_wait_confirmed'] = $this->m_izin_pemakaman_jenazah->count_surat_izin_pemakaman_jenazah_wait_confirmed()->row_array();
			$data['izin_pemakaman_jenazah_not_confirmed'] = $this->m_izin_pemakaman_jenazah->count_surat_izin_pemakaman_jenazah_not_confirmed()->row_array();
			$data['izin_pemakaman_jenazah_confirmed'] = $this->m_izin_pemakaman_jenazah->count_surat_izin_pemakaman_jenazah_confirmed()->row_array();

			

		$this->load->view('kepala_kasi/dashboard.php', $data);

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
    }
    
    public function dashboard_masyarakat()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

			$data['masyarakat_data'] = $this->m_user->read_all_masyarakat_by_id_user($this->session->userdata('id_user'))->row_array();

			$this->load->view('masyarakat/dashboard.php', $data);
			
		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}
}
