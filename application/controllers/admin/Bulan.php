<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bulan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login_akses(); 
        $this->load->model("bulan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
         $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data["bulan"] = $this->bulan_model->getAll();
        $this->load->view("admin/bulan/list", $data);
    }

    public function add()
    {
        $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $bulan = $this->bulan_model;
        $validation = $this->form_validation;
        $validation->set_rules($bulan->rules());

        if ($validation->run()) {
            $bulan->save();
            $this->session->set_flashdata('flash', 'Ditambahkan');
        }

        $this->load->view("admin/bulan/new_form",$data);
    }

    public function edit($id = null)
    {
        $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        
        if (!isset($id)) redirect('admin/bulan');
       
        $bulan = $this->bulan_model;
        $validation = $this->form_validation;
        $validation->set_rules($bulan->rules());

        if ($validation->run()) {
            $bulan->update();
            $this->session->set_flashdata('flash', 'Diubah');
        }

        $data["bulan"] = $bulan->getById($id);
        if (!$data["bulan"]) show_404();
        
        $this->load->view("admin/bulan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->bulan_model->delete($id)) {
            redirect(site_url('admin/bulan'));
        }
    }
}