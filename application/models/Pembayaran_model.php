<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{

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
    
    public function get_siswa_by_id($nisn)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas','kelas.id_kelas = siswa.id_kelas');
        $this->db->join('thnmasuk','thnmasuk.id_thnmasuk = siswa.id_thnmasuk');
        $this->db->where('nisn',$nisn);
        $query =  $this->db->get();

        return $query->row();
    }

    public function get_pembayaran_by_siswa($nisn){

        $hasil = $this->db->query('SELECT nama, nama_bulan, tahun, nama_kelas, kompetensi_keahlian, nominal, tgl_bayar, status FROM siswa JOIN spp ON siswa.id_thnmasuk=spp.id_thnmasuk JOIN kelas ON kelas.id_kelas=siswa.id_kelas JOIN bulan ON bulan.id_bulan=spp.id_bulan LEFT JOIN pembayaran ON pembayaran.id_spp=spp.id_spp AND pembayaran.nisn=siswa.nisn WHERE='$nisn'');

          if($hasil->num_rows() > 0){

            return $hasil->result();
        } else{

            return FALSE;
        }

    }
}