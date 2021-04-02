<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Departemen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('departemen_model');
        $this->load->model('order_model');
        $this->load->library('form_validation');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != ("admin") <= ("super_admin")) {
            redirect('auth');
        } elseif ($level_akun == "user") {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['judul'] = "Departemen";
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->departemen_model->getData();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('departemen/index', $data);
        $this->load->view('template/footer');
    }
    public function tambahDepartemen()
    {
        $data['judul'] = "Tambah Departemen";
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->departemen_model->getData();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('departemen/input', $data);
        $this->load->view('template/footer');
    }
    public function prosesInput()
    {
        $this->form_validation->set_rules('nama_dep', 'Departemen', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambahDepartemen();
        } else {
            $data = array(
                'nama_dep' => $this->input->post('nama_dep')
            );
            $input = $this->departemen_model->insertData($data);
            redirect('departemen');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Edit Departemen";
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->departemen_model->getDataById($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('departemen/edit', $data);
        $this->load->view('template/footer');
    }
    public function prosesEdit($id)
    {
        $this->form_validation->set_rules('nama_dep', 'Departemen', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = array(
                'nama_dep' => $this->input->post('nama_dep')
            );
            $update = $this->departemen_model->update($id, $data);
            redirect('departemen');
        }
    }

    public function hapus($id)
    {

        $hapus = $this->departemen_model->hapus($id);
        redirect('departemen');
    }
}

/* End of file Departemen.php */
