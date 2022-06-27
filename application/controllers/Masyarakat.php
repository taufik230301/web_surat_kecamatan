<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

	public function view_admin()
	{

		$data['masyarakat'] = $this->m_user->read_all_masyarakat()->result_array();
		
		$this->load->view('admin/masyarakat.php', $data);
	}
	
	public function tambah_masyarakat_admin()
	{
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
		$id = md5($username.$email.$password.$agama.$alamat.rand(1, 9999));
		$id_user_level = 3;
		$id_status_verifikasi = 1;

		// echo var_dump($username);
		// echo var_dump($email);
		// echo var_dump($password);
		// echo var_dump($nama_lengkap);
		// echo var_dump($no_kk);
		// echo var_dump($no_ktp);
		// echo var_dump($jenis_kelamin);
		// echo var_dump($agama);
		// echo var_dump($no_hp);
		// echo var_dump($alamat);
		// echo var_dump($tempat_lahir);
		// echo var_dump($tanggal_lahir);
		// die();
		$hasil = $this->m_user->insert_masyarakat($id, $username, $email, $password, $id_user_level, $nama_lengkap, $no_kk, $no_ktp, $jenis_kelamin, $agama, $no_hp, $alamat, $tempat_lahir, $tanggal_lahir, $id_status_verifikasi);

			if($hasil==false){
                $this->session->set_flashdata('eror_input','eror_input');
                redirect('Masyarakat/view_admin');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('Masyarakat/view_admin');
			}
	}

	public function ubah_masyarakat_admin()
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

		$hasil = $this->m_user->update_masyarakat($id_user, $username, $email, $password, $nama_lengkap, $no_kk, $no_ktp, $jenis_kelamin, $agama, $no_hp, $alamat, $tempat_lahir, $tanggal_lahir);

		if($hasil==false){
			$this->session->set_flashdata('eror_edit','eror_edit');
			redirect('Masyarakat/view_admin');
		}else{
			$this->session->set_flashdata('edit','edit');
			redirect('Masyarakat/view_admin');
		}
		
	}

	public function hapus_masyarakat()
	{
		$id_user = $this->input->post('id_user');
		
		$hasil = $this->m_user->delete_masyarakat($id_user);

		if($hasil==false){
			$this->session->set_flashdata('eror_hapus','eror_hapus');
			redirect('Masyarakat/view_admin');
		}else{
			$this->session->set_flashdata('hapus','hapus');
			redirect('Masyarakat/view_admin');
		}
	}
}