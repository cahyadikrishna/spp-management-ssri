<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){

        $level_id = $this->session->userdata('level_id');
        if($level_id['level_id'] == 1) {
          redirect('admin/beranda');
            } else {

        if($level_id['level_id'] == 2) {
          redirect('petugas/beranda');
            } else {

        if($level_id['level_id'] == 3) {
          redirect('beranda');
            }
        }

        $this->form_validation->set_rules('username', 'Nama Pengguna', 'required', 
            ['required' => 'Nama Pengguna belum terisi!']);
        $this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required', 
            ['required' => 'Kata Sandi belum terisi!']);

        if ($this->form_validation->run() == false) {

           $this->load->view('auth/login');
         } else {

            $this->_login();
         }
    }
}

    private function _login(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $pengguna = $this->db->get_where('pengguna', ['username' => $username])->row_array();

              // jika usernya ada
        if($pengguna){
       
                //cek passwordnya
                if(password_verify($password, $pengguna['password'])) {

                    $data = [
                                'username' => $pengguna['username'],
                                'level_id' => $pengguna['level_id']
                    ];
                    $this->session->set_userdata($data);

                    if($pengguna['level_id'] == 1) {
                
                 redirect('admin/beranda');

                    } else {
                       
                    if($pengguna['level_id'] == 2) {
                
                 redirect('petugas/beranda');

                    } else {

                        redirect('beranda');
                    }
                }
            
                } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password salah!</div>');
            redirect('auth');  
                }

            } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun belum terdaftar!</div>');
            redirect('auth');
        }
    }


    public function logout(){

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level_id');

        $this->session->set_flashdata('message', '<div align="center" class="alert alert-success" role="alert">Berhasil keluar</div>');
        redirect('auth');
    }

    public function erorr(){

        $this->load->view('blocked');
    }

}

