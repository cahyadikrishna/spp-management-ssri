<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login_akses();
        $this->load->library('form_validation');
    }

    public function siswa(){

        $this->form_validation->set_rules('username', 'Nama Lengkap Siswa', 'required', 
            ['required' => 'Nama Siswa belum terisi!']);

        $this->form_validation->set_rules('password1', 'Kata Sandi', 'required|trim|min_length[4]|matches[password2]', 
            ['required' => ' Kata Sandi belum terisi!',
             'min_length' => ' Kata Sandi terlalu pendek!']);

         $this->form_validation->set_rules('password2', 'Ulang Kata Sandi', 'required|trim|matches[password1]', 
            ['required' => ' Ulang Kata Sandi belum terisi!']);

        if($this->form_validation->run() == false){

       $this->load->view('auth/register_siswa');
         } else {
            
            $data = [

                    'username'      => htmlspecialchars($this->input->post('username', true)),
                    'gambar_profil' => 'default.jpg',
                    'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'level_id'      => 3,
                    'tgl_registrasi' => time()
            ];

            $this->db->insert('pengguna', $data);
            $this->session->set_flashdata('message', '<div align="center" class="alert alert-success" role="alert"> Akun Siswa berhasil dibuat</div>');
            redirect('admin/registrasi/siswa');
         }
    }



public function petugas(){

        $this->form_validation->set_rules('username', 'Nama Lengkap Petugas', 'required', 
            ['required' => 'Nama Petugas belum terisi!']);

        $this->form_validation->set_rules('password1', 'Kata Sandi', 'required|trim|min_length[4]|matches[password2]', 
            ['required' => ' Kata Sandi belum terisi!',
             'min_length' => ' Kata Sandi terlalu pendek!']);

         $this->form_validation->set_rules('password2', 'Ulang Kata Sandi', 'required|trim|matches[password1]', 
            ['required' => ' Ulang Kata Sandi belum terisi!']);

        if($this->form_validation->run() == false){

       $this->load->view('auth/register_petugas');
         } else {
            
            $data = [

                    'username'      => htmlspecialchars($this->input->post('username', true)),
                    'gambar_profil' => 'default.jpg',
                    'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'level_id'      => 2,
                    'tgl_registrasi' => time()
            ];

            $this->db->insert('pengguna', $data);
            $this->session->set_flashdata('message', '<div align="center" class="alert alert-success" role="alert"> Akun Petugas berhasil dibuat</div>');
            redirect('admin/registrasi/petugas');
         }
    }

 public function admin(){

        $this->form_validation->set_rules('username', 'Nama Lengkap Admin', 'required', 
            ['required' => 'Nama Admin belum terisi!']);

        $this->form_validation->set_rules('password1', 'Kata Sandi', 'required|trim|min_length[4]|matches[password2]', 
            ['required' => ' Kata Sandi belum terisi!',
             'min_length' => ' Kata Sandi terlalu pendek!']);

         $this->form_validation->set_rules('password2', 'Ulang Kata Sandi', 'required|trim|matches[password1]', 
            ['required' => ' Ulang Kata Sandi belum terisi!']);

        if($this->form_validation->run() == false){

       $this->load->view('admin/registrasi/admin');
         } else {
            
            $data = [

                    'username'      => htmlspecialchars($this->input->post('username', true)),
                    'gambar_profil' => 'default.jpg',
                    'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'level_id'      => 1,
                    'tgl_registrasi' => time()
            ];

            $this->db->insert('pengguna', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun Admin berhasil dibuat</div>');
            redirect('admin/beranda');
         }
    }
  }


