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

        $dep = $this->input->post('departemen');
        $password =  md5($this->input->post('password'));

        $cek = $this->auth_model->login($dep, $password);


        if ($cek == true) {

            foreach ($cek as $row);
            $this->session->set_userdata('id', $row->id);
            $this->session->set_userdata('nama_user', $row->nama_user);
            $this->session->set_userdata('id_dep', $row->id_dep);
            $this->session->set_userdata('level', $row->level);

            if ($this->session->userdata('level') == "admin") {
                redirect('home/index');
            } elseif ($this->session->userdata('level') == "user") {
                redirect('user/index');
            } elseif ($this->session->userdata('level') == "super_admin") {
                redirect('home/index');
            }
        }
        $this->form_validation->set_rules('departemen', 'Departemen', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Login';
            $data['data'] = '';
            $data['departemen'] = $this->auth_model->departemen();

            $this->load->view('auth/template/header', $data);
            $this->load->view('auth/index', $data);
            $this->load->view('auth/template/footer');
        } else {
            $data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
          </div>';
            $data['judul'] = 'Login';
            $data['departemen'] = $this->auth_model->departemen();

            $this->load->view('auth/template/header', $data);
            $this->load->view('auth/index', $data);
            $this->load->view('auth/template/footer');
        }
    }

    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
