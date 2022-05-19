<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Fhome extends CI_Controller {
   public function index(){
      $data = array(
         'title' => 'HOME PAGE'
    );

      $this->load->view('front/head', $data, FALSE);
      $this->load->view('front/navbar');
      $this->load->view('front/home');
      $this->load->view('front/footer');
   }
}