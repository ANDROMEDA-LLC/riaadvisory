<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('login');
        }
    }

    public function index() {
        $this->theme->display('backend/home');
    }
}
