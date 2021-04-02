<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Catering_model extends CI_Model
{
    public function get_data()
    {
        $x = $this->db->get('data_catering');
        return $x->result();
    }

    public function insert($data)
    {
        $this->db->insert('data_catering', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('data_catering', $data);
    }

    public function data_row($id)
    {
        $this->db->where('id', $id);

        $x = $this->db->get('data_catering');
        return $x->row();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_catering');
    }
}

/* End of file Catering_model.php */
