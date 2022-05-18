<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Fhome extends CI_Controller {

   public function index()
   {
      $this->load->view('front/head');
      $this->load->view('front/home');
      $this->load->view('front/footer');
   }
}
