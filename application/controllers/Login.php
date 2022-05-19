<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function index() {
       $data = array(
            'title' => 'LOGIN',
            'isi' => 'login'
       );
       $this->load->view('login.php');
       $this->load->view('template/v_head', $data, FALSE);
       $this->load->view('template/v_footer', $data, FALSE);
    }
}