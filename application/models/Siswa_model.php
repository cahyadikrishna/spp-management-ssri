<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    private $siswa = "siswa";

    public $nisn;
    public $nis;
    public $nama;
    public $id_kelas;
    public $alamat;
    public $no_telp;
     public $id_thnmasuk;

    public function rules()
    {
        return [
            
            ['field' => 'nisn',
            'label' => 'NISN',
            'rules' => 'required',
            'errors' => array('required' => 'NISN belum diisi!')],

            ['field' => 'nis',
            'label' => 'NIS',
            'rules' => 'required',
            'errors' => array('required' => 'NIS belum diisi!')],

             ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required',
            'errors' => array('required' => 'Nama belum diisi!')],

            ['field' => 'no_telp',
            'label' => 'No Telp',
            'rules' => 'required',
            'errors' => array('required' => 'No Telp belum diisi!')],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required',
            'errors' => array('required' => 'Alamat belum diisi!')],

            ['field' => 'id_kelas',
            'label' => 'Kelas',
            'rules' => 'required',
            'errors' => array('required' => 'Kelas belum dipilih!')],

            ['field' => 'id_thnmasuk',
            'label' => 'Tahun Masuk',
            'rules' => 'required',
            'errors' => array('required' => 'Tahun Masuk belum dipilih!')]
        ];
    }

    public function getAll()
    {
       return $this->db->select('*')
        ->from('siswa')
        ->join('kelas','kelas.id_kelas = siswa.id_kelas')
        ->join('thnmasuk','thnmasuk.id_thnmasuk = siswa.id_thnmasuk')
        ->get()
        ->result(); 
    }

      public function getKelas()
    {
        return $this->db->get('kelas')->result();
    }

    public function getThnmasuk()
    {
        return $this->db->get('thnmasuk')->result();
    }
    
    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas','kelas.id_kelas = siswa.id_kelas');
        $this->db->join('thnmasuk','thnmasuk.id_thnmasuk = siswa.id_thnmasuk');
        $this->db->where('nisn',$id);
        $query =  $this->db->get();

        return $query->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nisn =  $post["nisn"];
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->id_kelas = $post["id_kelas"];
        $this->alamat = $post["alamat"];
        $this->no_telp = $post["no_telp"];
        $this->id_thnmasuk = $post["id_thnmasuk"];
        $this->db->insert($this->siswa, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nisn =  $post["nisn"];
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->id_kelas = $post["id_kelas"];
        $this->alamat = $post["alamat"];
        $this->no_telp = $post["no_telp"];
         $this->id_thnmasuk = $post["id_thnmasuk"];
        $this->db->update($this->siswa, $this, array('nisn' => $post['nisn']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->siswa, array("nisn" => $id));
    }
}