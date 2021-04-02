<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catering extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('catering_model');
        $this->load->model('order_model');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != ("admin") <= ("super_admin")) {
            redirect('auth');
        } elseif ($level_akun == "user") {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['judul'] = 'Catering';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->catering_model->get_data();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('catering/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_catering()
    {
        $data['judul'] = 'Tambah Cateing';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('catering/tambah', $data);
        $this->load->view('template/footer');
    }

    public function prosestambah()
    {
        $data = array(
            'mitra' => $this->input->post('nama_mitra'),
            'kontrak_awal' => $this->input->post('awal_kontrak'),
            'akhir_kontrak' => $this->input->post('akhir_kontrak'),
            'alamat' => $this->input->post('alamat'),
            'ket' => $this->input->post('ket'),
        );
        $insert = $this->catering_model->insert($data);
        redirect('catering/index');
    }

    public function view($id)
    {
        $data['judul'] = 'View Catering';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->catering_model->data_row($id);

        $this->load->view('template/header', $data);
        $this->load->view('catering/view', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'View Catering';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->catering_model->data_row($id);

        $this->load->view('template/header', $data);
        $this->load->view('catering/edit', $data);
        $this->load->view('template/footer');
    }

    public function prosesedit($id)
    {

        $data = array(
            'mitra' => $this->input->post('nama_mitra'),
            'kontrak_awal' => $this->input->post('awal_kontrak'),
            'akhir_kontrak' => $this->input->post('akhir_kontrak'),
            'alamat' => $this->input->post('alamat'),
            'ket' => $this->input->post('ket'),
        );
        $update = $this->catering_model->update($id, $data);
        redirect('catering/index');
    }

    public function hapus($id)
    {
        $hapus =  $this->catering_model->hapus($id);
        redirect('catering');
    }

    public function excel()
    {
        $data['data'] = $this->catering_model->get_data();
        $this->load->view('catering/excel', $data);
    }
}

/* End of file Catering.php */
