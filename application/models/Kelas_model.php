<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    private $kelas = "kelas";

    public $id_kelas;
    public $nama_kelas;
    public $kompetensi_keahlian;

    public function rules()
    {
        return [
            
            ['field' => 'nama_kelas',
            'label' => 'Nama Kelas',
            'rules' => 'required',
            'errors' => array('required' => 'Nama Kelas belum diisi!')],

            ['field' => 'kompetensi_keahlian',
            'label' => 'Kompetensi Keahlian',
            'rules' => 'required',
            'errors' => array('required' => 'Kompetensi Keahlian belum diisi!')
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->kelas)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->kelas, ["id_kelas" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kelas
         = uniqid();
        $this->nama_kelas = $post["nama_kelas"];
        $this->kompetensi_keahlian = $post["kompetensi_keahlian"];
        $this->db->insert($this->kelas, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kelas = $post["id"];
        $this->nama_kelas = $post["nama_kelas"];
        $this->kompetensi_keahlian = $post["kompetensi_keahlian"];
        $this->db->update($this->kelas, $this, array('id_kelas' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->kelas, array("id_kelas" => $id));
    }
}