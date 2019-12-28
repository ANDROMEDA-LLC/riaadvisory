<?php

class News_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function newsEkleModel($data) {
        $this->db->insert('news', $data);
        return $this->db->insert_id();
    }

    function newsVeriAlModel() {
        return $this->db->select('*')
                        ->get('news')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function newsBulModel($id) {
        return $this->db->select('baslik,icerik,resim_yol')
                        ->where('id', $id)
                        ->get('news')
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function newsGuncelleModel($id, $data) {
        return $this->db->where('ID', $id)
                        ->update('news', $data);
    }

    function newsSilModel($id) {
        return $this->db->where('ID', $id)
                        ->delete('news');
    }

}
