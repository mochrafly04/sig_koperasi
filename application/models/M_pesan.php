<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model {
    public function get_data($table) 
    {
        return $this->db->get($table);
    }

    public function insert_data()
    {
        $data = array(
            'nama_ppkl' => $this->input->post('nama_ppkl'),
            'nama_koperasi' => $this->input->post('nama_koperasi'),
            'jenis_koperasi' => $this->input->post('jenis_koperasi'),
            'status_koperasi' => $this->input->post('status_koperasi'),
            'desa' => $this->input->post('desa'),
            'kecamatan' => $this->input->post('kecamatan'),
            'keterangan' => $this->input->post('keterangan'),
        );
        $this->db->insert('pesan', $data);
    }

    public function get_data_by_id($id)
    {
        return $this->db->get_where('pesan', ['id' => $id])->row_array();
    }


    public function delete_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pesan');
    }
}