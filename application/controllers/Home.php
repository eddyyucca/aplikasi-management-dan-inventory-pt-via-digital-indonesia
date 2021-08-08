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


        $level_akun = $this->session->userdata('level');
        // if ($level_akun != ("admin_hr") <= ("admin_gudang")) {
        //     redirect('auth');
        if ($level_akun == false) {
            redirect('auth');
        } elseif ($level_akun == "user") {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['judul'] = 'PT. VIA DIGITAL INDONESIA';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');



        $this->load->view('template/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');
    }
}

/* End of file Home.php */
