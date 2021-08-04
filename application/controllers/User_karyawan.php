<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_karyawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('auth_model');
        $this->load->model('order_model');

        $this->load->model('hr_model');
        $this->load->model('karyawan_model');
        $this->load->model('departemen_model');
        $this->load->model('jabatan_model');
        $this->load->model('akun_model');
        $this->load->library('form_validation');
        // ini_set('date.timezone', 'Asia/Kuala_Lumpur');
        // $level_akun = $this->session->userdata('level');
        // if ($this->session->userdata('level') == false) {
        //     redirect('auth');
        // } elseif ($this->session->userdata('level') == "vendor") {
        //     redirect('auth');
        // } elseif ($level_akun == "vendor") {
        //     redirect('auth');
        // } elseif ($level_akun == "pos") {
        //     redirect('auth');
        // }
    }

    public function index()
    {
        $data['judul'] = $this->session->userdata('nama_lengkap');
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $id = $this->session->userdata('id_kar');
        $id_kar = $this->session->userdata('id_kar');
        $x = $this->karyawan_model->get_karyawan($id);
        $data['data'] =  json_decode(json_encode($x), true);


        $this->load->view('user/template/header', $data);
        $this->load->view('user_karyawan/index', $data);
        $this->load->view('user/template/footer');
    }

    public function tambah_data_diri()
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $id = $this->session->userdata('id_kar');
        $x = $this->karyawan_model->get_karyawan($id);
        $data['data'] =  json_decode(json_encode($x), true);

        $data['dep'] = $this->departemen_model->getData();
        $data['jab'] = $this->jabatan_model->getData();

        $data['getid'] = $this->karyawan_model->getid($id);

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/data_diri/tambah_data_diri', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function prosestambahdatadiri($id)
    {
        $config['upload_path']   = './assets/foto_profil/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //$config['max_size']      = 100; 
        //$config['max_width']     = 1024; 
        //$config['max_height']    = 768;  

        $this->load->library('upload', $config);
        // script upload file 1
        $this->upload->do_upload('foto');
        $x = $this->upload->data();
        $foto = $this->karyawan_model->getid($id);

        if ($x["file_name"] == true) {
            $file1 = $this->upload->data();
        } else {
            $file1["orig_name"] = $foto->foto;
        }

        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nama_panggilan' => $this->input->post('nama_panggilan'),
            'jk' => $this->input->post('jk'),
            'tempat' => $this->input->post('tempat'),
            'ttl' => $this->input->post('ttl'),
            'alamat_saat_ini' => $this->input->post('alamat_saat_ini'),
            'alamat_permanen' => $this->input->post('alamat_permanen'),
            'no_telp' => $this->input->post('no_telp'),
            'agama' => $this->input->post('agama'),
            'warganegra' => $this->input->post('warganegra'),
            'suku' => $this->input->post('suku'),
            'no_ktp' => $this->input->post('no_ktp'),
            'alamat_ktp' => $this->input->post('alamat_ktp'),
            'masa_berlaku_ktp' => $this->input->post('masa_berlaku_ktp'),
            'no_sim_a' => $this->input->post('no_sim_a'),
            'alamat_sim_a' => $this->input->post('alamat_sim_a'),
            'masa_berlaku_sim_a' => $this->input->post('masa_berlaku_sim_a'),
            'no_sim_c' => $this->input->post('no_sim_c'),
            'alamat_sim_c' => $this->input->post('alamat_sim_c'),
            'masa_berlaku_sim_c' => $this->input->post('masa_berlaku_sim_c'),
            'no_npwp' => $this->input->post('no_npwp'),
            'no_bpjs_tenagakerja' => $this->input->post('no_bpjs_tenagakerja'),
            'no_bpjs_kes' => $this->input->post('no_bpjs_kes'),
            'no_passport' => $this->input->post('no_passport'),
            'alamat_passport' => $this->input->post('alamat_passport'),
            'masa_berlaku_passport' => $this->input->post('masa_berlaku_passport'),
            'tinggi_badan' => $this->input->post('tinggi_badan'),
            'berat_badan' => $this->input->post('berat_badan'),
            'rhesus' => $this->input->post('rhesus'),
            'ukuran_baju' => $this->input->post('ukuran_baju'),
            'ukuran_celana' => $this->input->post('ukuran_celana'),
            'ukuran_sepatu' => $this->input->post('ukuran_sepatu'),
            'hobi' => $this->input->post('hobi'),
            'email' => $this->input->post('email'),
            // 'id_dep' => $this->input->post('dep'),
            // 'id_jab' => $this->input->post('jab'),
            'foto' => $file1["orig_name"],
        );


        $this->karyawan_model->update_karyawan($data, $id);
        redirect('user_karyawan');
    }

    public function pendidikan()
    {
        $data['judul'] = 'Karyawan ';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $id = $this->session->userdata('id_kar');
        $x = $this->karyawan_model->get_karyawan($id);
        $data['data'] =  json_decode(json_encode($x), true);
        $data['pendidikan'] = $this->karyawan_model->pendidikan($id);
        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/pendidikan/index', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function password()
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');
        $data['pesan'] = "";

        $this->load->view('user/template/header', $data);
        $this->load->view('user_karyawan/password/ubah_password', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function prosesubahpass($id_kar)
    {
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required');
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Karyawan';
            $data['alerts'] = $this->order_model->getDataJoin();
            $data['alerts_3'] = $this->order_model->alerts_3();
            $data['nama'] = $this->session->userdata('nama_lengkap');
            $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
            $data['level_akun'] = $this->session->userdata('level');

            $data['id_kar'] = $this->session->userdata('id_kar');
            $data['pesan'] = "";

            $this->load->view('user_karyawan/template_user/header', $data);
            $this->load->view('user_karyawan/password/ubah_password', $data);
            $this->load->view('user_karyawan/template_user/footer');
        } else {

            $password = md5($this->input->post('password_lama'));
            $cek = $this->karyawan_model->cek_pass($password, $id_kar);

            if ($cek == true) {
                $data['judul'] = 'Karyawan';
                $data['alerts'] = $this->order_model->getDataJoin();
                $data['alerts_3'] = $this->order_model->alerts_3();
                $data['nama'] = $this->session->userdata('nama_lengkap');
                $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
                $data['level_akun'] = $this->session->userdata('level');

                $data['id_kar'] = $this->session->userdata('id_kar');
                $data['pesan'] = '<div class="alert alert-success" role="alert">Password Berhasil Diubah !
            </div>';
                $data_update = array(
                    "password" => md5($this->input->post('password_baru'))
                );
                $this->db->where('id_kar', $id_kar);
                $this->db->update('user_login', $data_update);



                $this->load->view('user_karyawan/template_user/header', $data);
                $this->load->view('user_karyawan/password/ubah_password', $data);
                $this->load->view('user_karyawan/template_user/footer');
            } else {
                $data['judul'] = 'Karyawan';
                $data['alerts'] = $this->order_model->getDataJoin();
                $data['alerts_3'] = $this->order_model->alerts_3();
                $data['nama'] = $this->session->userdata('nama_lengkap');
                $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
                $data['level_akun'] = $this->session->userdata('level');

                $data['id_kar'] = $this->session->userdata('id_kar');
                $data['pesan'] =  '<div class="alert alert-danger" role="alert">Password Salah !
                </div>';

                $this->load->view('user_karyawan/template_user/header', $data);
                $this->load->view('user_karyawan/password/ubah_password', $data);
                $this->load->view('user_karyawan/template_user/footer');
            }
        }
    }

    public function cetak_idcard($id_karyawan)
    {
        $data["data"] = $this->karyawan_model->getdatakaryawan($id_karyawan);

        $this->load->view('user_karyawan/report/idcard', $data);
    }

    public function riwayat_pendidikan($id_karyawan)
    {
        $id = $id_karyawan;
        $data["data"] = $this->karyawan_model->getdatakaryawan($id_karyawan);
        $data['pendidikan'] = $this->karyawan_model->pendidikan($id);
        $this->load->view('user_karyawan/report/riwayat_pendidikan', $data);
    }

    public function tambah_pendidikan()
    {
        $data['judul'] = 'Karyawan ';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $id_kar = $this->session->userdata('id_kar');


        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/pendidikan/tambah_pendidikan', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function edit_pendidikan($id)
    {
        $data['judul'] = 'Karyawan ';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['pendidikan'] = $this->karyawan_model->getpendidikanid($id);

        $id_kar = $this->session->userdata('id_kar');


        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/pendidikan/edit_pendidikan', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function prosestambahpendidikan()
    {
        $id = $this->session->userdata('id_kar');

        $data = array(
            "id_kar" => $id,
            "tingkat_pendidikan" => $this->input->post('tingkat_pendidikan'),
            "nama_sekolah" => $this->input->post('nama_sekolah'),
            "nama_jurusan" => $this->input->post('nama_jurusan'),
            "kota_pendidikan" => $this->input->post('kota_pendidikan'),
            "tahun_pendidikan" =>  $this->input->post('tahun_pendidikan'),
        );

        $insert = $this->karyawan_model->tambah_pendidikan($data);
        redirect('user_karyawan/pendidikan');
    }

    public function proseseditpendidikan($id_pen)
    {
        $id = $this->session->userdata('id_kar');
        $data = array(
            "id_kar" => $id,
            "tingkat_pendidikan" => $this->input->post('tingkat_pendidikan'),
            "nama_sekolah" => $this->input->post('nama_sekolah'),
            "nama_jurusan" => $this->input->post('nama_jurusan'),
            "kota_pendidikan" => $this->input->post('kota_pendidikan'),
            "tahun_pendidikan" =>  $this->input->post('tahun_pendidikan'),
        );

        $update = $this->karyawan_model->edit_pendidikan($id_pen, $data);
        redirect('user_karyawan/pendidikan');
    }

    public function hapus_pendidikan($id_pen)
    {
        $this->db->where('id_pen', $id_pen);
        $this->db->delete('pendidikan');
        redirect('user_karyawan/pendidikan');
    }

    public function riwayat_pekerjaan()
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');
        $id_kar = $this->session->userdata('id_kar');

        $data['riwayat_pekerjaan'] = $this->karyawan_model->riwayat_kerja($id_kar);

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/riwayat_pekerjaan/index', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }
    public function tambah_riwayat_pekerjaan()
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/riwayat_pekerjaan/tambah_riwayat_pekerjaan', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }
    public function edit_riwayat_pekerjaan($id)
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');
        $data['rw'] = $this->karyawan_model->get_id_rw($id);

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/riwayat_pekerjaan/edit_riwayat_pekerjaan', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function prosestambah_riwayatpendidikan()
    {
        $id_kar = $this->session->userdata('id_kar');

        $data = array(
            "id_kar" => $id_kar,
            "nama_perusahaan" => $this->input->post('nama_perusahaan'),
            "bidang_usaha" => $this->input->post('bidang_usaha'),
            "jab_terakhir" => $this->input->post('jab_terakhir'),
            "gaji_terakhir" => $this->input->post('gaji_terakhir'),
            "periode" => $this->input->post('periode'),
            "alasan_berhenti" => $this->input->post('alasan_berhenti'),
        );

        $insert = $this->karyawan_model->tambah_riwayat_pekerjaan($data);
        redirect('user_karyawan/riwayat_pekerjaan');
    }
    public function prosesedit_riwayatpekerjaan($id)
    {
        $id_kar = $this->session->userdata('id_kar');

        $data = array(
            "id_kar" => $id_kar,
            "nama_perusahaan" => $this->input->post('nama_perusahaan'),
            "bidang_usaha" => $this->input->post('bidang_usaha'),
            "jab_terakhir" => $this->input->post('jab_terakhir'),
            "gaji_terakhir" => $this->input->post('gaji_terakhir'),
            "periode" => $this->input->post('periode'),
            "alasan_berhenti" => $this->input->post('alasan_berhenti'),
        );

        $update = $this->karyawan_model->edit_riwayat_pekerjaan($data, $id);
        redirect('user_karyawan/riwayat_pekerjaan');
    }

    public function hapus_riwayat_pekerjaan($id)
    {
        $this->db->where('id_rw_pekerjaan', $id);
        $this->db->delete('rw_pekerjaan');
        redirect('user_karyawan/riwayat_pekerjaan');
    }

    // pasangan
    public function data_pasangan()
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');
        $id_kar = $this->session->userdata('id_kar');
        $data['pasangan'] =  $this->karyawan_model->get_datapasangan($id_kar);
        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/pasangan/index', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }
    public function tambah_data_pasangan()
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/pasangan/tambah_data_pasangan', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }
    public function edit_data_pasangan($id_pasangan)
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');
        $data['pasangan'] = $this->karyawan_model->getpasangan($id_pasangan);

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/pasangan/edit_data_pasangan', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function prosestambahpasangan()
    {
        $id_kar = $this->session->userdata('id_kar');
        $data = array(
            "id_kar" => $id_kar,
            "nama_lengkap_pasangan" => $this->input->post('nama_lengkap_pasangan'),
            "nama_panggilan_pasangan" => $this->input->post('nama_panggilan_pasangan'),
            "tempat_pasangan" => $this->input->post('tempat_pasangan'),
            "ttl_pasangan" => $this->input->post('ttl_pasangan'),
            "no_ktp_pasangan" => $this->input->post('no_ktp_pasangan'),
            "alamat_saat_ini_pasangan" => $this->input->post('alamat_saat_ini_pasangan'),
            "pendidikan_pasangan" => $this->input->post('tingkat_pendidikan_pasangan'),
            "telpon_pasangan" => $this->input->post('no_telp_pasangan'),
            "agama_pasangan" => $this->input->post('agama_pasangan'),
            "warganegra_pasangan" => $this->input->post('warganegra_pasangan'),
            "suku_pasangan" => $this->input->post('suku_pasangan'),
        );

        $insert = $this->karyawan_model->tambah_pasangan($data);
        redirect('user_karyawan/data_pasangan');
    }
    public function proseseditpasangan($id_pasangan)
    {
        $id_kar = $this->session->userdata('id_kar');
        $data = array(
            "id_kar" => $id_kar,
            "nama_lengkap_pasangan" => $this->input->post('nama_lengkap_pasangan'),
            "nama_panggilan_pasangan" => $this->input->post('nama_panggilan_pasangan'),
            "tempat_pasangan" => $this->input->post('tempat_pasangan'),
            "ttl_pasangan" => $this->input->post('ttl_pasangan'),
            "no_ktp_pasangan" => $this->input->post('no_ktp_pasangan'),
            "alamat_saat_ini_pasangan" => $this->input->post('alamat_saat_ini_pasangan'),
            "pendidikan_pasangan" => $this->input->post('tingkat_pendidikan_pasangan'),
            "telpon_pasangan" => $this->input->post('no_telp_pasangan'),
            "agama_pasangan" => $this->input->post('agama_pasangan'),
            "warganegra_pasangan" => $this->input->post('warganegra_pasangan'),
            "suku_pasangan" => $this->input->post('suku_pasangan'),
        );

        $update = $this->karyawan_model->edit_pasangan($data, $id_pasangan);
        redirect('user_karyawan/data_pasangan');
    }

    public function hapus_pasangan($id_pasangan)
    {
        $this->db->where('id_pasangan', $id_pasangan);
        $this->db->delete('data_pasangan');
        redirect('user_karyawan/data_pasangan');
    }
    // end pasangan

    // data anak
    public function data_anak()
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');
        $id_kar = $this->session->userdata('id_kar');
        $data['anak'] = $this->karyawan_model->getanak($id_kar);

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/anak/index', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }
    public function tambah_data_anak()
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/anak/tambah_data_anak', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }
    public function edit_data_anak($id_anak)
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');

        $data['anak'] = $this->karyawan_model->dataanak($id_anak);

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/anak/edit_data_anak', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function prosestambahanak()
    {
        $id_kar = $this->session->userdata('id_kar');
        $data = array(
            "id_kar" => $id_kar,
            "nama_lengkap_anak" => $this->input->post('nama_lengkap_anak'),
            "nama_panggilan_anak" => $this->input->post('nama_panggilan_anak'),
            "tempat_anak" => $this->input->post('tempat_anak'),
            "ttl_anak" => $this->input->post('ttl_anak'),
            "no_ktp_anak" => $this->input->post('no_ktp_anak'),
            "alamat_saat_ini_anak" => $this->input->post('alamat_saat_ini_anak'),
            "tingkat_pendidikan_anak" => $this->input->post('tingkat_pendidikan_anak'),
            "no_telp_anak	" => $this->input->post('no_telp_anak'),
            "agama_anak" => $this->input->post('agama_anak'),
            "warganegara_anak" => $this->input->post('warganegara_anak'),
            "suku_anak" => $this->input->post('suku_anak'),
        );

        $insert = $this->karyawan_model->tambah_anak($data);
        redirect('user_karyawan/data_anak');
    }
    public function proseseditanak($id_anak)
    {
        $id_kar = $this->session->userdata('id_kar');
        $data = array(
            "id_kar" => $id_kar,
            "nama_lengkap_anak" => $this->input->post('nama_lengkap_anak'),
            "nama_panggilan_anak" => $this->input->post('nama_panggilan_anak'),
            "tempat_anak" => $this->input->post('tempat_anak'),
            "ttl_anak" => $this->input->post('ttl_anak'),
            "no_ktp_anak" => $this->input->post('no_ktp_anak'),
            "alamat_saat_ini_anak" => $this->input->post('alamat_saat_ini_anak'),
            "tingkat_pendidikan_anak" => $this->input->post('tingkat_pendidikan_anak'),
            "no_telp_anak	" => $this->input->post('no_telp_anak'),
            "agama_anak" => $this->input->post('agama_anak'),
            "warganegara_anak" => $this->input->post('warganegara_anak'),
            "suku_anak" => $this->input->post('suku_anak'),
        );

        $update = $this->karyawan_model->edit_anak($data, $id_anak);
        redirect('user_karyawan/data_anak');
    }

    public function hapus_anak($id_anak)
    {
        $this->db->where('id_anak', $id_anak);
        $this->db->delete('data_anak');
        redirect('user_karyawan/data_anak');
    }
    //end anak

    //orangtua
    public function data_orangtua()
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');
        $id_kar = $this->session->userdata('id_kar');


        $data['ortu'] = $this->karyawan_model->orangtuaget($id_kar);
        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/orang_tua/index', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }
    public function tambah_data_orangtua()
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');
        $id_kar = $this->session->userdata('id_kar');


        $data['ortu'] = $this->karyawan_model->orangtuaget($id_kar);
        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/orang_tua/data_orangtua', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }
    public function edit_orangtua($id_ortu)
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');
        // $id_kar = $this->session->userdata('id_kar');

        $data['ortu'] = $this->karyawan_model->dataortu($id_ortu);
        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/orang_tua/edit_orangtua', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function prosestambahorangtua()
    {
        $id_kar = $this->session->userdata('id_kar');
        $data = array(
            // ayah
            "id_kar" => $id_kar,
            "nama_lengkap_ortu_lk" => $this->input->post('nama_lengkap_ortu_lk'),
            "nama_panggilan_ortu_lk" => $this->input->post('nama_panggilan_ortu_lk'),
            "tempat_ortu_lk" => $this->input->post('tempat_ortu_lk'),
            "ttl_ortu_lk" => $this->input->post('ttl_ortu_lk'),
            "no_ktp_ortu_lk" => $this->input->post('no_ktp_ortu_lk'),
            "alamat_saat_ini_ortu_lk" => $this->input->post('alamat_saat_ini_ortu_lk'),
            "tingkat_pendidikan_ortu_lk" => $this->input->post('tingkat_pendidikan_ortu_lk'),
            "no_telp_ortu_lk" => $this->input->post('no_telp_ortu_lk'),
            "agama_ortu_lk" => $this->input->post('agama_ortu_lk'),
            "warganegara_ortu_lk" => $this->input->post('warganegara_ortu_lk'),
            "suku_ortu_lk" => $this->input->post('suku_ortu_lk'),

            // ibu
            "nama_lengkap_ortu_pr" => $this->input->post('nama_lengkap_ortu_pr'),
            "nama_panggilan_ortu_pr" => $this->input->post('nama_panggilan_ortu_pr'),
            "tempat_ortu_pr" => $this->input->post('tempat_ortu_pr'),
            "ttl_ortu_pr" => $this->input->post('ttl_ortu_pr'),
            "no_ktp_ortu_pr" => $this->input->post('no_ktp_ortu_pr'),
            "alamat_saat_ini_ortu_pr" => $this->input->post('alamat_saat_ini_ortu_pr'),
            "tingkat_pendidikan_ortu_pr" => $this->input->post('tingkat_pendidikan_ortu_pr'),
            "no_telp_ortu_pr" => $this->input->post('no_telp_ortu_pr'),
            "agama_ortu_pr" => $this->input->post('agama_ortu_pr'),
            "warganegara_ortu_pr" => $this->input->post('warganegara_ortu_pr'),
            "suku_ortu_pr" => $this->input->post('suku_ortu_pr'),
        );

        $insert = $this->karyawan_model->tambah_data_orangtua($data);
        redirect('user_karyawan/data_orangtua');
    }
    public function proseseditorangtua($id_ortu)
    {

        $data = array(
            // ayah
            "nama_lengkap_ortu_lk" => $this->input->post('nama_lengkap_ortu_lk'),
            "nama_panggilan_ortu_lk" => $this->input->post('nama_panggilan_ortu_lk'),
            "tempat_ortu_lk" => $this->input->post('tempat_ortu_lk'),
            "ttl_ortu_lk" => $this->input->post('ttl_ortu_lk'),
            "no_ktp_ortu_lk" => $this->input->post('no_ktp_ortu_lk'),
            "alamat_saat_ini_ortu_lk" => $this->input->post('alamat_saat_ini_ortu_lk'),
            "tingkat_pendidikan_ortu_lk" => $this->input->post('tingkat_pendidikan_ortu_lk'),
            "no_telp_ortu_lk" => $this->input->post('no_telp_ortu_lk'),
            "agama_ortu_lk" => $this->input->post('agama_ortu_lk'),
            "warganegara_ortu_lk" => $this->input->post('warganegara_ortu_lk'),
            "suku_ortu_lk" => $this->input->post('suku_ortu_lk'),

            // ibu
            "nama_lengkap_ortu_pr" => $this->input->post('nama_lengkap_ortu_pr'),
            "nama_panggilan_ortu_pr" => $this->input->post('nama_panggilan_ortu_pr'),
            "tempat_ortu_pr" => $this->input->post('tempat_ortu_pr'),
            "ttl_ortu_pr" => $this->input->post('ttl_ortu_pr'),
            "no_ktp_ortu_pr" => $this->input->post('no_ktp_ortu_pr'),
            "alamat_saat_ini_ortu_pr" => $this->input->post('alamat_saat_ini_ortu_pr'),
            "tingkat_pendidikan_ortu_pr" => $this->input->post('tingkat_pendidikan_ortu_pr'),
            "no_telp_ortu_pr" => $this->input->post('no_telp_ortu_pr'),
            "agama_ortu_pr" => $this->input->post('agama_ortu_pr'),
            "warganegara_ortu_pr" => $this->input->post('warganegara_ortu_pr'),
            "suku_ortu_pr" => $this->input->post('suku_ortu_pr'),
        );

        $update = $this->karyawan_model->edit_data_orangtua($id_ortu, $data);
        redirect('user_karyawan/data_orangtua');
    }

    public function hapus_orangtua($id_ortu)
    {
        $this->db->where('id_ortu', $id_ortu);
        $this->db->delete('data_orang_tua');
        redirect('user_karyawan/data_orangtua');
    }
    //end orangtua

    // pelatihan
    public function pelatihan()
    {
        $data['judul'] = 'Karyawan';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');
        $id_kar = $this->session->userdata('id_kar');
        $data['riwayat_pelatihan'] = $this->karyawan_model->getriwayatpelatihan($id_kar);

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/riwayat_pelatihan/index', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function tambah_riwayat_pelatihan()
    {
        $data['judul'] = 'Karyawan';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/riwayat_pelatihan/tambah_riwayat_pelatihan', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function edit_riwayat_pelatihan($id_pelatihan)
    {
        $data['judul'] = 'Karyawan';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        $data['id_kar'] = $this->session->userdata('id_kar');
        $data['pelatihan'] = $this->karyawan_model->getdatapelatihan($id_pelatihan);

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/riwayat_pelatihan/edit_riwayat_pelatihan', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function prosestambah_riwayatpelatihan()
    {
        $id_kar = $this->session->userdata('id_kar');
        $data = array(
            "id_kar" => $id_kar,
            "bidang" => $this->input->post('bidang'),
            "penyelenggara" => $this->input->post('penyelenggara'),
            "periode" => $this->input->post('periode')

        );

        $simpan = $this->karyawan_model->tambah_riwayat_pelatihan($data);
        redirect('user_karyawan/pelatihan');
    }
    public function prosesedit_riwayatpelatihan($id_pelatihan)
    {
        $data = array(
            "bidang" => $this->input->post('bidang'),
            "penyelenggara" => $this->input->post('penyelenggara'),
            "periode" => $this->input->post('periode')

        );

        $simpan = $this->karyawan_model->edit_riwayat_pelatihan($id_pelatihan, $data);
        redirect('user_karyawan/pelatihan');
    }
    public function hapus_riwayat_pelatihan($id_pelatihan)
    {
        $this->db->where('id_pelatihan', $id_pelatihan);
        $this->db->delete('data_riwayat_pelatihan');
        redirect('user_karyawan/pelatihan');
    }
    // end pelatihan

    public function data_absen()
    {
        $id_kar = $this->session->userdata('id_kar');
        $data['judul'] = 'Data Absen';
        $data['level_akun'] = $this->session->userdata('level');
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));

        $data['id_kar'] = $id_kar;
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $cari = $this->input->post('cari');

        if ($cari == true) {
            $data['data'] = $this->hr_model->cari_overtime($bulan, $tahun, $id_kar);
        } elseif ($cari == false) {
            $data['data'] = false;
        }

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/absen_karyawan/index', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }
    public function makanan()
    {
        $data['judul'] = 'Order Makanan';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');


        $data['id_kar'] = $this->session->userdata('id_kar');
        $data['mess_2'] = $this->mess_model->data_mess();

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/makanan/index', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }
    public function order_makanan()
    {

        $data['judul'] = 'laporan order makan';
        // $data['alerts'] = $this->order_model->getDataJoin();
        // $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data_departemen'] = $this->akun_model->getDataDepartemen();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['jabatan'] = $this->jabatan_model->getDataById($this->session->userdata('id_jab'));
        $data['level_akun'] = $this->session->userdata('level');

        if ($this->input->post('date') == false) {
            $data['makanan'] = false;
        } elseif ($this->input->post('date') == true) {
            $date = $this->input->post('date');
            $data['makanan'] = $this->order_model->ordermakan($date);
        }

        $this->load->view('user_karyawan/template_user/header', $data);
        $this->load->view('user_karyawan/makanan/riwayat', $data);
        $this->load->view('user_karyawan/template_user/footer');
    }

    public function prosesordermakan()
    {
        $id_kar = $this->session->userdata('id_kar');
        $xx = "";
        foreach ($this->input->post('waktu[]') as $x) {
            $xx .= $x . ",";
        }
        $data = array(
            "id_kar" => $id_kar,
            "tanggal_pesan" => $this->input->post('tanggal_pesanan'),
            "waktu_post" => date('Y-m-d / H:i:s a'),
            "nama_mess" => $this->input->post('nama_mess'),
            "waktu" => $xx
        );
        $this->db->insert('order_makanan', $data);
        $this->session->set_Flashdata('pesanan', "<div class='alert alert-success' role='alert'>Makanan Berhasil Dipesan  !
        </div>");
        redirect('user_karyawan');
    }
}

/* End of file Hr.php */
