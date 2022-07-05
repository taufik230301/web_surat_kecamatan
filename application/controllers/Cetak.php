<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_izin_domisili');
        $this->load->model('m_izin_media_reklame');
        $this->load->model('m_izin_pemakaman_jenazah');
    }

    public function surat_izin_domisili($id_izin_domisili){


        $data['surat'] = $this->m_izin_domisili->read_surat_izin_domisili_by_id($id_izin_domisili)->result_array();

        // echo var_dump($data);
        // die();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->filename = "surat_izin_domisili.pdf";
        $this->pdf->load_view('surat_izin_domisili', $data);


    }

    public function surat_izin_media_reklame($id_izin_media_reklame){

        $data['surat'] = $this->m_izin_media_reklame->read_surat_izin_media_reklame_by_id($id_izin_media_reklame)->result_array();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->filename = "surat_izin_media_reklame.pdf";
        $this->pdf->load_view('surat_izin_media_reklame', $data);


    }

    public function surat_izin_pemakaman_jenazah($id_izin_pemakaman_jenazah){

        $data['surat'] = $this->m_izin_pemakaman_jenazah->read_surat_izin_pemakaman_jenazah_by_id($id_izin_pemakaman_jenazah)->result_array();

   

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->filename = "surat_izin_pemakaman_jenazah.pdf";
        $this->pdf->load_view('surat_izin_pemakaman_jenazah', $data);


    }
}