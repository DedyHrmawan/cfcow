<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $this->db->order_by("username", "asc");
        $res = $this->db->get('admin')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('admin', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('admin', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_admin', $param['id_admin'])->update('admin', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('admin');
        return true;
    }
}