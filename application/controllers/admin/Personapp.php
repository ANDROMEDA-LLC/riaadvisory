<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Personapp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('login');
        }
        $this->load->model('Personapp_model');
    }

    public function index()
    {
        $data['contact'] = $this->Personapp_model->personappVeriAlModel();
        $this->theme->display('backend/personapp', $data);
    }

    public function personappBul($id)
    {
        $findBlog = $this->Personapp_model->personappbulModel($id);
        $sonuc['result'] = $findBlog;
        echo json_encode($sonuc);
    }

    public function contactSil($id)
    {
        $findBlog = $this->Personapp_model->contactSilModel($id);
        if ($findBlog) {
            $sonuc['result'] = 'Contact deleted successfully!';
        } else {
            $sonuc['hata'] = 'There was a problem, please try again.';
        }
        echo json_encode($sonuc);
    }
}
