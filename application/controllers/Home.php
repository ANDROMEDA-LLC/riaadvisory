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
    public function news()
    {
        $data['news'] = $this->Home_model->newsDataModel();
        $this->theme->display('frontend/news', $data);
    }
    public function newsdetail($kod)
    {
         $data['newsdetail'] = $this->Home_model->newsdetailDataModel($kod);
         $data['latestnews'] = $this->Home_model->latestnewsDataModel();
         $this->theme->display('frontend/newsdetail', $data);
    }
    public function blogdetail($kod)
    {
         $data['blogdetail'] = $this->Home_model->blogdetailDataModel($kod);
         $data['latestblog'] = $this->Home_model->latestblogDataModel();
         $this->theme->display('frontend/blogdetail', $data);
    }
    public function aboutus()
    {
        $data['aboutus'] = $this->Home_model->aboutusDataModel();
        $this->theme->display('frontend/aboutus', $data);
    }
    public function companyservice()
    { 
        $this->theme->display('frontend/companyservice');
    }
    public function contact()
    {
        $this->theme->display('frontend/contact');
    }
    public function FAQ()
    {
        $data['faq'] = $this->Home_model->faqDataModel();
        $this->theme->display('frontend/FAQ',$data);
    }
    public function partners()
    {
        $this->theme->display('frontend/partners');
    }
    public function ourteam()
    {
        $this->theme->display('frontend/ourteam');
    }
    public function contactForm()
    {
        if ($this->input->post('submit')) {
            $this->load->library('form_validation');
            $data = (object) $this->input->post();
            $this->form_validation->set_rules('name', 'name', 'required|min_length[3]');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('phone_number', 'phone number', 'required|integer');
            $this->form_validation->set_rules('message', 'message', 'required');
            if ($this->form_validation->run()) {
                $this->load->helper('contact');
                $result = sendEmail($data->email, $data->name, $data->message);
                if ($result) {
                    $contact_data = array(
                        'ad_soyad' => $data->name,
                        'email' => $data->email,
                        'phone' => $data->phone_number,
                        'company' => $data->company,
                        'message' => $data->message
                    );
                    $addContact = $this->Home_model->contactEkleModel($contact_data);
                    if ($addContact) {
                        error_log($addContact);
                        $this->session->set_flashdata('success', 'Your request is received. Thank you.');
                        redirect('contact');
                    } else {
                        $this->session->set_flashdata('error', 'There was a problem, please try again.');
                        $this->theme->display('frontend/contact');
                    }
                } else {
                    $this->session->set_flashdata('error', 'There was a problem, please try again.');
                    $this->theme->display('frontend/contact');
                }
            } else {
                $error_array = $this->form_validation->error_array();
                $this->session->set_flashdata('error', array_values($error_array)[0]);
                $this->theme->display('frontend/contact');
            }
        } else {
            redirect('contact');
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
                            'message' => $post_data->message,
                            'app_id'=>$workriadetail->ID
                        );
                        $addContact = $this->Home_model->workriaEkleModel($contact_data);
                        if ($addContact) {
                            $this->session->set_flashdata('success', 'Your request is received. Thank you.');
                            redirect('/workriadetail/' . $post_data->kod);
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
}
