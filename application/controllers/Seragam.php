<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seragam extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('auth_model');
        $this->load->model('order_model');
        $this->load->model('seragam_model');

        $level_akun = $this->session->userdata('level');
        if ($level_akun != ("admin") <= ("super_admin")) {
            redirect('auth');
        } elseif ($level_akun == "user") {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['judul'] = 'Seragam';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('seragam/index', $data);
        $this->load->view('template/footer');
    }

    public function input_seragam()
    {
        $data['judul'] = 'Input Seragam Kerja';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');


        $this->load->view('template/header', $data);
        $this->load->view('seragam/input', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Input Seragam Kerja';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->seragam_model->data_row($id);


        $this->load->view('template/header', $data);
        $this->load->view('seragam/edit', $data);
        $this->load->view('template/footer');
    }

    public function prosesinput()
    {
        $data = array(
            'type' => $this->input->post('type'),
            'ukuran' => $this->input->post('ukuran'),
            'stok' => $this->input->post('stok'),
        );
        $insert = $this->seragam_model->insert($data);
        redirect('seragam');
    }

    public function prosesedit($id)
    {
        $data = array(
            'type' => $this->input->post('type'),
            'ukuran' => $this->input->post('ukuran'),
            'stok' => $this->input->post('stok'),
        );
        $update = $this->seragam_model->update($id, $data);
        redirect('seragam');
    }

    public function hapus($id)
    {
        $hapus = $this->seragam_model->hapus($id);
        redirect('seragam');
    }

    public function view_seragam_kerja()
    {
        $data['judul'] = 'Seragam Kerja';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->seragam_model->get_seragam_kerja();

        $this->load->view('template/header', $data);
        $this->load->view('seragam/view_seragam_kerja', $data);
        $this->load->view('template/footer');
    }

    public function view_kaos()
    {
        $data['judul'] = 'Seragam Kerja';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->seragam_model->get_kaos();

        $this->load->view('template/header', $data);
        $this->load->view('seragam/view_kaos', $data);
        $this->load->view('template/footer');
    }

    public function view_celana()
    {
        $data['judul'] = 'Seragam Kerja';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->seragam_model->get_celana();

        $this->load->view('template/header', $data);
        $this->load->view('seragam/view_celana', $data);
        $this->load->view('template/footer');
    }

    public function excel_celana()
    {
        $data['data'] = $this->seragam_model->get_celana();
        $this->load->view('seragam/report_celana', $data);
    }

    public function excel_kaos()
    {
        $data['data'] = $this->seragam_model->get_kaos();
        $this->load->view('seragam/report_kaos', $data);
    }

    public function excel_seragam_kerja()
    {
        $data['data'] = $this->seragam_model->get_kaos();
        $this->load->view('seragam/report_seragam_kerja', $data);
    }
}

/* End of file Seragam.php */
