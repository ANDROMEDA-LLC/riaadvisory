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


}
