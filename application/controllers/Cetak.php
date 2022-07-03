<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

    public function surat_izin_domisili(){

     

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->filename = "surat_izin_domisili.pdf";
        $this->pdf->load_view('surat_izin_domisili');


    }

    public function surat_izin_media_reklame(){

     

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->filename = "surat_izin_media_reklame.pdf";
        $this->pdf->load_view('surat_izin_media_reklame');


    }

    public function surat_izin_pemakaman_jenazah(){

     

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->filename = "surat_izin_pemakaman_jenazah.pdf";
        $this->pdf->load_view('surat_izin_pemakaman_jenazah');


    }
}