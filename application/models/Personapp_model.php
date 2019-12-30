<?php

class Personapp_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function personappVeriAlModel() {
        return $this->db->select('person_app.ID,person_app.name,person_app.email,person_app.phone,person_app.position,person_app.file_link,application.baslik,application.slug,person_app.create_date')
                        ->from('person_app')
                        ->join('application', 'application.ID = person_app.app_id')
                        ->get()
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
