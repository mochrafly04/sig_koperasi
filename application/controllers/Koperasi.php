<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Koperasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_koperasi');
        $this->load->library('form_validation');
    }

    public function index() {
       $data = array(
            'title' => 'KELOLA SIG KOPERASI',
            'isi' => 'koperasi/v_kelola_koperasi',
       );
       $data['data_koperasi'] = $this->M_koperasi->get_data('data_koperasi')->result();
       $this->load->view('template/v_wrapper', $data, FALSE);
    }

    public function tambah() {
        $data = array(
            'title' => 'TAMBAH DATA SIG KOPERASI',
            'isi' => 'koperasi/tambah',
        );

        $this->form_validation->set_rules('badan_hukum', 'Badan Hukum', 'required');
        $this->form_validation->set_rules('nama_koperasi', 'Nama Koperasi', 'required');
        $this->form_validation->set_rules('desa', 'desa', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('la', 'la', 'required');
        $this->form_validation->set_rules('lt', 'lt', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('template/v_wrapper', $data, FALSE);
        } else {
            $this->M_koperasi->insert_data();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('koperasi');
        }

        $this->load->view('template/v_wrapper', $data, FALSE);
    }
    
    public function ubah($id)
    {
        $data = array(
                    'title' => 'EDIT DATA SIG KOPERASI',
                    'isi' => 'koperasi/edit',
                );
        $data['data_koperasi'] = $this->M_koperasi->get_data_by_id($id);
        $data['jenis_koperasi'] = ['Kop Pensiunan Abri', 'Kop Konsumen', 'Kop Peternakan', 'Kop Pasar', 'Kop Serba Usaha', 'Kop Pesantren','KPRI', 'Kop Karyawan', 'Kop Wanita', 'Kop Gapoktan', 'Kop Peternakan', 'Kop Lainnya', 'Kop Simpan Pinjam', 'Kop Mandiri Pangan', 'Kop Perikanan', 'KUD MINA', 'Kop Produsen', 'Kop Warga', 'Kop Pasar', 'Kop Jasa', 'KOPINKRA'];
        $data['status_koperasi'] = ['Aktif', 'Perlu Pembinaan'];

        $this->form_validation->set_rules('badan_hukum', 'Badan Hukum', 'required');
        $this->form_validation->set_rules('nama_koperasi', 'Nama Koperasi', 'required');
        $this->form_validation->set_rules('desa', 'desa', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('la', 'la', 'required');
        $this->form_validation->set_rules('lt', 'lt', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('template/v_wrapper', $data, FALSE);
        } else {
            $this->M_koperasi->update_data();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('koperasi');
        }
        $this->load->view('template/v_wrapper', $data, FALSE);
    }

    public function hapus($id) {
        $this->M_koperasi->delete_data($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('koperasi');
    }
}