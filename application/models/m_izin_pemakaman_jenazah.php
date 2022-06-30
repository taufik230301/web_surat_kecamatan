<?php

class M_izin_pemakaman_jenazah extends CI_Model
{


    public function insert_izin_pemakaman_jenazah($nomor_surat, $tanggal_ditetapkan, $nama_alm, 
    $umur_alm, $agama_alm, $nik_alm, $tanggal_meninggal, $tanggal_kubur, $blok_petak, 
    $jenis_pemakaman, $foto_surat_ket_lap, $foto_surat_pemeriksaan_jenazah, $foto_kk_alm, 
    $foto_surat_rekomendasi_dinas_pupr, $id_user, $id_status_verifikasi_surat)
    {
        
        $this->db->trans_start();

       $this->db->query("INSERT INTO izin_pemakaman_jenazah(nomor_surat, tanggal_ditetapkan, 
       nama_alm, umur_alm, agama_alm, nik_alm, tanggal_meninggal, tanggal_kubur, blok_petak, 
       jenis_pemakaman, foto_surat_ket_lap, foto_surat_pemeriksaan_jenazah, foto_kk_alm, 
       foto_surat_rekomendasi_dinas_pupr, id_user, id_status_verifikasi_surat)
       VALUES('$nomor_surat','$tanggal_ditetapkan', '$nama_alm','$umur_alm', '$agama_alm', 
       '$nik_alm', '$tanggal_meninggal', '$tanggal_kubur', '$blok_petak', '$jenis_pemakaman', 
       '$foto_surat_ket_lap', '$foto_surat_pemeriksaan_jenazah', '$foto_kk_alm', '$foto_surat_rekomendasi_dinas_pupr', 
       '$id_user', '$id_status_verifikasi_surat')");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }
}