<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('login');
        }
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['personapp'] = $this->Admin_model->personappGetModel();
        $data['contact'] = $this->Admin_model->contactGetModel();
        $data['blog'] = $this->Admin_model->blogGetModel();
        $data['news'] = $this->Admin_model->newsGetModel();
        $this->theme->display('backend/home',$data);
    }

    public function profile()
    {
        $id = $this->session->userdata('admin')->ID;
        $data['profile'] = $this->Admin_model->profileGetModel($id);
        $this->theme->display('backend/profile', $data);
    }

    public function profileduzenle()
    {
        if ($this->input->post('profile_update')) {
            $id = $this->session->userdata('admin')->ID;
            $this->load->library('form_validation');
            $data = $this->input->post();
            $this->form_validation->set_rules('name', 'name', 'required|min_length[5]');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_data($data);
            if ($this->form_validation->run()) {
                $profile_data = array(
                    'ad_soyad' => $data['name'],
                    'e-mail' => $data['email']
                );
                $updateprofile = $this->Admin_model->profileGuncelleModel($id, $profile_data);
                if ($updateprofile) {
                    $email='e-mail';
                    $profile = new stdClass;
                    $profile->ID = $id;
                    $profile->ad_soyad = $data['name'];
                    $profile->$email= $data['email'];
                    $this->session->unset_userdata('admin');
                    $this->session->set_userdata('admin', $profile);
                    $sonuc['result'] = 'Profile updated successfully.';
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
}
