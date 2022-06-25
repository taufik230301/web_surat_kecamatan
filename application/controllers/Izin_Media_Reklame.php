<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izin_Media_Reklame extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/izin_media_reklame.php');
    }

    public function view_kepala_kasi()
	{
		$this->load->view('kepala_kasi/izin_media_reklame.php');
    }

    public function view_masyarakat()
	{
		$this->load->view('masyarakat/izin_media_reklame.php');
    }
}