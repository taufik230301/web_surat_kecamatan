<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izin_Domisili extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/izin_domisili.php');
	}
	
	public function view_kepala_kasi()
	{
		$this->load->view('kepala_kasi/izin_domisili.php');
    }
}