<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_map extends CI_Model{

    public function allData()
    {
        $this->db->select('*');
        $this->db->from('data_koperasi');
        return $this->db->get()->result();
    }

}