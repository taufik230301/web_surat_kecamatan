<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function dashboard_admin()
	{
		$this->load->view('admin/dashboard.php');
    }
    
    public function dashboard_kepala_kasi()
	{
		$this->load->view('kepala_kasi/dashboard.php');
    }
    
    public function dashboard_masyarakat()
	{
		$this->load->view('masyarakat/dashboard.php');
	}
}
