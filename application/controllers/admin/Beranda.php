<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        cek_login_akses();
    }

	public function index()
	{
	 $data['datapengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('admin/beranda/list',$data);
	}
}
