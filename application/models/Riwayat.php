<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $sql = "SELECT h.*,  p.*
        FROM hasil h, penyakit p
        WHERE h.hasil_id = p.kode_penyakit
        ORDER BY h.id_hasil ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function get($param){
        $sql = "SELECT h.*,  p.*
        FROM hasil h, penyakit p
        WHERE h.hasil_id = p.kode_penyakit AND
        id_hasil = $param";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getPenyakit(){
        $this->db->order_by("kode_penyakit", "asc");
        $res = $this->db->get('penyakit')->result_array();
        return $res;
    }
    public function getGejala(){
        $this->db->order_by("kode_gejala", "asc");
        $res = $this->db->get('gejala')->result_array();
        return $res;
    }
    public function getKondisi(){
        $this->db->order_by("id", "asc");
        $res = $this->db->get('kondisi')->result();
        return $res;
    }
    public function getChart(){
        $sql = "SELECT COUNT(h.id_hasil) as total,  p.nama_penyakit
        FROM hasil h, penyakit p
        WHERE h.hasil_id = p.kode_penyakit
        GROUP BY h.hasil_id
        ORDER BY h.id_hasil ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('hasil', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_hasil', $param['id_hasil'])->update('hasil', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('hasil');
        return true;
    }
}