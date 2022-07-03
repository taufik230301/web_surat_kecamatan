<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function dashboard_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$this->load->view('admin/dashboard.php');

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
