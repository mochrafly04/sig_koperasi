<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Fmap extends CI_Controller {
   public function index()
   {
      $data = array(
         'title' => 'MAP PAGE'
    );

      $this->load->view('front/head', $data, FALSE);
      $this->load->view('front/navbar');
      $this->load->view('front/map');
      $this->load->view('front/footer');
   }
}
