<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hr_model extends CI_Model

{
    public function data_karyawan()
    {
        $this->db->select('*');
        $this->db->from('data_karyawan');
        $this->db->join('departemen', 'departemen.id = data_karyawan.id_dep');
        $this->db->join('jabatan', 'jabatan.id_jab = data_karyawan.id_jab');
        $query = $this->db->get();
        return $query->result();
    }
    public function data_karyawan_hr()
    {
        $this->db->select('*');
        $this->db->from('data_karyawan');
        $this->db->join('departemen', 'departemen.id = data_karyawan.id_dep');

        // $this->db->where('id_dep', "1");

        $query = $this->db->get();
        return $query->result();
    }

    public function data_karyawanbydep($dep)
    {
        $this->db->where('id_dep', $dep);
        $query = $this->db->get('data_karyawan');
        return $query->result();
    }

    public function get_akun_login()
    {
        $query = $this->db->get('akun_login');
        return $query->result();
    }

    public function tambah_karyawan($data)
    {
        $this->db->insert('data_karyawan', $data);
    }

    public function tambah_user($data2)
    {
        $this->db->insert('user_login', $data2);
    }
    public function hitung_id($dep)
    {
        $this->db->where('id_dep', $dep);
        $query = $this->db->get('data_karyawan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // public function departemen()
    // {
    //     return $this->db->get('departemen')->result();
    // }

    public function hitung_karyawan()
    {

        // $this->db->where('id_dep', $dep);
        $query = $this->db->get('data_karyawan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }


    public function cari_overtime($bulan, $tahun, $id_kar)
    {
        $this->db->where('bulan', $bulan);
        $this->db->where('tahun', $tahun);
        $this->db->where('id_kar', $id_kar);
        return $this->db->get('overtime')->result();
    }

    public function insertexcel($data)
    {
        $this->db->insert('overtime', $data);
    }
    public function update_absen($id_absen, $data)
    {
        $this->db->where('id_absen', $id_absen);

        $this->db->update('absen', $data);
    }

    public function cektanggalexcel($date)
    {

        $this->db->where('date', $date);
        return $this->db->get('absen')->row();
    }

    public function cari_absen_tanggal($date)
    {
        $this->db->select('*');
        $this->db->from('data_karyawan');
        $this->db->join('departemen', 'departemen.id = data_karyawan.id_dep');
        $this->db->join('absen', 'absen.id_kar = data_karyawan.id_karyawan');
        $this->db->where('date', $date);
        $query = $this->db->get();
        return $query->result();
    }
    public function cari_absen_tanggal_kar($id_kar, $date)
    {
        $this->db->select('*');
        $this->db->from('data_karyawan');
        $this->db->join('departemen', 'departemen.id = data_karyawan.id_dep');
        $this->db->join('absen', 'absen.id_kar = data_karyawan.id_karyawan');
        $this->db->where('id_karyawan', $id_kar);
        $this->db->where('date', $date);
        $query = $this->db->get();
        return $query->row();
    }
}

/* End of file Hr_model.php */
