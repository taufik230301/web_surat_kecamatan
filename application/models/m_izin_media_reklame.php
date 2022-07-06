<?php

class M_izin_media_reklame extends CI_Model
{

    public function count_surat_izin_media_reklame_wait_confirmed()
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_penyediaan_media_reklame) as total_surat FROM izin_penyediaan_media_reklame WHERE id_status_verifikasi_surat=1");
        return $hasil;
    }

    public function count_surat_izin_media_reklame_confirmed()
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_penyediaan_media_reklame) as total_surat FROM izin_penyediaan_media_reklame WHERE id_status_verifikasi_surat=2");
        return $hasil;
    }

    public function count_surat_izin_media_reklame_not_confirmed()
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_penyediaan_media_reklame) as total_surat FROM izin_penyediaan_media_reklame WHERE id_status_verifikasi_surat=3");
        return $hasil;
    }

    public function count_surat_izin_media_reklame()
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_penyediaan_media_reklame) as total_surat FROM izin_penyediaan_media_reklame");
        return $hasil;
    }

    public function count_surat_izin_media_reklame_wait_confirmed_by_id_user($id_user)
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_penyediaan_media_reklame) as total_surat FROM izin_penyediaan_media_reklame JOIN user_detail ON user_detail.id_user_detail = izin_penyediaan_media_reklame.id_user WHERE id_status_verifikasi_surat=1 AND id_user_detail='$id_user'");
        return $hasil;
    }

    public function count_surat_izin_media_reklame_confirmed_by_id_user($id_user)
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_penyediaan_media_reklame) as total_surat FROM izin_penyediaan_media_reklame JOIN user_detail ON user_detail.id_user_detail = izin_penyediaan_media_reklame.id_user WHERE id_status_verifikasi_surat=2 AND id_user_detail='$id_user'");
        return $hasil;
    }

    public function count_surat_izin_media_reklame_not_confirmed_by_id_user($id_user)
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_penyediaan_media_reklame) as total_surat FROM izin_penyediaan_media_reklame JOIN user_detail ON user_detail.id_user_detail = izin_penyediaan_media_reklame.id_user WHERE id_status_verifikasi_surat=3 AND id_user_detail='$id_user'");
        return $hasil;
    }

    public function count_surat_izin_media_reklame_by_id_user($id_user)
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_penyediaan_media_reklame) as total_surat FROM izin_penyediaan_media_reklame JOIN user_detail ON user_detail.id_user_detail = izin_penyediaan_media_reklame.id_user WHERE id_user_detail='$id_user'");
        return $hasil;
    }

    public function read_surat_izin_media_reklame_by_id($id_izin_media_reklame)
    {
        $hasil=$this->db->query("SELECT * FROM izin_penyediaan_media_reklame JOIN user_detail ON user_detail.id_user_detail = izin_penyediaan_media_reklame.id_user WHERE izin_penyediaan_media_reklame.id_izin_penyediaan_media_reklame='$id_izin_media_reklame'");
        return $hasil;
    }

    public function read_all_izin_media_reklame_by_id($id_user)
    {
        $hasil=$this->db->query("SELECT * FROM izin_penyediaan_media_reklame JOIN user_detail ON user_detail.id_user_detail = izin_penyediaan_media_reklame.id_user WHERE user_detail.id_user_detail='$id_user'");
        return $hasil;
    }

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

    public function update_izin_media_reklame($nomor_surat, $berlaku_awal, $berlaku_akhir, $jenis_reklame, $merk, 
    $jumlah, $ukuran, $lokasi_reklame, $foto_ktp_pemohon, $foto_sketsa_lokasi, $foto_desain, 
    $foto_bukti_lunas_pbb, $id_izin_penyediaan_media_reklame)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE izin_penyediaan_media_reklame SET nomor_surat='$nomor_surat', berlaku_awal='$berlaku_awal', 
        berlaku_akhir='$berlaku_akhir', jenis_reklame='$jenis_reklame', merk='$merk', jumlah='$jumlah', ukuran='$ukuran', 
        lokasi_reklame='$lokasi_reklame', foto_ktp_pemohon='$foto_ktp_pemohon', foto_sketsa_lokasi='$foto_sketsa_lokasi',
         foto_desain='$foto_desain', foto_bukti_lunas_pbb='$foto_bukti_lunas_pbb' WHERE id_izin_penyediaan_media_reklame='$id_izin_penyediaan_media_reklame'");
 
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

    public function delete_izin_media_reklame($id_izin_media_reklame)
    {

        $this->db->trans_start();

        $this->db->query("DELETE FROM izin_penyediaan_media_reklame WHERE id_izin_penyediaan_media_reklame='$id_izin_media_reklame'");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
             
    }

}