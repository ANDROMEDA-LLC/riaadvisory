<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Utilities extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('login');
        }
        $this->load->model('Utilities_model');
    }

    public function index()
    {
        $data['blogs'] = $this->Utilities_model->utilitiesVeriAlModel();
        $this->theme->display('backend/utilities', $data);
    }

    public function utilitiesEkle()
    {
        if ($this->input->post('form_post')) {
            $this->load->helper('utilities');
            $this->load->library('form_validation');
            $data = $this->input->post();
            $data['slug'] = safeUrl($data['baslik']);
            $this->form_validation->set_data($data);
            $this->form_validation->set_rules('baslik', 'title', 'required|min_length[5]');
            $this->form_validation->set_rules('icerik', 'content', 'required|min_length[5]');
            $this->form_validation->set_rules('slug', 'title', 'required|is_unique[utilities.slug]');
            if ($this->form_validation->run()) {
                $image_upload = utilitiesImageUpload('image');
                if ($image_upload->result == 1) {
                    $blog_data = array(
                        'baslik' => $data['baslik'],
                        'icerik' => htmlspecialchars($data['icerik']),
                        'slug' => $data['slug'],
                        'resim_yol' => $image_upload->fileName,
                    );
                    $addBlog = $this->Utilities_model->utilitiesEkleModel($blog_data);
                    if ($addBlog) {
                        $sonuc['result'] = 'Utilities added successfully.';
                    } else {
                        $sonuc['hata'] = 'There was a problem, please try again.';
                    }
                } else {
                    $sonuc['hata'] = $image_upload->hata;
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

    public function utilitiesDuzenle()
    {
        if ($this->input->post('form_post')) {
            $this->load->helper('utilities');
            $this->load->library('form_validation');
            $data = $this->input->post();
            $baslik = safeUrl($data['baslik']);
            $eski_baslik = safeUrl($data['eskiBaslik']);
            $this->form_validation->set_rules('baslik', 'title', 'required|min_length[5]');
            $this->form_validation->set_rules('icerik', 'content', 'required|min_length[5]');
            if ($baslik != $eski_baslik) {
                $data['slug'] = $baslik;
                $this->form_validation->set_rules('slug', 'title', 'required|is_unique[utilities.slug]');
            }
            $this->form_validation->set_data($data);
            if ($this->form_validation->run()) {
                $blog_data = array(
                    'baslik' => $data['baslik'],
                    'icerik' => htmlspecialchars($data['icerik'])
                );
                if ($baslik != $eski_baslik) {
                    $blog_data['slug'] = $data['slug'];
                }
                if (!empty($_FILES['image']['name'])) {
                    $image_upload = utilitiesImageUpload('image');
                    if ($image_upload->result == 1) {
                        $blog_data['resim_yol'] = $image_upload->fileName;
                        $updateBlog = $this->Utilities_model->utilitiesGuncelleModel($data['duzenlemeID'], $blog_data);
                        if ($updateBlog) {
                            $sonuc['result'] = 'Utilities updated successfully.';
                        } else {
                            $sonuc['hata'] = 'There was a problem, please try again.';
                        }
                    } else {
                        $sonuc['hata'] = $image_upload->hata;
                    }
                } else {
                    $updateBlog = $this->Utilities_model->utilitiesGuncelleModel($data['duzenlemeID'], $blog_data);
                    if ($updateBlog) {
                        $sonuc['result'] = 'Utilities updated successfully.';
                    } else {
                        $sonuc['hata'] = 'There was a problem, please try again.';
                    }
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

    public function utilitiesBul($id)
    {
        $findBlog = $this->Utilities_model->utilitiesbulModel($id);
        $findBlog->icerik = htmlspecialchars_decode($findBlog->icerik);
        $sonuc['result'] = $findBlog;
        echo json_encode($sonuc);
    }

    public function utilitieSil($id)
    {
        $findBlog = $this->Utilities_model->utilitiesSilModel($id);
        if ($findBlog) {
            $sonuc['result'] = 'Utilities deleted successfully!';
        } else {
            $sonuc['hata'] = 'There was a problem, please try again.';
        }
        echo json_encode($sonuc);
    }
}
