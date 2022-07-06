<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lengkapi_Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

    public function view_masyarakat()
	{
		$data['masyarakat'] = $this->m_user->read_all_masyarakat_by_id_user($this->session->userdata('id_user'))->result_array();
        $data['masyarakat_data'] = $this->m_user->read_all_masyarakat_by_id_user($this->session->userdata('id_user'))->row_array();

		$this->load->view('masyarakat/lengkapi_data.php', $data);
    }

    public function lengkapi_data()
	{
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_kk = $this->input->post('no_kk');
		$no_ktp = $this->input->post('no_ktp');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
        $id_status_verifikasi = 2;

		$hasil = $this->m_user->completed_masyarakat($id_user, $username, $email, $password, $nama_lengkap, $no_kk, $no_ktp, $jenis_kelamin, $agama, $no_hp, $alamat, $tempat_lahir, $tanggal_lahir, $id_status_verifikasi);

		if($hasil==false){
			$this->session->set_flashdata('eror_edit','eror_edit');
			redirect('Lengkapi_Data/view_masyarakat');
		}else{
			$this->session->set_flashdata('edit','edit');
			redirect('Lengkapi_Data/view_masyarakat');
		}
	}

}