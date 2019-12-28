<?php

class Homecomponent_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function introVeriAl() {
        return $this->db->select('*')
                        ->where('ID',1)
                        ->get('intro')  
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function introGuncelleModel($id, $data) {
        return $this->db->where('ID', 1)
                        ->update('intro', $data);
    }
    
    function servicesVeriAlModel() {
        return $this->db->select('*')
                        ->get('services')  
                        ->result();
    }
    

}

