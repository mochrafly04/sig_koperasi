<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Password extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_password');
        $this->load->library('form_validation');

        
    }

    public function index() {
       $data = array(
            'title' => 'KELOLA AKUN',
            'isi' => 'password/kelola_password',
       );
       
       $data['user'] = $this->M_password->get_data('user')->result();
       $this->load->view('template/v_wrapper', $data, FALSE);
    }

    public function ubah($id) {
        $data = array(
            'title' => 'UBAH PASSWORD',
            'isi' => 'password/ubah_pass',
        );

        $data['user'] = $this->M_password->get_data_by_id($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('template/v_wrapper', $data, FALSE);
        } else {
            $this->M_password->update_data();
                    $this->session->set_flashdata('flash', 'Diubah');
                redirect('password');
        }
        $this->load->view('template/v_wrapper', $data, FALSE);
    }
}