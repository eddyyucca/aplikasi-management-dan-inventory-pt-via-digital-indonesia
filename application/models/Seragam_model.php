<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Seragam_model extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('data_seragam', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('data_seragam', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_seragam');
    }

    public function data_row($id)
    {
        $this->db->where('id', $id);
        $x = $this->db->get('data_seragam');
        return $x->row();
    }

    public function get_seragam_kerja()
    {
        $this->db->where('type', 'seragam_kerja');
        $x = $this->db->get('data_seragam');
        return $x->result();
    }

    public function get_kaos()
    {
        $this->db->where('type', 'kaos');
        $x = $this->db->get('data_seragam');
        return $x->result();
    }

    public function get_celana()
    {
        $this->db->where('type', 'celana');
        $x = $this->db->get('data_seragam');
        return $x->result();
    }
}

/* End of file Seragam_model.php */
