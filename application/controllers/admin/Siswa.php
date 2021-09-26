<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login_akses(); 
        $this->load->model("siswa_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $data["siswa"] = $this->siswa_model->getAll();
        $data["kelas"] = $this->siswa_model->getKelas();
        $data["thnmasuk"] = $this->siswa_model->getThnmasuk();
        $this->load->view("admin/siswa/list", $data);
    }

    public function add()
    {
        $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->save();
            $this->session->set_flashdata('flash', 'Ditambahkan');
        }
        $data["thnmasuk"] = $this->siswa_model->getThnmasuk();
         $data["kelas"] = $this->siswa_model->getKelas();
        $this->load->view("admin/siswa/edit_form",$data);
        
    }

    public function edit($id = null)
    {

        $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();

        if (!isset($id)) redirect('admin/siswa');
       
        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["siswa"] = $siswa->getById($id);
        if (!$data["siswa"]) show_404();
        
         $data["thnmasuk"] = $this->siswa_model->getThnmasuk();
         $data["kelas"] = $this->siswa_model->getKelas();
        $this->load->view("admin/siswa/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->siswa_model->delete($id)) {
            redirect(site_url('admin/siswa'));
        }
    }
}