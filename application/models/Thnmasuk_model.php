<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Thnmasuk_model extends CI_Model
{
    private $thnmasuk = "thnmasuk";

    public $id_thnmasuk;
    public $tahun_masuk;

    public function rules()
    {
        return [
            
            ['field' => 'tahun_masuk',
            'label' => 'Tahun Masuk',
            'rules' => 'required',
            'errors' => array('required' => 'Tahun Masuk belum diisi!')]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->thnmasuk)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->thnmasuk, ["id_thnmasuk" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_thnmasuk = uniqid();
        $this->tahun_masuk = $post["tahun_masuk"];
        $this->db->insert($this->thnmasuk, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_thnmasuk = $post["id"];
        $this->tahun_masuk = $post["tahun_masuk"];
        $this->db->update($this->thnmasuk, $this, array('id_thnmasuk' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->thnmasuk, array("id_thnmasuk" => $id));
    }
}