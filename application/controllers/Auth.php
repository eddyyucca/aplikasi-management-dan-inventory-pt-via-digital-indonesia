<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('auth_model');
	}

	public function index()
	{

		
			$data['data'] = false;

			$data['judul'] = 'Login User';
			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/index', $data);
			$this->load->view('auth/template/footer');
	

		$id_kar = $this->input->post('id_kar');
		// $password =  md5($this->input->post('password'));
		$cek = $this->auth_model->login_user($id_kar);
		// var_dump($cek);
		if ($cek == true) {

			foreach ($cek as $row);
			$this->session->set_userdata('id_kar', $row->id_kar);
			$this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
			$this->session->set_userdata('id_dep', $row->id_dep);
			$this->session->set_userdata('id_jab', $row->id_jab);
			$this->session->set_userdata('level', $row->level);
			if ($row->level == 'user') {
				redirect('user');
			} elseif ($row->level == 'kepala_gs') {
				redirect('home');
			} elseif ($row->level == 'hr_admin') {
				redirect('home');
			} elseif ($row->level == 'admin_dep') {
				redirect('home');
			}
			if ($cek == FALSE) {
				redirect('auth');
		}
	  }
	}
	public function index_back()
	{

		$this->form_validation->set_rules('id_kar', 'ID Karyawan', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['data'] = false;

			$data['judul'] = 'Login User';
			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/index', $data);
			$this->load->view('auth/template/footer');
		}
	}
	//------------------------------------------------------------------------//
	//------------------------------------------------------------------------//
	//------------------------------------------------------------------------//
	// public function user()
	// {
	// 	$data['judul'] = 'Login User';
	// 	$data['data'] = false;
	// 	$this->load->view('auth/template/header', $data);
	// 	$this->load->view('auth/user', $data);
	// 	$this->load->view('auth/template/footer');
	// }
	// public function auth_user()
	// {
	// 	$this->form_validation->set_rules('id_kar', 'ID Karyawan', 'required');
	// 	$this->form_validation->set_rules('password', 'Password', 'required');
	// 	if ($this->form_validation->run() == FALSE) {
	// 		$data['data'] = false;

	// 		$data['judul'] = 'Login User';
	// 		$this->load->view('auth/template/header', $data);
	// 		$this->load->view('auth/user', $data);
	// 		$this->load->view('auth/template/footer');
	// 	}

	// 	$id_kar = $this->input->post('id_kar');
	// 	$password =  md5($this->input->post('password'));
	// 	$cek = $this->auth_model->login_user($id_kar, $password);
	// 	if ($cek == true) {

	// 		foreach ($cek as $row);
	// 		$this->session->set_userdata('id_kar', $row->id_kar);
	// 		$this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
	// 		$this->session->set_userdata('id_dep', $row->id_dep);
	// 		$this->session->set_userdata('id_jab', $row->id_jab);
	// 		$this->session->set_userdata('level', $row->level);
	// 		$this->session->set_userdata('mess', $row->mess);

	// 		redirect('user');
	// 	} else {
	// 		$data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
	//         </div>';

	// 		$data['judul'] = 'Login User';
	// 		$this->load->view('auth/template/header', $data);
	// 		$this->load->view('auth/user', $data);
	// 		$this->load->view('auth/template/footer');
	// 	}
	// }

	// public function auth_vendor()
	// {

	// 	$this->form_validation->set_rules('username', 'Username', 'required');
	// 	$this->form_validation->set_rules('password', 'Password', 'required');
	// 	if ($this->form_validation->run() == FALSE) {
	// 		$data['data'] = false;
	// 		$data['judul'] = 'Login Vendor';

	// 		$this->load->view('auth/template/header', $data);
	// 		$this->load->view('auth/vendor', $data);
	// 		$this->load->view('auth/template/footer');
	// 	}
	// }
	public function vendor_cek()
	{
		$username = $this->input->post('username');
		$password =  md5($this->input->post('password'));
		$cek = $this->auth_model->auth_vendor($username, $password);
		if ($cek == true) {
			foreach ($cek as $row);
			$this->session->set_userdata('id_vendor', $row->id_vendor);
			$this->session->set_userdata('nama_vendor', $row->nama_vendor);
			$this->session->set_userdata('username_v', $row->username_v);
			$this->session->set_userdata('level', 'vendor');
			redirect('user_vendor');
		} else {
			$data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
            </div>';
			$data['judul'] = 'Login Vendor';
			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/vendor', $data);
			$this->load->view('auth/template/footer');
		}
	}

	public function auth_pos()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['data'] = false;
			$data['judul'] = 'Login Penerima';

			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/pos', $data);
			$this->load->view('auth/template/footer');
		}
	}

	public function pos_cek()
	{
		$username_p = $this->input->post('username');
		$password_p =  md5($this->input->post('password'));
		$cek = $this->auth_model->auth_pos($username_p, $password_p);
		if ($cek == true) {
			foreach ($cek as $row);
			$this->session->set_userdata('id_pos', $row->id_pos);
			$this->session->set_userdata('nama_lokasi', $row->nama_lokasi);
			$this->session->set_userdata('username_p', $row->username_p);
			$this->session->set_userdata('level', 'pos');
			redirect('pos');
		} else {
			$data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
            </div>';
			$data['judul'] = 'Login Penerima';
			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/pos', $data);
			$this->load->view('auth/template/footer');
		}
	}
	//------------------------------------------------------------------------//
	//------------------------------------------------------------------------//
	//------------------------------------------------------------------------//
	public function admin()
	{
		$id_kar = $this->input->post('id_kar');
		$password =  md5($this->input->post('password'));

		$cek = $this->auth_model->login($id_kar, $password);

		if ($cek == true) {

			foreach ($cek as $row);
			$this->session->set_userdata('id', $row->id_karyawan);
			$this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
			$this->session->set_userdata('id_dep', $row->id_dep);
			$this->session->set_userdata('id_jab', $row->id_jab);
			$this->session->set_userdata('level', $row->level);

			if ($this->session->userdata('level') == "admin") {
				redirect('home/index');
			} elseif ($this->session->userdata('level') == "admin_dep") {
				redirect('user/index');
			} elseif ($this->session->userdata('level') == "kepala_gs") {
				redirect('home/index');
			} elseif ($this->session->userdata('level') == "hr_admin") {
				redirect('home/index');
			} elseif ($this->session->userdata('level') == "super_admin") {
				redirect('dev/index');
			}
		}
		// $this->form_validation->set_rules('departemen', 'Departemen', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Login Admin';
			$data['data'] = '';
			$data['departemen'] = $this->auth_model->departemen();

			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/admin', $data);
			$this->load->view('auth/template/footer');
		} else {
			$data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
          </div>';
			$data['judul'] = 'Login';
			$data['departemen'] = $this->auth_model->departemen();

			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/admin', $data);
			$this->load->view('auth/template/footer');
		}
	}


	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
