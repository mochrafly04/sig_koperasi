<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Map extends CI_Controller {
    public function index() {
       $data = array(
            'title' => 'VIEW MAPS',
            'isi' => 'v_map'
       );
       $this->load->view('template/v_wrapper', $data, FALSE);
    }
}