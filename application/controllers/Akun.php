<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('akun_model');
		$this->load->model('order_model');
		$this->load->library('form_validation');

		$level_akun = $this->session->userdata('level');
		if ($level_akun != ("admin") <= ("super_admin")) {
			redirect('auth');
		} elseif ($level_akun == "user") {
			redirect('auth');
		}

		$data['nama'] = $this->session->userdata('nama_user');
	}

	public function index()
	{
		$data['judul'] = "User";
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['departemen'] = $this->akun_model->getByRoleId();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');

		$this->load->view('template/header', $data);
		$this->load->view('akun/index', $data);
		$this->load->view('template/footer');
	}

	public function input()
	{
		$data['judul'] = "Tambah User";
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['data_departemen'] = $this->akun_model->getDataDepartemen();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');

		$this->load->view('template/header', $data);
		$this->load->view('akun/input', $data);
		$this->load->view('template/footer');
	}

	public function edit($id)
	{
		$data['judul'] = "Edit User";
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['data_departemen'] = $this->akun_model->getDataDepartemen();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['data'] = $this->akun_model->getId($id);
		$data['level_akun'] = $this->session->userdata('level');

		$this->load->view('template/header', $data);
		$this->load->view('akun/edit', $data);
		$this->load->view('template/footer');
	}

	public function prosesEdit($id)
	{
		$this->form_validation->set_rules('nama_user', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('id_dep', 'Departemen', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->edit($id);
		} else {
			$data = array(
				'nama_user' => $this->input->post('nama_user'),
				'password' => md5($this->input->post('password')),
				'id_dep' => $this->input->post('id_dep'),
				'level' => $this->input->post('level'),
			);

			$update = $this->akun_model->update($data, $id);
			redirect('akun');
		}
	}

	public function prosesInput()
	{
		$this->form_validation->set_rules('nama_user', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('id_dep', 'Departemen', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->input();
		} else {
			$data = array(
				'nama_user' => $this->input->post('nama_user'),
				'password' => md5($this->input->post('password')),
				'id_dep' => $this->input->post('id_dep'),
				'level' => $this->input->post('level'),
			);


			$input = $this->akun_model->insertUser($data);
			redirect('akun');
		}
	}

	public function prosesHapus($id)
	{
		$this->akun_model->hapus($id);
		redirect('akun');
	}
}
