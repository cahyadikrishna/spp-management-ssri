<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bulan_model extends CI_Model
{
    private $bulan = "bulan";

    public $id_bulan;
    public $nama_bulan;

    public function rules()
    {
        return [
            
            ['field' => 'nama_bulan',
            'label' => 'Nama Bulan',
            'rules' => 'required',
            'errors' => array('required' => 'Nama Bulan belum diisi!')]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->bulan)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->bulan, ["id_bulan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_bulan
         = uniqid();
        $this->nama_bulan = $post["nama_bulan"];
        $this->db->insert($this->bulan, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_bulan = $post["id"];
        $this->nama_bulan = $post["nama_bulan"];
        $this->db->update($this->bulan, $this, array('id_bulan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->bulan, array("id_bulan" => $id));
    }
}