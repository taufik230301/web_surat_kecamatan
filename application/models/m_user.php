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

}