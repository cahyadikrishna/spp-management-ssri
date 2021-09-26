<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login_akses(); 
        $this->load->model("pembayaran_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $data["siswa"] = $this->pembayaran_model->getAll();
        $data["kelas"] = $this->pembayaran_model->getKelas();
        $data["thnmasuk"] = $this->pembayaran_model->getThnmasuk();
        $this->load->view("admin/pembayaran/list", $data);
    }

    public function spp($nisn){

         $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();

         if (!isset($nisn)) redirect('admin/pembayaran');

        $data['siswa'] = $this->pembayaran_model->get_siswa_by_id($nisn);
        $data['pembayaran'] = $this->pembayaran_model->get_pembayaran_by_siswa($nisn);
        $this->load->view('admin/pembayaran/pembayaran_spp', $data);
    }
}