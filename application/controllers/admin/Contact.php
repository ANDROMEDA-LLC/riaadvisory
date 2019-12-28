<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('login');
        }
        $this->load->model('Contact_model');
    }

    public function index()
    {
        $data['contact'] = $this->Contact_model->contactVeriAlModel();
        $this->theme->display('backend/contact', $data);
    }

    public function contactBul($id)
    {
        $findBlog = $this->Contact_model->contactbulModel($id);
        $sonuc['result'] = $findBlog;
        echo json_encode($sonuc);
    }

    public function contactSil($id)
    {
        $findBlog = $this->Contact_model->contactSilModel($id);
        if ($findBlog) {
            $sonuc['result'] = 'Contact deleted successfully!';
        } else {
            $sonuc['hata'] = 'There was a problem, please try again.';
        }
        echo json_encode($sonuc);
    }
}
