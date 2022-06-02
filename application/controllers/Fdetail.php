<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Fdetail extends CI_Controller {
   public function __construct()
   {
       parent::__construct();
       $this->load->model('M_koperasi');
       $this->load->model('M_map');
   }

   public function index($id)
   {
      $data = array(
         'title' => 'DETAIL PAGE',
         'page' => 'front/detail',
         
    );
      $data['data_koperasi'] = $this->M_koperasi->get_data_by_id($id);

      $this->load->view('front/head', $data, FALSE);
      $this->load->view('front/navbar');
      $this->load->view('front/detail');
      $this->load->view('front/footer');
   }
}
