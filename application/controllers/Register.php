<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function proses_register()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$re_pass = $this->input->post('re_pass');

		// echo var_dump($username);
		// echo var_dump($email);
		// echo var_dump($pass);
		// echo var_dump($re_pass);
		// die();

		$id_user_level = 3;
		$id_status_verifikasi = 1;
        $id = md5($username.$email.$pass);

		if($pass == $re_pass)
        {
			$hasil = $this->m_user->register_user($id, $username, $email, $pass, $id_user_level, $id_status_verifikasi);

			if($hasil==false){
                $this->session->set_flashdata('eror_input','eror_input');
                redirect('register/index');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('login/index');
			}
			
		}else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('register/index');
        }
	}
}