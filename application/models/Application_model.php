<?php

class Application_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function applicationEkleModel($data) {
        $this->db->insert('application', $data);
        return $this->db->insert_id();
    }

    function applicationVeriAlModel() {
        return $this->db->select('*')
                        ->get('application')
                        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function applicationbulModel($id) {
        return $this->db->select('baslik,icerik')
                        ->where('id', $id)
                        ->get('application')
                        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function applicationGuncelleModel($id, $data) {
        return $this->db->where('ID', $id)
                        ->update('application', $data);
    }

    function applicationSilModel($id) {
        return $this->db->where('ID', $id)
                        ->delete('application');
    }

}
