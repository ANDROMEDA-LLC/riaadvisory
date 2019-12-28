<?php

class Aboutwhy_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function aboutusVeriAl() {
        return $this->db->select('*')
                        ->where('ID',1)
                        ->get('aboutus') 
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function aboutusGuncelleModel($id, $data) {
        return $this->db->where('ID', 1)
                        ->update('aboutus', $data);
    }

    function whysusVeriAl() {
        return $this->db->select('*')
                        ->where('ID',1)
                        ->get('whysus') 
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }
    function whysusGuncelleModel($id, $data) {
        return $this->db->where('ID', 1)
                        ->update('whysus', $data);
    }
}

