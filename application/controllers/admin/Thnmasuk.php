<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Thnmasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login_akses(); 
        $this->load->model("thnmasuk_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
         $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data["thnmasuk"] = $this->thnmasuk_model->getAll();
        $this->load->view("admin/thnmasuk/list", $data);
    }

    public function add()
    {
        $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $thnmasuk = $this->thnmasuk_model;
        $validation = $this->form_validation;
        $validation->set_rules($thnmasuk->rules());

        if ($validation->run()) {
            $thnmasuk->save();
            $this->session->set_flashdata('flash', 'Ditambahkan');
        }

        $this->load->view("admin/thnmasuk/new_form",$data);
    }

    public function edit($id = null)
    {
        $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        
        if (!isset($id)) redirect('admin/thnmasuk');
       
        $thnmasuk = $this->thnmasuk_model;
        $validation = $this->form_validation;
        $validation->set_rules($thnmasuk->rules());

        if ($validation->run()) {
            $thnmasuk->update();
            $this->session->set_flashdata('flash', 'Diubah');
        }

        $data["thnmasuk"] = $thnmasuk->getById($id);
        if (!$data["thnmasuk"]) show_404();
        
        $this->load->view("admin/thnmasuk/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->thnmasuk_model->delete($id)) {
            redirect(site_url('admin/thnmasuk'));
        }
    }
}