<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getDataBarang()
    {
        $query = $this->db->get('data_barang');
        return $query->result();
    }
    public function cek_barang_ada()
    {

        $this->db->where('id_barang', "3");
        $query = $this->db->get('data_order_dep');

        foreach ($query->result() as $row) {
            return $row->qty_order;
        }
    }
    public function getDataBarangById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('data_barang');
        return $query->row();
    }

    public function insert($data)
    {
        $this->db->insert('data_order', $data);
    }
    public function insert_dep($data)
    {
        $this->db->insert('data_order_dep', $data);
    }
    public function update_dep($data_dep, $id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->update('data_order_dep', $data_dep);
    }

    public function insert_result($keranjang)
    {
        $this->db->insert('order_status', $keranjang);
    }
    public function cek_barang($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $x = $this->db->get('data_order_dep');
        if ($x->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    function penomoran($limit, $start)
    {
        $query = $this->db->get('data_barang', $limit, $start);
        return $query;
    }

    public function cari($cari)
    {
        $this->db->like('item', $cari);
        $x = $this->db->get('data_barang');
        return $x->result();
    }

    public function dep($x)
    {
        $this->db->where('id', $x);
        $query = $this->db->get('departemen');
        return $query->row();
    }

    public function sarana()
    {
        $query = $this->db->get('data_sarana');
        return $query->result();
    }

    public function sarana_row($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('data_sarana');
        return $query->row();
    }

    public function status($id_dep)
    {
        $this->db->where('departemen', $id_dep);
        $x = $this->db->get('order_status');
        return $x->result();
    }
    //seragam

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

    //catering
    public function get_data_catering()
    {
        $x = $this->db->get('data_catering');
        return $x->result();
    }

    public function data_row_catering($id)
    {
        $this->db->where('id', $id);

        $x = $this->db->get('data_catering');
        return $x->row();
    }
}

/* End of file User_biasa_model.php */
