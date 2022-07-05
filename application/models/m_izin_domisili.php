<?php

class M_izin_domisili extends CI_Model
{

    public function read_surat_izin_domisili_by_id($id_izin_domisili)
    {
        $hasil=$this->db->query("SELECT * FROM izin_domisili JOIN user_detail ON user_detail.id_user_detail = izin_domisili.id_user WHERE izin_domisili.id_izin_domisili='$id_izin_domisili'");
        return $hasil;
    }
    public function read_all_domsisili_by_id($id_user)
    {
        $hasil=$this->db->query("SELECT * FROM izin_domisili JOIN user_detail ON user_detail.id_user_detail = izin_domisili.id_user WHERE user_detail.id_user_detail='$id_user'");
        return $hasil;
    }

    public function read_all_domsisili()
    {
        $hasil=$this->db->query("SELECT * FROM izin_domisili JOIN user_detail ON user_detail.id_user_detail = izin_domisili.id_user");
        return $hasil;
    }

    public function insert_izin_domisili($nomor_surat, $nama_usaha, $alamat_usaha, 
    $kegiatan_usaha, $berlaku_awal, $berlaku_akhir, $foto_ktp, $foto_akta_usaha, 
    $foto_pengantar_lurah_setempat, $foto_bukti_lunas_pbb, $id_user, $id_status_verifikasi_surat)
    {
        $this->db->trans_start();

       $this->db->query("INSERT INTO izin_domisili(nomor_surat, nama_usaha, alamat_usaha, 
       kegiatan_usaha ,berlaku_awal, berlaku_akhir,foto_ktp, foto_akta_usaha, foto_pengantar_lurah_setempat, foto_bukti_lunas_pbb, id_user, id_status_verifikasi_surat) VALUES 
       ('$nomor_surat','$nama_usaha','$alamat_usaha','$kegiatan_usaha','$berlaku_awal','$berlaku_akhir','$foto_ktp',
       '$foto_akta_usaha','$foto_pengantar_lurah_setempat','$foto_bukti_lunas_pbb','$id_user','$id_status_verifikasi_surat')");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_izin_domisili($nomor_surat, $nama_usaha, $alamat_usaha, 
    $kegiatan_usaha, $berlaku_awal, $berlaku_akhir, $foto_ktp, $foto_akta_usaha, 
    $foto_pengantar_lurah_setempat, $foto_bukti_lunas_pbb, $id_izin_domisili)
    {
        $this->db->trans_start();

       $this->db->query("UPDATE izin_domisili 
       SET nomor_surat='$nomor_surat', nama_usaha='$nama_usaha', alamat_usaha='$alamat_usaha', kegiatan_usaha='$kegiatan_usaha', 
       berlaku_awal='$berlaku_awal', berlaku_akhir='$berlaku_akhir', foto_ktp='$foto_ktp', foto_akta_usaha='$foto_akta_usaha',
        foto_pengantar_lurah_setempat='$foto_pengantar_lurah_setempat', foto_bukti_lunas_pbb='$foto_bukti_lunas_pbb' WHERE id_izin_domisili='$id_izin_domisili'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }



    public function verify_izin_domisili($id_status_verifikasi_surat, $id_izin_domisili)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE izin_domisili SET id_status_verifikasi_surat='$id_status_verifikasi_surat' WHERE id_izin_domisili='$id_izin_domisili'");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }

    public function delete_izin_domisili($id_izin_domisili)
    {

        $this->db->trans_start();

        $this->db->query("DELETE FROM izin_domisili WHERE id_izin_domisili='$id_izin_domisili'");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
             
    }
}