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

    public function faqDuzenle()
    {
        if ($this->input->post('form_post')) {
            $this->load->library('form_validation');
            $data = $this->input->post();
            $this->form_validation->set_rules('baslik', 'title', 'required|min_length[5]');
            $this->form_validation->set_rules('icerik', 'content', 'required|min_length[5]');
            $this->form_validation->set_data($data);
            if ($this->form_validation->run()) {
                $blog_data = array(
                    'baslik' => $data['baslik'],
                    'icerik' => htmlspecialchars($data['icerik'])
                );
                $updateBlog = $this->Faq_model->faqGuncelleModel($data['duzenlemeID'], $blog_data);
                if ($updateBlog) {
                    $sonuc['result'] = 'FAQ updated successfully.';
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

    public function faqBul($id)
    {
        $findBlog = $this->Faq_model->faqbulModel($id);
        $findBlog->icerik = htmlspecialchars_decode($findBlog->icerik);
        $sonuc['result'] = $findBlog;
        echo json_encode($sonuc);
    }

    public function faqSil($id)
    {
        $findBlog = $this->Faq_model->faqSilModel($id);
        if ($findBlog) {
            $sonuc['result'] = 'FAQ deleted successfully!';
        } else {
            $sonuc['hata'] = 'There was a problem, please try again.';
        }
        echo json_encode($sonuc);
    }
}
