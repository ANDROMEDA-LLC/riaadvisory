<?php

class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function blogEkleModel($data) {
        $this->db->insert('blog', $data);
        return $this->db->insert_id();
    }

    function blogVeriAlModel() {
        return $this->db->select('*')
                        ->get('blog')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function blogBulModel($id) {
        return $this->db->select('baslik,icerik,resim_yol')
                        ->where('id', $id)
                        ->get('blog')
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function blogGuncelleModel($id, $data) {
        return $this->db->where('ID', $id)
                        ->update('blog', $data);
    }

    function blogSilModel($id) {
        return $this->db->where('ID', $id)
                        ->delete('blog');
    }

}
