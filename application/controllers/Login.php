<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('M_login');
    $this->load->library('session');
}

    public function index() {
       $data = array(
            'title' => 'LOGIN',
            'isi' => 'login'
       );
       $this->load->view('login.php', $data);
       $this->load->view('template/v_head', $data, FALSE);
       $this->load->view('template/v_footer', $data, FALSE);
    }

    function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cekuserdaftar = $this->M_login->cekuserdaftar($username);
        if ($cekuserdaftar) {

            $ceklogin = $this->M_login->ceklogin($username, $password);
            if ($ceklogin) {
                $this->session->set_userdata('username', $ceklogin->username);
                $this->session->set_userdata('level', $ceklogin->level);
                $this->session->set_userdata('akun', $ceklogin->akun);

                if ($this->session->userdata('level') == "1") {
                    redirect('Home', 'refresh');
                } elseif ($this->session->userdata('level') == "2") {
                    redirect('Koperasi', 'refresh');
                } elseif ($this->session->userdata('level') == "3") {
                    redirect('Penting', 'refresh');
                }
                // elseif ($this->session->userdata('username', 'password') != "$row"); {
                //     echo "<script>alert('salah');</script>";
                //     redirect('Login', 'refresh');
                // }
                else {
                }
            } else {
            }
        } else {
        }
        echo "<script>alert('salah');</script>";
        redirect('login', 'refresh');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}