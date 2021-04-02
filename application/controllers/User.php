<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('cart');
        $this->load->library('pagination');
        if ($this->session->userdata('level') != "user") {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['judul'] = 'Home';

        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('user/template/header_home', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/template/footer');
    }

    public function atk()

    {
        //page
        $config['base_url'] = site_url('user/atk'); //site url
        $config['total_rows'] = $this->db->count_all('data_barang'); //total row
        $config['per_page'] = 9;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['data'] = $this->user_model->penomoran($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        //end


        $data['judul'] = 'Tabel Data ATK';
        $data['databarang'] = $this->user_model->getDataBarang();
        $data['keranjang'] = $this->cart->contents();
        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('user/template/header', $data);
        $this->load->view('user/atk/atk', $data);
        $this->load->view('user/template/footer');
    }

    public function cari()
    {
        $cari = $this->input->post('cari');

        $data['judul'] = 'Tabel Data ATK';
        $data['databarang'] = $this->user_model->cari($cari);
        $data['keranjang'] = $this->cart->contents();
        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('user/template/header', $data);
        $this->load->view('user/atk/cari', $data);
        $this->load->view('user/template/footer');
    }

    public function pencarian()
    {
        $data = array(
            'cari' => $this->input->post('cari')
        );
        $cari = $this->user_model->cari($data);
    }

    public function order($id)
    {
        $data['judul'] = 'View Order';
        $data['data'] = $this->user_model->getDataBarangById($id);
        $data['keranjang'] = $this->cart->contents();
        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('user/template/header', $data);
        $this->load->view('user/atk/view_order', $data);
        $this->load->view('user/template/footer');
    }

    public function prosesOrder($id)
    {

        $data = array(
            'id' => $id,
            'price' => '',
            'item' => $this->input->post('item'),
            'name' => $this->session->userdata('nama_user'),
            'qty' => $this->input->post('qty'),
            'id_dep' => $this->session->userdata('id_dep'),
            'satuan' =>  $this->input->post('satuan'),
            'tanggal' => date('Y-m-d')
        );
        $this->cart->insert($data);
        redirect('user/atk');
    }

    public function keranjang()
    {
        $data['judul'] = 'View Order';

        $data['nama'] = $this->session->userdata('nama_user');
        $data['keranjang'] = $this->cart->contents();
        $this->load->view('user/template/header', $data);
        $this->load->view('user/atk/keranjang', $data);
        $this->load->view('user/template/footer');
    }

    public function hapus($rowid)
    {
        if ($rowid == "semua") {
            $this->cart->destroy();
        } else {
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            $this->cart->update($data);
        }
        redirect('user/keranjang');
    }

    public function insert()
    {
        $x = $this->db->get('data_order')->result();
        $id_x = count($x) + 1;
        $cart = $this->cart->contents();
        foreach ($cart as $item) {
            $data = array(
                'id_order' => '',
                'id_keranjang' => $id_x,
                'id_barang' => $item['id'],
                'qty_order' => $item['qty'],
                'id_dep' => $item['id_dep'],
                'user_id' => $item['name'],
                'tanggal' => $item['tanggal']
            );
            $this->user_model->insert($data);
        }

        $keranjang = array(
            'id_ker' => $id_x,
            'departemen' => $item['id_dep'],
            'user' => $item['name'],
            'status' => '3',
            'tanggal' => $item['tanggal']
        );
        $this->user_model->insert_result($keranjang);
        $this->cart->destroy();
        redirect('user/atk/atk');
    }

    public function status()
    {
        $data['judul'] = 'Status Order';
        $data['nama'] = $this->session->userdata('nama_user');
        $id_dep = $this->session->userdata('id_dep');
        $data['data'] = $this->user_model->status($id_dep);
        $data['keranjang'] = $this->cart->contents();
        $this->load->view('user/template/header', $data);
        $this->load->view('user/atk/status', $data);
        $this->load->view('user/template/footer');
    }
    public function sarana()
    {
        $data['judul'] = 'Tabel Sarana';
        $data['data'] = $this->user_model->sarana();
        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('user/template/header_home', $data);
        $this->load->view('user/sarana/sarana', $data);
        $this->load->view('user/template/footer');
    }

    public function view_sarana($id)
    {
        $data['judul'] = 'Tabel Sarana';
        $data['data'] = $this->user_model->sarana_row($id);
        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('user/template/header_home', $data);
        $this->load->view('user/sarana/view_sarana', $data);
        $this->load->view('user/template/footer');
    }

    //mess

    public function mess()
    {
        $data['judul'] = 'Tabel Sarana';
        $data['data'] = $this->user_model->data_mess();
        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('user/template/header_home', $data);
        $this->load->view('user/mess/mess', $data);
        $this->load->view('user/template/footer');
    }
    public function view_mess($id)
    {
        $data['judul'] = 'Tabel Sarana';
        $data['data'] = $this->user_model->data_mess_row($id);
        $data['nama'] = $this->session->userdata('nama_user');
        $this->load->view('user/template/header_home', $data);
        $this->load->view('user/mess/view_mess', $data);
        $this->load->view('user/template/footer');
    }

    //seragam
    public function seragam()
    {
        $data['judul'] = 'Seragam';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('user/template/header_home', $data);
        $this->load->view('user/seragam/index', $data);
        $this->load->view('user/template/footer');
    }
    public function view_seragam_kerja()
    {
        $data['judul'] = 'Seragam Kerja';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->user_model->get_seragam_kerja();


        $this->load->view('user/template/header_home', $data);
        $this->load->view('user/seragam/view_seragam_kerja', $data);
        $this->load->view('user/template/footer');
    }

    public function view_kaos()
    {
        $data['judul'] = 'Seragam Kerja';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->user_model->get_kaos();

        $this->load->view('user/template/header_home', $data);
        $this->load->view('user/seragam/view_kaos', $data);
        $this->load->view('user/template/footer');
    }

    public function view_celana()
    {
        $data['judul'] = 'Seragam Kerja';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->user_model->get_celana();

        $this->load->view('user/template/header_home', $data);
        $this->load->view('user/seragam/view_celana', $data);
        $this->load->view('user/template/footer');
    }

    //catering
    public function catering()
    {
        $data['judul'] = 'Catering';
        $data['data'] = $this->user_model->get_data_catering();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('user/template/header_home', $data);
        $this->load->view('user/catering/index', $data);
        $this->load->view('user/template/footer');
    }

    public function view_catering($id)
    {
        $data['judul'] = 'View Catering';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data'] = $this->user_model->data_row_catering($id);

        $this->load->view('user/template/header_home', $data);
        $this->load->view('user/catering/view', $data);
        $this->load->view('user/template/footer');
    }
}

/* End of file User_biasa.php */
