<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Spp_model extends CI_Model
{
    private $spp = "spp";

    public $id_spp;
    public $tahun;
    public $nominal;
     public $id_bulan;
    public $id_thnmasuk;

    public function rules()
    {
        return [
            
            ['field' => 'tahun',
            'label' => 'Tahun',
            'rules' => 'required',
            'errors' => array('required' => 'Tahun belum diisi!')],

            ['field' => 'nominal',
            'label' => 'Nominal',
            'rules' => 'required',
            'errors' => array('required' => 'Nominal belum diisi!')],

            ['field' => 'id_thnmasuk',
            'label' => 'Tahun Masuk Siswa',
            'rules' => 'required',
            'errors' => array('required' => 'Tahun Masuk Siswa belum diisi!')]
        ];
    }

    public function getAll()
    {
       return $this->db->select('*')
        ->from('thnmasuk')
        ->join('spp','spp.id_thnmasuk = thnmasuk.id_thnmasuk')
        ->join('bulan','bulan.id_bulan = spp.id_bulan')
        ->order_by('spp.tahun', 'ASC')
        ->get()
        ->result(); 
    }

    public function getBulan()
    {
        return $this->db->get('bulan')->result();
    }

    public function getThnmasuk()
    {
        return $this->db->get('thnmasuk')->result();
    }
    
    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('spp','spp.id_thnmasuk = thnmasuk.id_thnmasuk');
        $this->db->join('bulan','bulan.id_bulan = spp.id_bulan');
        $this->db->where('id_spp',$id);
        $query =  $this->db->get();

        return $query->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_spp = uniqid();
        $this->tahun = $post["tahun"];
        $this->nominal = $post["nominal"];
        $this->id_bulan = $post["id_bulan"];
        $this->id_thnmasuk = $post["id_thnmasuk"];
        $this->db->insert($this->spp, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_spp = $post["id"];
        $this->tahun = $post["tahun"];
        $this->nominal = $post["nominal"];
        $this->id_bulan = $post["id_bulan"];
        $this->id_thnmasuk = $post["id_thnmasuk"];
        $this->db->update($this->spp, $this, array('id_spp' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->spp, array("id_spp" => $id));
    }
}