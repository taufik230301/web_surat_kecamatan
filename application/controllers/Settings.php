<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/settings.php');
	}
	
	public function settings_admin()
	{
		$id_user = $this->input->post("id_user");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $re_password = $this->input->post("re_password");


        if($password == $re_password)
        {

            $hasil = $this->m_user->update_account($id_user, $username, $password);

            if($hasil==false){
                $this->session->set_flashdata('eror_input','eror_input');
                redirect('Settings/view_admin');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('Settings/view_admin');
            }
            

        }else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('Settings/view_admin');
        }
	}

    public function view_kepala_kasi()
	{
		$this->load->view('kepala_kasi/settings.php');
    }

    public function view_masyarakat()
	{
		$this->load->view('masyarakat/settings.php');
    }
}