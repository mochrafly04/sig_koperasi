<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pesan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pesan');
        $this->load->library('form_validation');
    }

    public function index() {
       $data = array(
            'title' => 'KOTAK MASUK',
            'isi' => 'pesan/v_pesan'
       );
       $data['pesan'] = $this->M_pesan->get_data('pesan')->result();
       $this->load->view('template/v_wrapper', $data, FALSE);
    } 

    public function tambah(){
    $data = array (
        'title' => 'ISI FORM KOPERASI',
        'isi' => 'pesan/form',
    );

    $this->form_validation->set_rules('nama_ppkl', 'Nama Ppkl', 'required');
    $this->form_validation->set_rules('nama_koperasi', 'Nama Koperasi', 'required');
    $this->form_validation->set_rules('desa', 'desa', 'required');
    $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
    $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

    if($this->form_validation->run() == FALSE){
        $this->load->view('template/v_wrapper', $data, FALSE);
    } else {
        $this->M_pesan->insert_data();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('pesan');
    }
    $this->load->view('template/v_wrapper', $data, FALSE);
    }

    public function detail($id){
        $data = array(
            'title' => 'Detail Pesan',
            'isi' => 'pesan/detailpesan',
        );
        $data['pesan'] = $this->M_pesan->get_data_by_id($id);
        $this->load->view('template/v_wrapper', $data, FALSE);
    }

    public function hapus($id) {
        $this->M_pesan->delete_data($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pesan');
    }
}