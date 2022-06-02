<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Fmap extends CI_Controller {
   public function __construct()
   {
       parent::__construct();
       $this->load->model('M_map');
       $this->load->model('M_koperasi');

   }

   public function index()
   {
      $data = array(
         'title' => 'MAP PAGE',
         'page' => 'front/map',
         'lokasi' => $this->M_map->allData(),
    );

      $this->load->view('front/head', $data, FALSE);
      $this->load->view('front/navbar');
      $this->load->view('front/map');
      $this->load->view('front/footer');
   }

   public function detail($id)
   {
      $data['title'] = 'DETAIL PAGE';
      $data['page'] = 'front/detail';  
      $data  ['data_koperasi'] = $this->M_koperasi->get_data_by_id($id);
         
   //    $data = array(
   //       'title' => 'DETAIL PAGE',
   //       'data_koperasi' => $this->M_koperasi->get_data_by_id($id),
   //       'page' => 'front/detail',
         
   //  );
      // $data['data_koperasi'] = $this->M_koperasi->get_data_by_id($id);
   
      $this->load->view('front/head', $data, FALSE);
      $this->load->view('front/navbar');
      $this->load->view('front/detail');
      $this->load->view('front/footer');
   }
}
