<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	
	public function pengajuan_izin_domisili_masyarakat()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
			$data['masyarakat_data'] = $this->m_user->read_all_masyarakat_by_id_user($this->session->userdata('id_user'))->row_array();
			$this->load->view('masyarakat/pengajuan_izin_domisili.php', $data);
		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
    }

    public function pengajuan_izin_media_reklame_masyarakat()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
			$data['masyarakat_data'] = $this->m_user->read_all_masyarakat_by_id_user($this->session->userdata('id_user'))->row_array();
			$this->load->view('masyarakat/pengajuan_izin_media_reklame.php', $data);
		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
    }

    public function pengajuan_izin_pemakaman_jenazah_masyarakat()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
			$data['masyarakat_data'] = $this->m_user->read_all_masyarakat_by_id_user($this->session->userdata('id_user'))->row_array();
			$this->load->view('masyarakat/pengajuan_izin_pemakaman.php', $data);
		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
    }
}