<?php

class Faq_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function faqEkleModel($data) {
        $this->db->insert('faq', $data);
        return $this->db->insert_id();
    }

    function faqVeriAlModel() {
        return $this->db->select('*')
                        ->get('faq')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function faqbulModel($id) {
        return $this->db->select('baslik,icerik')
                        ->where('id', $id)
                        ->get('faq')
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function faqGuncelleModel($id, $data) {
        return $this->db->where('ID', $id)
                        ->update('faq', $data);
    }

    function faqSilModel($id) {
        return $this->db->where('ID', $id)
                        ->delete('faq');
    }

}
