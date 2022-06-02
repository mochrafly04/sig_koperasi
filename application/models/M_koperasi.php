<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class M_koperasi extends CI_Model {
    public function get_data($table) 
    {
        return $this->db->get($table);
    }

    public function insert_data()
    {
        $data = array(
            'badan_hukum' => $this->input->post('badan_hukum'),
            'nama_koperasi' => $this->input->post('nama_koperasi'),
            'jenis_koperasi' => $this->input->post('jenis_koperasi'),
            'status_koperasi' => $this->input->post('status_koperasi'),
            'desa' => $this->input->post('desa'),
            'kecamatan' => $this->input->post('kecamatan'),
            'latitude' => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude'),
            'gambar' => $this->input->post('gambar'),
            'keterangan' => $this->input->post('keterangan'),
        );
        $this->db->insert('data_koperasi', $data);
    }

   public function get_data_by_id($id)
    {
        return $this->db->get_where('data_koperasi', ['id_koperasi' => $id])->row_array();
    }

    public function update_data()
    {
        $data = array(
            'badan_hukum' => $this->input->post('badan_hukum', true),
            'nama_koperasi' => $this->input->post('nama_koperasi', true),
            'jenis_koperasi' => $this->input->post('jenis_koperasi', true),
            'status_koperasi' => $this->input->post('status_koperasi', true),
            'desa' => $this->input->post('desa', true),
            'kecamatan' => $this->input->post('kecamatan', true),
            'latitude' => $this->input->post('latitude', true),
            'longitude' => $this->input->post('longitude', true),
            'gambar' => $this->input->post('gambar', true),
            'keterangan' => $this->input->post('keterangan', true),
        );
        $this->db->where('id_koperasi', $this->input->post('id_koperasi'));
        $this->db->update('data_koperasi', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('id_koperasi', $id);
        $this->db->delete('data_koperasi');
    }

}