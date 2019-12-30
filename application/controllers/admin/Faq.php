<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('login');
        }
        $this->load->model('Faq_model');
    }

    public function index()
    {
        $data['blogs'] = $this->Faq_model->faqVeriAlModel();
        $this->theme->display('backend/faq', $data);
    }

    public function FaqEkle()
    {
        if ($this->input->post('form_post')) {
            $this->load->library('form_validation');
            $data = $this->input->post();
            $this->form_validation->set_data($data);
            $this->form_validation->set_rules('baslik', 'title', 'required|min_length[5]');
            $this->form_validation->set_rules('icerik', 'content', 'required|min_length[5]');
            if ($this->form_validation->run()) {
                $blog_data = array(
                    'baslik' => $data['baslik'],
                    'icerik' => htmlspecialchars($data['icerik'])
                );
                $addBlog = $this->Faq_model->faqEkleModel($blog_data);
                if ($addBlog) {
                    $sonuc['result'] = 'FAQ added successfully.';
                } else {
                    $sonuc['hata'] = 'There was a problem, please try again.';
                }
            } else {
                $error_array = $this->form_validation->error_array();
                $sonuc['hata'] = array_values($error_array)[0];
            }
        } else {
            $sonuc['hata'] = 'There was a problem, please try again.';
        }
        echo json_encode($sonuc);
    }

    public function applicationDuzenle()
    {
        if ($this->input->post('form_post')) {
            $this->load->helper('blog');
            $this->load->library('form_validation');
            $data = $this->input->post();
            $baslik = safeUrl($data['baslik']);
            $eski_baslik = safeUrl($data['eskiBaslik']);
            $this->form_validation->set_rules('baslik', 'title', 'required|min_length[5]');
            $this->form_validation->set_rules('icerik', 'content', 'required|min_length[5]');
            $this->form_validation->set_data($data);
            if ($this->form_validation->run()) {
                $blog_data = array(
                    'baslik' => $data['baslik'],
                    'icerik' => htmlspecialchars($data['icerik'])
                );
                if ($baslik != $eski_baslik) {
                    $blog_data['slug'] = $baslik.'-'.uniqid();
                }
                $updateBlog = $this->Faq_model->applicationGuncelleModel($data['duzenlemeID'], $blog_data);
                if ($updateBlog) {
                    $sonuc['result'] = 'Application updated successfully.';
                } else {
                    $sonuc['hata'] = 'There was a problem, please try again.';
                }
            } else {
                $error_array = $this->form_validation->error_array();
                $sonuc['hata'] = array_values($error_array)[0];
            }
        } else {
            $sonuc['hata'] = 'There was a problem, please try again.';
        }
        echo json_encode($sonuc);
    }

    public function applicationBul($id)
    {
        $findBlog = $this->Faq_model->applicationbulModel($id);
        $findBlog->icerik = htmlspecialchars_decode($findBlog->icerik);
        $sonuc['result'] = $findBlog;
        echo json_encode($sonuc);
    }

    public function applicationSil($id)
    {
        $findBlog = $this->Faq_model->applicationSilModel($id);
        if ($findBlog) {
            $sonuc['result'] = 'Application deleted successfully!';
        } else {
            $sonuc['hata'] = 'There was a problem, please try again.';
        }
        echo json_encode($sonuc);
    }
}
