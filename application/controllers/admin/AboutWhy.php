<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Aboutwhy extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('login');
        }
        $this->load->model('Aboutwhy_model');
    }

    public function index()
    {
        redirect('admin/aboutwhy/aboutus');
    }

    public function aboutus()
    {
        $data['intro'] = $this->Aboutwhy_model->aboutusVeriAl();
        $this->theme->display('backend/aboutus', $data);
    }
    public function aboutusDuzenle()
    {
        if ($this->input->post('about_update')) {
            $this->form_validation->set_rules('content', 'content', 'required|min_length[5]');
            if ($this->form_validation->run()) {
                $data = $this->input->post();
                $intro_data = array(
                    'content' => $data['content']
                );
                $updateBlog = $this->Aboutwhy_model->aboutusGuncelleModel(1, $intro_data);
                if ($updateBlog) {
                    $sonuc['result'] = 'About Us updated successfully.';
                } else {
                    $sonuc['hata'] = 'There was a problem, please try again.';
                }
            } else {
                $error_array = $this->form_validation->error_array();
                $sonuc['hata'] = array_values($error_array)[0];
            }
        } else {
            $sonuc['hata'] = 'Bir sorun oluştu tekrar deneyiniz.';
        }
        echo json_encode($sonuc);
    }

    public function whysus()
    {
        $data['whysus'] = $this->Aboutwhy_model->whysusVeriAl();
        $this->theme->display('backend/whysus', $data);
    }
    public function whysduzenle()
    {
        if ($this->input->post('whys_update')) {
            $this->form_validation->set_rules('content', 'content', 'required|min_length[5]');
            if ($this->form_validation->run()) {
                $data = $this->input->post();
                $intro_data = array(
                    'content' => $data['content']
                );
                $updateBlog = $this->Aboutwhy_model->whysusGuncelleModel(1, $intro_data);
                if ($updateBlog) {
                    $sonuc['result'] = 'Why Us updated successfully.';
                } else {
                    $sonuc['hata'] = 'There was a problem, please try again.';
                }
            } else {
                $error_array = $this->form_validation->error_array();
                $sonuc['hata'] = array_values($error_array)[0];
            }
        } else {
            $sonuc['hata'] = 'Bir sorun oluştu tekrar deneyiniz.';
        }
        echo json_encode($sonuc);
    }
}
