<?php

class M_izin_media_reklame extends CI_Model
{

    public function read_all_izin_media_reklame()
    {
        $hasil=$this->db->query("SELECT * FROM izin_penyediaan_media_reklame JOIN user_detail ON user_detail.id_user_detail = izin_penyediaan_media_reklame.id_user");
        return $hasil;
    }

    public function insert_izin_media_reklame($nomor_surat, $berlaku_awal, $berlaku_akhir, $jenis_reklame, $merk, $jumlah, $ukuran, $lokasi_reklame, $foto_ktp_pemohon, $foto_sketsa_lokasi, $foto_desain, $foto_bukti_lunas_pbb, $id_user, $id_status_verifikasi_surat)
    {
    
        $this->db->trans_start();

       $this->db->query("INSERT INTO izin_penyediaan_media_reklame(nomor_surat, berlaku_awal, berlaku_akhir, 
       jenis_reklame, merk, jumlah, ukuran, lokasi_reklame, foto_ktp_pemohon, foto_sketsa_lokasi, 
       foto_desain, foto_bukti_lunas_pbb, id_user, id_status_verifikasi_surat) 
       VALUES('$nomor_surat', '$berlaku_akhir', '$berlaku_akhir', '$jenis_reklame', 
       '$merk', '$jumlah', '$ukuran', '$lokasi_reklame', '$foto_ktp_pemohon', '$foto_sketsa_lokasi', '$foto_desain', 
       '$foto_bukti_lunas_pbb', '$id_user', '$id_status_verifikasi_surat')");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;

    }

    public function verify_izin_penyediaan_media_reklame($id_status_verifikasi_surat, $id_izin_penyediaan_media_reklame)
    {

        $this->db->trans_start();

       $this->db->query("UPDATE izin_penyediaan_media_reklame SET id_status_verifikasi_surat='$id_status_verifikasi_surat'WHERE id_izin_penyediaan_media_reklame='$id_izin_penyediaan_media_reklame'  ");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;

    }

}