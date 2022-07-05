<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_izin_domisili');
        $this->load->model('m_izin_media_reklame');
        $this->load->model('m_izin_pemakaman_jenazah');
	}

	public function dashboard_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$data['izin_domisili'] = $this->m_izin_domisili->count_surat_izin_domisili()->row_array();
			$data['izin_media_reklame'] = $this->m_izin_media_reklame->count_surat_izin_media_reklame()->row_array();
			$data['izin_pemakaman_jenazah'] = $this->m_izin_pemakaman_jenazah->count_surat_izin_pemakaman_jenazah()->row_array();
			

			$this->load->view('admin/dashboard.php', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
    }
    
    public function dashboard_kepala_kasi()
	{
		$this->load->view('kepala_kasi/dashboard.php');
    }
    
    public function dashboard_masyarakat()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

			$this->load->view('masyarakat/dashboard.php');
			
		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}
}
