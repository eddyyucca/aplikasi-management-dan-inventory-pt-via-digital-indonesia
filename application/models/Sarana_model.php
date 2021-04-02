<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sarana_model extends CI_Model
{

    public function getdata()
    {
        $query =  $this->db->get('data_sarana');
        return $query->result();
    }

    public function getdataid($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('data_sarana');
        return $query->row();
    }

    public function dept()
    {
        $query = $this->db->get('departemen');
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('data_sarana', $data);
    }

    public function getid($id)
    {
        $this->db->where('id', $id);
        $data = $this->db->get('data_sarana');
        return $data->row();
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('data_sarana', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_sarana');
    }

    public function get()
    {
        $row = $this->db->get('data_sarana');
        return $row->result();
    }
}

/* End of file Sarana_model.php */
