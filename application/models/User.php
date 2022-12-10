<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $res = $this->db->get('admin')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('admin', $filter)->result();
        return $res;
    }
    public function update($param){
        $this->db->where('username', $param['username'])->update('admin', $param);
        return true;
    }
    public function insert($param){
        $this->db->insert('pendaftaran', $param);
        return $this->db->insert_id();
    }
    
    public function getPendaftar(){
        $res = $this->db->get('pendaftaran')->result();
        return $res;
    }
    public function getDaftar($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('pendaftaran', $filter)->result();
        return $res;
    }
    public function deleteDaftar($param){
        $this->db->where($param)->delete('pendaftaran');
        return true;
    }
    public function updateDaftar($param){
        $this->db->where('id_pendaftaran', $param['id_pendaftaran'])->update('pendaftaran', $param);
        return true;
    }
}