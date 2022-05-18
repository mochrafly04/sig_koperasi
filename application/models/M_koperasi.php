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
            'la' => $this->input->post('la'),
            'lt' => $this->input->post('lt'),
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
            "badan_hukum" => $this->input->post('badan_hukum', true),
            "nama_koperasi" => $this->input->post('nama_koperasi', true),
            "jenis_koperasi" => $this->input->post('jenis_koperasi', true),
            "status_koperasi" => $this->input->post('status_koperasi', true),
            "desa" => $this->input->post('desa', true),
            "kecamatan" => $this->input->post('kecamatan', true),
            "la" => $this->input->post('la', true),
            "lt" => $this->input->post('lt', true),
            "keterangan" => $this->input->post('keterangan', true),
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