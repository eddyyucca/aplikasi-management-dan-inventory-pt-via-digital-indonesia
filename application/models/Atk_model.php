<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Atk_model extends CI_Model
{

    public function getDataBarang()
    {
        $this->db->where('type', "1");
        $query = $this->db->get('data_barang');
        return $query->result();
    }
    public function getDataBarangdep($cari_data)
    {
        $this->db->select('*');
        $this->db->from('data_barang');
        $this->db->join('data_order_dep', 'data_order_dep.id_barang = data_barang.id');
        $this->db->join('order_status', 'order_status.id_ker = data_order_dep.id_keranjang');
        $this->db->where('status', '1');
        $this->db->where('id_dep', $cari_data);

        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBarangmasuk()
    {
        $this->db->select('*');
        $this->db->from('data_barang');
        $this->db->join('barang_masuk', 'barang_masuk.id_barang = data_barang.id');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBarangrusak()
    {
        $this->db->select('*');
        $this->db->from('data_barang');
        $this->db->join('barang_rusak', 'barang_rusak.id_barang = data_barang.id');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBarang2()
    {
        $this->db->where('type', "2");
        $query = $this->db->get('data_barang');
        return $query->result();
    }

    public function getDataBarangById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('data_barang');
        return $query->row();
    }

    public function InsertOrder($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('Table', $data);
    }

    //ambil data mahasiswa dari database
    function getDataBarangPage($limit, $start)
    {
        $query = $this->db->get('data_barang', $limit, $start);
        return $query;
    }

    public function insertbarang($data)
    {
        $this->db->insert('data_barang', $data);
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('data_barang', $data);
    }

    public function excel()
    {
        $update = $this->db->get('data_barang');
        return $update->result();
    }
}

/* End of file Atk_model.php */
