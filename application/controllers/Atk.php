<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Atk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('jabatan_model');
        $this->load->model('atk_model');
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

        //load index
        $data['judul'] = 'ATK';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->atk_model->getDataBarang();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/index', $data);
        $this->load->view('template/footer');
    }
    public function data_barang_update()
    {

        //load index
        $data['judul'] = 'ATK';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->atk_model->getDataBarangmasuk();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/data_barang_update', $data);
        $this->load->view('template/footer');
    }
    public function data_barang_rusak()
    {
        $data['judul'] = 'ATK';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->atk_model->getDataBarangrusak();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/data_rusak', $data);
        $this->load->view('template/footer');
    }
    public function tambah_barang()
    {
        $data['judul'] = 'Input Data Barang';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/input', $data);
        $this->load->view('template/footer', $data);
    }

    public function order($id = null)

    {
        $data['judul'] = 'Order ATK';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->atk_model->getDataBarangById($id);
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/order', $data);
        $this->load->view('template/footer');
    }

    public function ProsesOrder($id = null)
    {
        $data = array(
            'id' => 'id',
            'order' => 'id',
            'status' => '1'
        );
        $this->model->atk_model($data, $id);
    }

    public function prosesInput()
    {

        $this->form_validation->set_rules('item', 'Item', 'required');
        $this->form_validation->set_rules('qty', 'quantity', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_barang();
        } else {

            $data = array(
                'item' => $this->input->post('item'),
                'qty' => $this->input->post('qty'),
                'satuan' => $this->input->post('satuan'),
                'type' => $this->input->post('type')
            );
            $insert = $this->atk_model->insertbarang($data);
            redirect('atk/view_data');
        }
    }

    public function view_data()
    {
        $data['judul'] = 'Tabel Data ATK';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['data'] = $this->atk_model->getDataBarang();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/view_data', $data);
        $this->load->view('template/footer');
    }
    public function view_data_barang_habis_pakai()
    {
        $data['judul'] = 'Tabel Data ATK';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['data'] = $this->atk_model->getDataBarang2();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/view_data', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data ATK';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['data'] = $this->atk_model->getDataBarangById($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/edit', $data);
        $this->load->view('template/footer');
    }
    public function barang_masuk($id)
    {
        $data['judul'] = 'Barang Masuk';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['data'] = $this->atk_model->getDataBarangById($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/barang_masuk', $data);
        $this->load->view('template/footer');
    }
    public function barang_rusak($id)
    {
        $data['judul'] = 'Barang Rusak';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['data'] = $this->atk_model->getDataBarangById($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('atk/barang_rusak', $data);
        $this->load->view('template/footer');
    }

    public function prosesEdit($id)
    {
        $this->form_validation->set_rules('item', 'Item', 'required');
        $this->form_validation->set_rules('qty', 'quantity', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = array(
                'item' => $this->input->post('item'),
                'qty' => $this->input->post('qty'),
                'satuan' => $this->input->post('satuan')
            );
            $update = $this->atk_model->update($id, $data);
            redirect('atk/view_data');
        }
    }
    public function tambah_stok()
    {
        $data = array(
            'id_barang' => $this->input->post('id_barang'),
            'jumlah' => $this->input->post('jumlah'),
            'tanggal_barang_masuk' => date("Y-m-d")
        );
        $barang = $this->atk_model->getDataBarangById($this->input->post('id_barang'));

        $data2 = array(
            'qty' => $barang->qty + $this->input->post('jumlah')
        );
        $this->db->insert('barang_masuk', $data);

        $this->db->where('id', $this->input->post('id_barang'));

        $this->db->update('data_barang', $data2);

        redirect('atk/view_data');
    }
    public function update_barang_rusak()
    {
        $data = array(
            'id_barang' => $this->input->post('id_barang'),
            'jumlah' => $this->input->post('jumlah'),
            'tanggal_barang_rusak' => date("Y-m-d")
        );
        $barang = $this->atk_model->getDataBarangById($this->input->post('id_barang'));

        $data2 = array(
            'qty' => $barang->qty - $this->input->post('jumlah')
        );
        $this->db->insert('barang_rusak', $data);

        $this->db->where('id', $this->input->post('id_barang'));

        $this->db->update('data_barang', $data2);

        redirect('atk/view_data');
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $delete = $this->db->delete('data_barang');
        redirect('atk/view_data');
    }
    public function hapus_masuk($id)
    {
        $this->db->where('id_barang_masuk', $id);
        $delete = $this->db->delete('barang_masuk');
        redirect('atk/view_data');
    }
    public function hapus_rusak($id)
    {
        $this->db->where('id_barang_rusak', $id);
        $delete = $this->db->delete('barang_rusak');
        redirect('atk/view_data');
    }

    public function excel()
    {
        $data['data'] = $this->atk_model->excel();
        $this->load->view('atk/excel', $data);
    }
}
/* End of file Atk.php */
