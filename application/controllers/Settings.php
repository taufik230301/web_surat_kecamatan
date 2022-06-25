<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settinga extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/settings.php');
    }

    public function view_kepala_kasi()
	{
		$this->load->view('kepala_kasi/settings.php');
    }

    public function view_masyarakat()
	{
		$this->load->view('masyarakat/settings.php');
    }
}