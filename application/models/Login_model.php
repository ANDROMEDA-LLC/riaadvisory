<?php 

class Login_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    function login($email,$sifre) {
        return $this->db
                ->select('ID,ad_soyad,e-mail')
                ->from('users')
                ->where('e-mail',$email)
                ->where('password',$sifre)
                ->get()
                ->row();
    }
    
}