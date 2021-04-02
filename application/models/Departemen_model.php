<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Departemen_model extends CI_Model
{

    public function getData()
    {
        $query = $this->db->get('departemen');
        return $query->result();
    }

    public function getDataById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('departemen');
        return $query->row();
    }

    public function insertData($data)
    {
        $this->db->insert('departemen', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('departemen', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('departemen');
    }
}

/* End of file Departemen_model.php */
