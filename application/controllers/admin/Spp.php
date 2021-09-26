<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Spp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login_akses(); 
        $this->load->model("spp_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $data["spp"] = $this->spp_model->getAll();
        $data["bulan"] = $this->spp_model->getBulan();
        $data["thnmasuk"] = $this->spp_model->getThnmasuk();
        $this->load->view("admin/spp/list", $data);
    }

    public function add()
    {
        $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $spp = $this->spp_model;
        $validation = $this->form_validation;
        $validation->set_rules($spp->rules());

        if ($validation->run()) {
            $spp->save();
            $this->session->set_flashdata('flash', 'Ditambahkan');
        }

         $data["bulan"] = $this->spp_model->getBulan();
        $data["thnmasuk"] = $this->spp_model->getThnmasuk();
        $this->load->view("admin/spp/new_form",$data);
    }

    public function edit($id = null)
    {
        $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();

        if (!isset($id)) redirect('admin/spp');
       
        $spp = $this->spp_model;
        $validation = $this->form_validation;
        $validation->set_rules($spp->rules());

        if ($validation->run()) {
            $spp->update();
            $this->session->set_flashdata('flash', 'Diubah');
        }

        $data["spp"] = $spp->getById($id);
        if (!$data["spp"]) show_404();
        
        $data["bulan"] = $this->spp_model->getBulan();
        $data["thnmasuk"] = $this->spp_model->getThnmasuk();
        $this->load->view("admin/spp/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->spp_model->delete($id)) {
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect(site_url('admin/spp'));
        }
    }
}