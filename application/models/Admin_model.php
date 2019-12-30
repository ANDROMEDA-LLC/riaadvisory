<?php

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function profileGetModel($id) {
        return $this->db->select('ID,ad_soyad,e-mail as email')
                        ->where('id', $id)
                        ->get('users')
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function profileGuncelleModel($id, $data) {
        return $this->db->where('ID', $id)
                        ->update('users', $data);
    }

    function personappGetModel() {
        return $this->db->select('*')
                        ->limit(5)
                        ->get('person_app')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }
    function contactGetModel() {
        return $this->db->select('*')
                        ->limit(5)
                        ->get('contact')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }
    function blogGetModel() {
        return $this->db->select('*')
                        ->limit(5)
                        ->get('blog')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }
    function newsGetModel() {
        return $this->db->select('*')
                        ->limit(5)
                        ->get('news')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }
    



}
