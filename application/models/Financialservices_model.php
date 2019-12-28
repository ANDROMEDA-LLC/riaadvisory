<?php

class Financialservices_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function financialservicesEkleModel($data) {
        $this->db->insert('financialservices', $data);
        return $this->db->insert_id();
    }

    function financialservicesVeriAlModel() {
        return $this->db->select('*')
                        ->get('financialservices')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function financialservicesBulModel($id) {
        return $this->db->select('baslik,icerik,resim_yol')
                        ->where('id', $id)
                        ->get('financialservices')
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function financialservicesGuncelleModel($id, $data) {
        return $this->db->where('ID', $id)
                        ->update('financialservices', $data);
    }

    function financialservicesSilModel($id) {
        return $this->db->where('ID', $id)
                        ->delete('financialservices');
    }

}
