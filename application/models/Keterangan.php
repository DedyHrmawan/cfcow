<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Keterangan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $this->db->order_by("kode_post", "asc");
        $res = $this->db->get('post')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('post', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('post', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('kode_post', $param['kode_post'])->update('post', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('post');
        return true;
    }
}