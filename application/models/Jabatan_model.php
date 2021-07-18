<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan_model extends CI_Model
{

    public function getData()
    {
        $query = $this->db->get('jabatan');
        return $query->result();
    }

    public function getDataById($id)
    {
        $this->db->where('id_jab', $id);
        $query = $this->db->get('jabatan');
        return $query->row();
    }

    public function insertData($data)
    {
        $this->db->insert('jabatan', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_jab', $id);
        $this->db->update('jabatan', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_jab', $id);
        $this->db->delete('jabatan');
    }
}

/* End of file jabatan_model.php */
