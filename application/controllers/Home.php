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
        $data['blog'] = $this->Home_model->blogDataModel();
        $this->theme->display('frontend/home', $data);
    }

    public function utilities()
    {
        $data['utilities'] = $this->Home_model->utilitiesDataModel();
        $this->theme->display('frontend/utilities', $data);
    }
    public function services()
    {
        $data['services'] = $this->Home_model->servicesDataModel();
        $this->theme->display('frontend/services', $data);
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
    public function whyus()
    {
        $data['whyus'] = $this->Home_model->whyusDataModel();
        $this->theme->display('frontend/whyus', $data);
    }
    public function workRia()
    {
        $data['workwithria'] = $this->Home_model->workRiaDataModel();
        $this->theme->display('frontend/workRia', $data);
    }

    public function workriadetail($kod)
    {
        $workriadetail = $this->Home_model->workRiaDetailDataModel($kod);
        if ($workriadetail) {
            $data['workriadetail'] = $workriadetail;
            $data['kod'] = $kod;
            $this->theme->display('frontend/workriadetail', $data);
        } else {
            redirect('/workRia');
        }
    }
    public function blog()
    {
        $data['blog'] = $this->Home_model->blogDataModel();
        $this->theme->display('frontend/blog', $data);
    }
    public function aboutus()
    {
        $data['aboutus'] = $this->Home_model->aboutusDataModel();
        $this->theme->display('frontend/aboutus', $data);
    }
    public function contact()
    {
        $this->theme->display('frontend/contact');
    }
    public function ourteam()
    {
        $this->theme->display('frontend/ourteam');
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

    public function workriaform()
    {
        if ($this->input->post('submit')) {
            $post_data = (object) $this->input->post();
            $workriadetail = $this->Home_model->workRiaDetailDataModel($post_data->kod);
            if ($workriadetail) {
                $data['workriadetail'] = $workriadetail;
                $data['kod'] = $post_data->kod;
                $this->load->library('form_validation');
                $this->form_validation->set_rules('name', 'name', 'required|min_length[3]');
                $this->form_validation->set_rules('email', 'e-mail', 'required|valid_email');
                $this->form_validation->set_rules('phone', 'phone', 'required|integer');
                $this->form_validation->set_rules('position', 'position', 'required|min_length[3]');
                $this->form_validation->set_rules('message', 'message', 'required');
                if ($this->form_validation->run()) {
                    $this->load->helper('workria');
                    $image_upload = workriaFilesUpload('file');
                    if ($image_upload->result == 1) {
                        $contact_data = array(
                            'name' => $post_data->name,
                            'email' => $post_data->email,
                            'phone' => $post_data->phone,
                            'position' => $post_data->position,
                            'file_link' => $image_upload->fileName,
                            'message' => $post_data->message
                        );
                        $addContact = $this->Home_model->workriaEkleModel($contact_data);
                        if ($addContact) {
                            $this->session->set_flashdata('success', 'Your request is received. Thank you.');
                            redirect('/workriadetail/'.$post_data->kod);
                        } else {
                            $this->session->set_flashdata('error', 'There was a problem, please try again.');
                            $this->theme->display('frontend/workriadetail', $data);
                        }
                    } else {
                        $this->session->set_flashdata('error', $image_upload->hata);
                        $this->theme->display('frontend/workriadetail', $data);
                    }
                } else {
                    $error_array = $this->form_validation->error_array();
                    $this->session->set_flashdata('error', array_values($error_array)[0]);
                    $this->theme->display('frontend/workriadetail', $data);
                }
            } else {
                redirect('/workRia');
            }
        } else {
            redirect('workRia');
        }
    }

    public function email()
    {
        $this->load->helper('contact');
        $result = sendEmail('aliosmannkeles@gmail.com', 'ali osman', 'deneme');
        echo $result;
    }
}
