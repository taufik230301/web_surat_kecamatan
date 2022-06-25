<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izin_Domisili extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/izin_domisili.php');
    }
}