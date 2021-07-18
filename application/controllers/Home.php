<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('auth_model');
        $this->load->model('order_model');
        $this->load->model('jabatan_model');
        $this->load->model('sarana_model');
        $this->load->model('catering_model');
        $this->load->model('mess_model');

        $level_akun = $this->session->userdata('level');
        if ($level_akun != ("admin") <= ("super_admin")) {
            redirect('auth');
        } elseif ($level_akun == "user") {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['judul'] = 'Home';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $jabatan = $this->session->userdata('id_jab');
        $data['jabatan'] = $this->jabatan_model->getDataById("5");

        $data['level_akun'] = $this->session->userdata('level');

        $data['data_sarana'] = $this->sarana_model->getdata();
        $data['data_catering'] = $this->catering_model->get_data();
        $data['data_mess'] = $this->mess_model->data_mess();
        var_dump($this->session->userdata('level'));
        $this->load->view('template/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');
    }
}

/* End of file Home.php */
