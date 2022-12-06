<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getGejala(){
        $sql = "SELECT COUNT(kode_gejala) AS TOTAL 
        FROM gejala";        
        $result = $this->db->query($sql);
        return $result->row()->TOTAL;
    }
    public function getPenyakit(){
        $sql = "SELECT COUNT(kode_penyakit) AS TOTAL 
        FROM penyakit";        
        $result = $this->db->query($sql);
        return $result->row()->TOTAL;
    }
    public function getPengetahuan(){
        $sql = "SELECT COUNT(kode_pengetahuan) AS TOTAL 
        FROM basis_pengetahuan";        
        $result = $this->db->query($sql);
        return $result->row()->TOTAL;
    }
    public function getAdmin(){
        $sql = "SELECT COUNT(id_admin) AS TOTAL 
        FROM admin";        
        $result = $this->db->query($sql);
        return $result->row()->TOTAL;
    }
}