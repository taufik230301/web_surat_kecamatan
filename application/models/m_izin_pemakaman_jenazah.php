<?php

class M_izin_pemakaman_jenazah extends CI_Model
{

    public function count_surat_izin_pemakaman_jenazah_wait_confirmed()
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_pemakaman_jenazah) as total_surat FROM izin_pemakaman_jenazah WHERE id_status_verifikasi_surat=1");
        return $hasil;
    }

    public function count_surat_izin_pemakaman_jenazah_confirmed()
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_pemakaman_jenazah) as total_surat FROM izin_pemakaman_jenazah WHERE id_status_verifikasi_surat=2");
        return $hasil;
    }


    public function count_surat_izin_pemakaman_jenazah_not_confirmed()
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_pemakaman_jenazah) as total_surat FROM izin_pemakaman_jenazah WHERE id_status_verifikasi_surat=3");
        return $hasil;
    }

    public function count_surat_izin_pemakaman_jenazah()
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_pemakaman_jenazah) as total_surat FROM izin_pemakaman_jenazah");
        return $hasil;
    }

    public function count_surat_izin_pemakaman_jenazah_wait_confirmed_by_id_user($id_user)
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_pemakaman_jenazah) as total_surat FROM izin_pemakaman_jenazah JOIN user_detail ON user_detail.id_user_detail = izin_pemakaman_jenazah.id_user WHERE id_status_verifikasi_surat=1 AND id_user_detail='$id_user'");
        return $hasil;
    }

    public function count_surat_izin_pemakaman_jenazah_confirmed_by_id_user($id_user)
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_pemakaman_jenazah) as total_surat FROM izin_pemakaman_jenazah JOIN user_detail ON user_detail.id_user_detail = izin_pemakaman_jenazah.id_user WHERE id_status_verifikasi_surat=2 AND id_user_detail='$id_user'");
        return $hasil;
    }


    public function count_surat_izin_pemakaman_jenazah_not_confirmed_by_id_user($id_user)
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_pemakaman_jenazah) as total_surat FROM izin_pemakaman_jenazah JOIN user_detail ON user_detail.id_user_detail = izin_pemakaman_jenazah.id_user WHERE id_status_verifikasi_surat=3 AND id_user_detail='$id_user'");
        return $hasil;
    }

    public function count_surat_izin_pemakaman_jenazah_by_id_user($id_user)
    {
        $hasil=$this->db->query("SELECT COUNT(id_izin_pemakaman_jenazah) as total_surat FROM izin_pemakaman_jenazah JOIN user_detail ON user_detail.id_user_detail = izin_pemakaman_jenazah.id_user WHERE id_user_detail='$id_user'");
        return $hasil;
    }

    public function read_all_pemakaman_jenazah()
    {
        $hasil=$this->db->query("SELECT * FROM izin_pemakaman_jenazah JOIN user_detail ON user_detail.id_user_detail = izin_pemakaman_jenazah.id_user");
        return $hasil;
    }

    public function read_surat_izin_pemakaman_jenazah_by_id($id_izin_pemakaman_jenazah)
    {
        $hasil=$this->db->query("SELECT * FROM izin_pemakaman_jenazah JOIN user_detail ON user_detail.id_user_detail = izin_pemakaman_jenazah.id_user WHERE izin_pemakaman_jenazah.id_izin_pemakaman_jenazah='$id_izin_pemakaman_jenazah'");
        return $hasil;
    }

    public function read_all_pemakaman_jenazah_by_id($id_user)
    {
        $hasil=$this->db->query("SELECT * FROM izin_pemakaman_jenazah JOIN user_detail ON user_detail.id_user_detail = izin_pemakaman_jenazah.id_user WHERE user_detail.id_user_detail='$id_user'");
        return $hasil;
    }

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

    public function verify_izin_pemakaman_jenazah($id_status_verifikasi_surat, $id_izin_pemakaman_jenazah)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE izin_pemakaman_jenazah SET id_status_verifikasi_surat='$id_status_verifikasi_surat' WHERE id_izin_pemakaman_jenazah='$id_izin_pemakaman_jenazah'");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }

    public function update_izin_pemakaman_jenazah($nomor_surat, $tanggal_ditetapkan, $nama_alm, $umur_alm, $agama_alm, $nik_alm, $tanggal_meninggal, $tanggal_kubur, $blok_petak, $jenis_pemakaman, $foto_surat_ket_lap, $foto_surat_pemeriksaan_jenazah, $foto_kk_alm, $foto_surat_rekomendasi_dinas_pupr, $id_izin_pemakaman_jenazah)
    {
        
        $this->db->trans_start();

       $this->db->query("UPDATE izin_pemakaman_jenazah SET nomor_surat='$nomor_surat', tanggal_ditetapkan='$tanggal_ditetapkan', nama_alm='$nama_alm', 
       umur_alm='$umur_alm', agama_alm='$agama_alm', nik_alm='$nik_alm', tanggal_meninggal='$tanggal_meninggal',
       tanggal_kubur='$tanggal_kubur', blok_petak='$blok_petak', jenis_pemakaman='$jenis_pemakaman', foto_surat_ket_lap='$foto_surat_ket_lap', 
       foto_surat_pemeriksaan_jenazah='$foto_surat_pemeriksaan_jenazah', foto_kk_alm='$foto_kk_alm', foto_surat_rekomendasi_dinas_pupr='$foto_surat_rekomendasi_dinas_pupr'
        WHERE id_izin_pemakaman_jenazah='$id_izin_pemakaman_jenazah'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function delete_izin_pemakaman_jenazah($id_izin_pemakaman_jenazah)
    {
        $this->db->trans_start();
 
        $this->db->query(" DELETE FROM izin_pemakaman_jenazah
         WHERE id_izin_pemakaman_jenazah='$id_izin_pemakaman_jenazah'");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }
}