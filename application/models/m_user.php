<?php

class M_user extends CI_Model
{

    public function cek_login($username)
    {
        
        $hasil=$this->db->query("SELECT * FROM user WHERE username='$username'");
        return $hasil;
        
    }

    public function register_user($id, $username, $email, $pass, $id_user_level, $id_status_verifikasi)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO user(id_user, username, password, email ,id_user_level, id_user_detail) VALUES ('$id','$username','$pass','$email','$id_user_level','$id')");
       $this->db->query("INSERT INTO user_detail(id_user_detail, id_status_verifikasi, tanggal_registered) VALUES ('$id','$id_status_verifikasi', NOW())");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_account($id_user, $username, $password)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user SET username='$username', password='$password' WHERE id_user='$id_user'");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }


    public function read_all_masyarakat()
    {
        $hasil=$this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user = user_detail.id_user_detail WHERE id_user_level = 3 AND nama_lengkap is not null");
        return $hasil;
    }

    public function insert_masyarakat($id, $username, $email, $password, $id_user_level, $nama_lengkap, $no_kk, $no_ktp, $jenis_kelamin, $agama, $no_hp, $alamat, $tempat_lahir, $tanggal_lahir, $id_status_verifikasi)
    {
        $this->db->trans_start();

        $this->db->query("INSERT INTO user(id_user, username, email, password, id_user_level, id_user_detail) VALUES('$id', '$username', '$email', '$password','$id_user_level','$id')");
        $this->db->query("INSERT INTO user_detail(id_user_detail, nama_lengkap, no_kk, no_ktp, jenis_kelamin, agama, no_hp, alamat, tempat_lahir, tanggal_lahir, id_status_verifikasi, tanggal_registered) 
        VALUES('$id', '$nama_lengkap', '$no_kk', '$no_ktp', '$jenis_kelamin', '$agama', '$no_hp', '$alamat', '$tempat_lahir','$tanggal_lahir', '$id_status_verifikasi', NOW())");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }

    public function update_masyarakat($id_user, $username, $email, $password, $nama_lengkap, $no_kk, $no_ktp, $jenis_kelamin, $agama, $no_hp, $alamat, $tempat_lahir, $tanggal_lahir)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user SET username='$username', email='$email', password='$password' WHERE id_user = '$id_user'");
        $this->db->query("UPDATE user_detail SET nama_lengkap='$nama_lengkap', no_kk='$no_kk', no_ktp='$no_ktp', jenis_kelamin='$jenis_kelamin', agama='$agama', no_hp='$no_hp', alamat='$alamat', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir' WHERE id_user_detail='$id_user'");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }

    public function delete_masyarakat($id_user)
    {
        $this->db->trans_start();

        $this->db->query("DELETE FROM user WHERE id_user='$id_user'");
        $this->db->query("DELETE FROM user_detail WHERE id_user_detail='$id_user'");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }

}