<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function login($dep, $password)
    {
        $this->db->select('id,nama_user,password,id_dep,level');
        $this->db->from('user');
        $this->db->where('id_dep', $dep);
        $this->db->where('password', $password);
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
        $query = $this->db->get('departemen');
        return $query->result();
    }
}

/* End of file Auth_model.php */
