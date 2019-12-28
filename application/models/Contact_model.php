<?php

class Contact_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function contactVeriAlModel() {
        return $this->db->select('*')
                        ->get('contact')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function contactBulModel($id) {
        return $this->db->select('*')
                        ->where('id', $id)
                        ->get('contact')
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function contactSilModel($id) {
        return $this->db->where('ID', $id)
                        ->delete('contact');
    }

}
