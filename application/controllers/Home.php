<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index() {
       $data = array(
            'title' => 'SIG KOPERASI',
            'isi' => 'v_home'
       );

       if ($this->session->userdata('level') == null) {
           redirect('Login', 'refresh');
       }
       $this->load->view('template/v_wrapper', $data, FALSE);
    }
}