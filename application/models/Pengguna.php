<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $res = $this->db->get('user')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('user', $filter)->result();
        return $res;
    }
    public function update($param){
        $this->db->where('id_user', $param['id_user'])->update('user', $param);
        return true;
    }
    public function insert($param){
        $this->db->insert('user', $param);
        return $this->db->insert_id();
    }
    public function delete($param){
        $this->db->where($param)->delete('user');
        return true;
    }
}