<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $this->db->order_by("kode_gejala", "asc");
        $res = $this->db->get('gejala')->result();
        return $res;
    }
    public function getKondisi(){
        $this->db->order_by("id", "asc");
        $res = $this->db->get('kondisi')->result();
        return $res;
    }
    public function getPenyakit(){
        $this->db->order_by("kode_penyakit", "asc");
        $res = $this->db->get('penyakit')->result_array();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('gejala', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('gejala', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('kode_gejala', $param['kode_gejala'])->update('gejala', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('gejala');
        return true;
    }
}