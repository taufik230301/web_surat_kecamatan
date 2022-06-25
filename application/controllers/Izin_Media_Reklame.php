<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izin_Media_Reklame extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/izin_media_reklame.php');
    }
}