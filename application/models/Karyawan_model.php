<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    public function get_karyawan($id)
    {
        $this->db->select('*');
        $this->db->from('data_karyawan');
        $this->db->join('departemen', 'departemen.id = data_karyawan.id_dep');
        $this->db->join('jabatan', 'jabatan.id_jab = data_karyawan.id_jab');
        $this->db->join('user_login', 'user_login.id_kar = data_karyawan.id_karyawan');
        $this->db->where('id_karyawan', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function getid($id)
    {
        $this->db->where('id_karyawan', $id);
        $query = $this->db->get('data_karyawan');
        return $query->row();
    }
    public function update_karyawan($data, $id)
    {
        $this->db->where('id_karyawan', $id);

        $this->db->update('data_karyawan', $data);
    }

    public function getdatakaryawan($id_karyawan)
    {
        $this->db->select('*');
        $this->db->from('data_karyawan');
        $this->db->join('departemen', 'departemen.id = data_karyawan.id_dep');
        $this->db->join('jabatan', 'jabatan.id_jab = data_karyawan.id_jab');
        $this->db->where('id_karyawan', $id_karyawan);
        return $this->db->get()->row();
    }

    public function cek_pass($password, $id_kar)
    {
        $this->db->where('id_kar', $id_kar);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get('user_login');

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function tambah_pendidikan($data)
    {
        $this->db->insert('pendidikan', $data);
    }

    public function pendidikan($id)
    {
        $this->db->where('id_kar', $id);
        $this->db->order_by('tahun_pendidikan', 'ASC');
        return $this->db->get('pendidikan')->result();
    }

    public function getpendidikanid($id)
    {
        $this->db->where('id_pen', $id);
        return $this->db->get('pendidikan')->row();
    }
    public function edit_pendidikan($id_pen, $data)
    {
        $this->db->where('id_pen', $id_pen);
        $this->db->update('pendidikan', $data);
    }
    public function tambah_riwayat_pekerjaan($data)
    {
        $this->db->insert('rw_pekerjaan', $data);
    }

    public function edit_riwayat_pekerjaan($data, $id)
    {
        $this->db->where('id_rw_pekerjaan', $id);
        $this->db->update('rw_pekerjaan', $data);
    }

    public function riwayat_kerja($id)
    {
        $this->db->where('id_kar', $id);
        $this->db->order_by('periode', 'ASC');
        return $this->db->get('rw_pekerjaan')->result();
    }

    public function get_id_rw($id)
    {
        $this->db->where('id_rw_pekerjaan', $id);
        return $this->db->get('rw_pekerjaan')->row();
    }

    public function tambah_pasangan($data)
    {
        $this->db->insert('data_pasangan', $data);
    }
    public function get_datapasangan($id_kar)
    {
        $this->db->where('id_kar', $id_kar);
        return $this->db->get('data_pasangan')->result();
    }



    public function tambah_anak($data)
    {
        $this->db->insert('data_anak', $data);
    }
    public function edit_anak($data, $id_anak)
    {
        $this->db->where('id_anak', $id_anak);
        $this->db->update('data_anak', $data);
    }

    public function getanak($id_kar)
    {
        $this->db->where('id_kar', $id_kar);
        return $this->db->get('data_anak')->result();
    }

    public function dataanak($id_anak)
    {
        $this->db->where('id_anak', $id_anak);
        return $this->db->get('data_anak')->row();
    }

    public function edit_pasangan($data, $id_pasangan)
    {
        $this->db->where('id_pasangan', $id_pasangan);
        $this->db->update('data_istri', $data);
    }

    public function getpasangan($id_pasangan)
    {
        $this->db->where('id_pasangan', $id_pasangan);
        return $this->db->get('data_pasangan')->row();
    }

    public function tambah_data_orangtua($data)
    {
        $this->db->insert('data_orang_tua', $data);
    }

    public function orangtuaget($id_kar)
    {
        $this->db->where('id_kar', $id_kar);
        // $this->db->where('id_ortu', $id_ortu);
        $query = $this->db->get('data_orang_tua');

        if ($query == true) {
            return $query->row();
        } else {
            return;
        }
    }

    public function dataortu($id_ortu)
    {
        $this->db->where('id_ortu', $id_ortu);
        $query = $this->db->get('data_orang_tua');
        return $query->row();
    }
    public function edit_data_orangtua($id_ortu, $data)
    {
        $this->db->where('id_ortu', $id_ortu);
        $this->db->update('data_orang_tua', $data);
    }

    public function tambah_riwayat_pelatihan($data)
    {
        $this->db->insert('data_riwayat_pelatihan', $data);
    }

    public function getriwayatpelatihan($id_kar)
    {
        $this->db->where('id_kar', $id_kar);
        return $this->db->get('data_riwayat_pelatihan')->result();
    }
    public function getdatapelatihan($id_pelatihan)
    {
        $this->db->where('id_pelatihan', $id_pelatihan);
        return $this->db->get('data_riwayat_pelatihan')->row();
    }
    public function edit_riwayat_pelatihan($id_pelatihan, $data)
    {
        $this->db->where('id_pelatihan', $id_pelatihan);
        $this->db->update('data_riwayat_pelatihan', $data);
    }

    public function hitung_overtime($id_kar)
    {
        $tahun = date('Y');
        $bulan = date('m');
        $this->db->where('id_kar', $id_kar);
        $this->db->where('YEAR(date)', $tahun);
        $this->db->where('MONTH(date)', $bulan);

        $this->db->select_sum('overtime');
        $query = $this->db->get('absen');
        if ($query->num_rows() > 0) {
            return $query->row()->overtime;
        } else {
            return 0;
        }
    }

    public function overtime_bulan($id_kar, $tahun, $bulan)
    {
        $this->db->where('id_kar', $id_kar);
        $this->db->where('YEAR(date)', $tahun);
        $this->db->where('MONTH(date)', $bulan);

        $this->db->select_sum('overtime');
        $query = $this->db->get('absen');
        if ($query->num_rows() > 0) {
            return $query->row()->overtime;
        } else {
            return 0;
        }
    }

    public function cari_absen_bulan($id_kar, $tahun, $bulan)
    {
        $this->db->select('*');
        $this->db->from('absen');
        $this->db->where('id_kar', $id_kar);
        $this->db->where('YEAR(date)', $tahun);
        $this->db->where('MONTH(date)', $bulan);
        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file Karyawan_model.php */
