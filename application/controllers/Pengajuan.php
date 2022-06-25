<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
	
	public function pengajuan_izin_domisili_masyarakat()
	{
		$this->load->view('masyarakat/pengajuan_izin_domisili.php');
    }

    public function pengajuan_izin_media_reklame_masyarakat()
	{
		$this->load->view('masyarakat/pengajuan_izin_media_reklame.php');
    }

    public function pengajuan_izin_pemakaman_masyarakat()
	{
		$this->load->view('masyarakat/pengajuan_izin_pemakaman.php');
    }
}