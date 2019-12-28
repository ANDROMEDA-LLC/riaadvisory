<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['intro'] = $this->Home_model->introGetBlogModel();
        $this->theme->display('frontend/home',$data);
    }

    public function blogDetay($blog)
    {
        $data['blog'] = $this->Home_model->homeblogFindModel($blog);
        if ($data['blog']) {
            $this->theme->display('frontend/blogdetay', $data);
        } else {
            $this->theme->display('frontend/404');
        }
    }

    public function hakkimizda()
    {
        $this->theme->display('frontend/hakkimizda');
    }

    public function iletisim()
    {
        $this->theme->display('frontend/iletisim');
    }

    public function iletisimForm()
    {
        if ($this->input->post('submit')) {
            $this->load->library('form_validation');
            $data = (object) $this->input->post();
            $this->form_validation->set_rules('ad_soyad', 'Ad soyad', 'required|min_length[3]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('phone', 'Telefon', 'required|integer');
            $this->form_validation->set_rules('message', 'Mesaj', 'required');
            if ($this->form_validation->run()) {
                $this->load->helper('contact');
                $result = sendEmail($data->email, $data->ad_soyad, $data->message);
                if ($result) {
                    $contact_data = array(
                        'ad_soyad' => $data->ad_soyad,
                        'email' => $data->email,
                        'phone' => $data->phone,
                        'message' => $data->message
                    );
                    $addContact = $this->Home_model->contactEkleModel($contact_data);
                    if ($addContact) {
                        error_log($addContact);
                        $this->session->set_flashdata('success', 'Talebiniz alınmıtır. En kısa sürede dönüş yapılacaktır.');
                        redirect('iletisim');
                    } else {
                        $this->session->set_flashdata('error', 'Bir sorun oluştu tekrar deneyiniz.');
                        $this->theme->display('frontend/iletisim');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Mail Gönderilemedi. Lütfen Tekrar Deneyiniz');
                    $this->theme->display('frontend/iletisim');
                }
            } else {
                $error_array = $this->form_validation->error_array();
                $this->session->set_flashdata('error', array_values($error_array)[0]);
                $this->theme->display('frontend/iletisim');
            }
        } else {
            redirect('iletisim');
        }
    }

    public function email()
    {
        $this->load->helper('contact');
        $result = sendEmail('aliosmannkeles@gmail.com', 'ali osman', 'deneme');
        echo $result;
    }
}
