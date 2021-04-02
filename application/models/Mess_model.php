<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mess_model extends CI_Model
{
    public function data_mess()
    {
        $x = $this->db->get('data_mess_lahan');
        return $x->result();
    }

    public function data_mess_row($id)
    {
        $this->db->where('id', $id);
        $x = $this->db->get('data_mess_lahan');
        return $x->row();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_mess_lahan');
    }

    public function insert($data)
    {
        $this->db->insert('data_mess_lahan', $data);
    }

    public function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('data_mess_lahan', $data);
    }
    public function get_row($id)
    {
        $this->db->where('id', $id);
        $x =  $this->db->get('data_mess_lahan');
        return $x->row();
    }
}

/* End of file Mess_model.php */
