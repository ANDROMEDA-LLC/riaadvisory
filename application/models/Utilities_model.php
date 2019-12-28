<?php

class Utilities_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function utilitiesEkleModel($data) {
        $this->db->insert('utilities', $data);
        return $this->db->insert_id();
    }

    function utilitiesVeriAlModel() {
        return $this->db->select('*')
                        ->get('utilities')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function utilitiesBulModel($id) {
        return $this->db->select('baslik,icerik,resim_yol')
                        ->where('id', $id)
                        ->get('utilities')
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function utilitiesGuncelleModel($id, $data) {
        return $this->db->where('ID', $id)
                        ->update('utilities', $data);
    }

    function utilitiesSilModel($id) {
        return $this->db->where('ID', $id)
                        ->delete('utilities');
    }

}
