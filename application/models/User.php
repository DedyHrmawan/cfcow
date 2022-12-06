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
}