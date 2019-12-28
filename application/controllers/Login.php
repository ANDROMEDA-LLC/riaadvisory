<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        if ($this->session->userdata('login') == false) {
            if ($this->input->post('login')) {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('email', 'e-mail', 'required');
                $this->form_validation->set_rules('sifre', 'password', 'required');
                if ($this->form_validation->run()) {
                    $email = $this->input->post('email');
                    $sifre = $this->input->post('sifre');
                    $login = $this->Login_model->login($email, md5($sifre));
                    if ($login) {
                        $this->session->set_userdata('login', true);
                        $this->session->set_userdata('admin', $login);
                        redirect('/admin');
                    } else {
                        $data['hata'] = 'E-mail or password wrong !';
                        $this->theme->display('login/login', $data);
                    }
                } else {
                    $error_array = $this->form_validation->error_array();
                    $data['hata'] = array_values($error_array)[0];
                    $this->theme->display('login/login', $data);
                }
            } else {
                $this->theme->display('login/login');
            }
        } else {
            redirect('admin');
        }
    }

    public function cikis_yap()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
