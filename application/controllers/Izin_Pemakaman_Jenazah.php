<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izin_Pemakaman_Jenazah extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/izin_pemakaman_jenazah.php');
	}
	
	public function view_kepala_kasi()
	{
		$this->load->view('kepala_kasi/izin_pemakaman_jenazah.php');
    }
}