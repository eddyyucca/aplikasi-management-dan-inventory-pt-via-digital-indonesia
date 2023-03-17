<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function login($id_kar, $password)
    {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->join('data_karyawan', 'data_karyawan.id_karyawan = user_login.id_kar');
        $this->db->where('id_kar', $id_kar);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } elseif ($query->num_rows == 0) {
            $this->db->select('*');
            $this->db->from('developer');
            $this->db->where('username', $id_kar);
            $this->db->where('password', $password);
            $this->db->limit(1);
            $query2 = $this->db->get();
            if ($query2->num_rows() == 1) {
                return $query2->result();
            } else {
                return false;
            }
        }
    }

    public function login_user($id_kar)
    {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->join('data_karyawan', 'data_karyawan.id_karyawan = user_login.id_kar');
        // $this->db->select('*');
        // $this->db->from('user_login');
        $this->db->where('id_kar', $id_kar);
        // $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function departemen()
    {
        $this->db->order_by('nama_dep', 'ASC');
        $query = $this->db->get('departemen');
        return $query->result();
    }

    public function auth_vendor($username, $password)
    {
        $this->db->select('*');
        $this->db->from('vendor');
        $this->db->where('username_v', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function auth_pos($username_p, $password_p)
    {
        $this->db->select('*');
        $this->db->from('lokasi_pos');
        $this->db->where('username_p', $username_p);
        $this->db->where('password_p', $password_p);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}

/* End of file Auth_model.php */
