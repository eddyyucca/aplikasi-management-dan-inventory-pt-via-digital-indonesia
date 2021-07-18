<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kepala_gs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('super_model');
        $this->load->model('order_model');
        $this->load->model('jabatan_model');
        $this->load->model('akun_model');



        // $level_akun = $this->session->userdata('level');
        // if ($level_akun != ("kepala_gs")) {
        //     redirect('auth');
        // } elseif ($level_akun == "admin_dep") {
        //     redirect('auth');
        // } elseif ($level_akun == "vendor") {
        //     redirect('auth');
        // } elseif ($level_akun == "pos") {
        //     redirect('auth');
        // }
    }


    public function order_persetujuan()
    {
        $data['judul'] = 'Order Persetujuan';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['alerts'] = $this->super_model->data();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('template/header', $data);
        $this->load->view('kepala_gs/order_masuk', $data);
        $this->load->view('template/footer');
    }

    public function view($id)
    {
        $data['judul'] = 'Order Persetujuan';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['alerts'] = $this->super_model->data();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->order_model->alerts_3();
        $data['data2'] = $this->super_model->where($id);
        $data['data3'] = $this->super_model->ket($id);
        $data['data4'] = $this->super_model->status($id);
        $data['nama'] = $this->session->userdata('nama_user');

        $this->load->view('template/header', $data);
        $this->load->view('kepala_gs/view', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Order Persetujuan';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['alerts'] = $this->super_model->data();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->order_model->alerts_3();
        $data['data2'] = $this->super_model->where_edit($id);
        $data['nama'] = $this->session->userdata('nama_user');

        $this->load->view('template/header', $data);
        $this->load->view('kepala_gs/edit', $data);
        $this->load->view('template/footer');
    }

    public function ket($id)
    {
        $data['judul'] = 'Order Persetujuan';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['alerts'] = $this->super_model->data();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->order_model->alerts_3();
        $data['data2'] = $this->super_model->where_edit($id);
        $data['data3'] = $this->super_model->ket($id);

        $data['nama'] = $this->session->userdata('nama_user');

        $this->load->view('template/header', $data);
        $this->load->view('kepala_gs/ket', $data);
        $this->load->view('template/footer');
    }

    public function ket_input($id)
    {
        $data = array(
            'ket' => $this->input->post('ket')
        );
        $update = $this->super_model->update_status($id, $data);

        redirect('kepala_gs/view/' . $id);
    }

    public function prosesedit($id)
    {
        $redirect =  $this->input->post('redirect');
        $data = array(
            'qty_order' => $this->input->post('qty_order'),

        );

        $update = $this->super_model->updatebarang($id, $data);
        redirect('super_admin/view/' . $redirect);
    }

    public function hapus($id)
    {
        $data = $this->super_model->id_keranjang($id);
        $id_redirect = $data->id_keranjang;
        $hapus = $this->super_model->hapusdata($id);
        redirect('kepala_gs/view/' . $id_redirect);
    }

    public function diterima($id)
    {

        $data2 = array(
            'status' => 2,

        );

        $update2 = $this->super_model->update_status($id, $data2);
        redirect('kepala_gs/order_persetujuan');
    }

    public function ditolak($id)
    {
        $data2 = array(
            'status' => 4,
        );

        $update2 = $this->super_model->update_status($id, $data2);
        redirect('kepala_gs/order_persetujuan');
    }

    public function akun_admin()
    {
        $data['judul'] = "Tambah User";
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data_departemen'] = $this->akun_model->getDataDepartemen();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('kepala_gs/input_admin', $data);
        $this->load->view('template/footer');
    }
}
