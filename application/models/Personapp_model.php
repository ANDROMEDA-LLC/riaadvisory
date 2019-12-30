<?php

class Personapp_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function personappVeriAlModel() {
        return $this->db->select('*')
                        ->get('person_app')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function personappBulModel($id) {
        return $this->db->select('*')
                        ->where('id', $id)
                        ->get('person_app')
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function personappSilModel($id) {
        return $this->db->where('ID', $id)
                        ->delete('person_app');
    }

}
