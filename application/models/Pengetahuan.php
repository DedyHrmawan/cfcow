<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pengetahuan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $sql = "SELECT bp.*,  p.nama_penyakit, g.nama_gejala
        FROM basis_pengetahuan bp, penyakit p, gejala g
        WHERE bp.kode_penyakit = p.kode_penyakit AND
        bp.kode_gejala = g.kode_gejala
        ORDER BY bp.kode_pengetahuan ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('basis_pengetahuan', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('basis_pengetahuan', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('kode_pengetahuan', $param['kode_pengetahuan'])->update('basis_pengetahuan', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('basis_pengetahuan');
        return true;
    }
    public function getPenyakit(){
        $this->db->order_by("kode_penyakit", "asc");
        $res = $this->db->get('penyakit')->result();
        return $res;
    }
    public function getGejala(){
        $this->db->order_by("kode_gejala", "asc");
        $res = $this->db->get('gejala')->result();
        return $res;
    }
}