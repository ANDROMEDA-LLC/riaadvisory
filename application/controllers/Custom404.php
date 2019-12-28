<?php
class Custom404 extends CI_Controller {

  public function __construct() {

    parent::__construct();

    // load base_url
    $this->load->helper('url');
  }

  public function index(){
    $this->theme->display('frontend/404');
  }

}
?>