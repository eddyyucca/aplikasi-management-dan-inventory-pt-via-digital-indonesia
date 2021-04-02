<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
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
        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->getDataJoin();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/index', $data);
        $this->load->view('template/footer');
    }
    public function view($id)
    {
        $data['judul'] = 'View Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->order_model->where($id);
        $data['data2'] = $this->order_model->getDataJoin();
        $data['data3'] = $this->order_model->status($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/view', $data);
        $this->load->view('template/footer');
    }


    public function hapusorder($id)
    {
        $this->order_model->delorder($id);
        $this->order_model->delkeranjang($id);
        redirect('order');
    }

    public function order_selesai()
    {
        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->order_selesai();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/order_selesai', $data);
        $this->load->view('template/footer');
    }

    public function selesai($id)
    {
        //update stok barang
        $x = $this->order_model->where($id);
        foreach ($x as $xx) {
            $id_k = $xx->id;
            $nilai1 = $xx->qty;
            $nilai2 = $xx->qty_order;
            $hasil = $nilai1 - $nilai2;
            $data = array(
                'qty' => $hasil
            );
            $update = $this->order_model->update_qty($data, $id_k);
        }
        //update status order//

        $data_status = array(
            'status' => 1,
        );
        $update_status = $this->order_model->update_status($data_status, $id);
        redirect('order');
    }

    public function view_selesai($id)
    {
        $data['judul'] = 'View Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->order_model->where($id);
        $data['data2'] = $this->order_model->getDataJoin();
        $data['data3'] = $this->order_model->status($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/view_order_selesai', $data);
        $this->load->view('template/footer');
    }

    public function cari()
    {
        $cari = $this->input->post('tanggal');
        echo $cari;
        $data['judul'] = 'Order Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->order_model->cari_order_selesai($cari);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('order/cari', $data);
        $this->load->view('template/footer');
    }

    public function report($id)
    {
        $x = $this->session->userdata('id_dep');
        $data['departemen'] = $this->order_model->dep($x);

        $data['judul'] = 'Report Barang';
        $data['data'] = $this->order_model->where($id);
        $data['data2'] = $this->order_model->getDataJoin();
        $data['data3'] = $this->order_model->status($id);
        $this->load->view('order/report', $data);
    }
}
