<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class M_password extends CI_Model {
    public function get_data($table) 
    {
        return $this->db->get($table);
    }

    public function get_data_by_id($id)
    {
        return $this->db->get_where('user', ['id_user' => $id])->row_array();
    }

    public function update_data()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'username' => $this->input->post('username', true),
            'password' => $this->input->post('password', true),
        );
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }
}