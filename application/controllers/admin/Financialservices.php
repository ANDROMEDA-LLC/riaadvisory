<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Financialservices extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('login');
        }
        $this->load->model('Financialservices_model');
    }

    public function index()
    {
        $data['blogs'] = $this->Financialservices_model->financialservicesVeriAlModel();
        $this->theme->display('backend/financialservices', $data);
    }

    public function financialservicesEkle()
    {
        if ($this->input->post('form_post')) {
            $this->load->helper('financialservices');
            $this->load->library('form_validation');
            $data = $this->input->post();
            $data['slug'] = safeUrl($data['baslik']);
            $this->form_validation->set_data($data);
            $this->form_validation->set_rules('baslik', 'title', 'required|min_length[5]');
            $this->form_validation->set_rules('icerik', 'content', 'required|min_length[5]');
            $this->form_validation->set_rules('slug', 'title', 'required|is_unique[blog.slug]');
            if ($this->form_validation->run()) {
                $image_upload = financialservicesImageUpload('image');
                if ($image_upload->result == 1) {
                    $blog_data = array(
                        'baslik' => $data['baslik'],
                        'icerik' => htmlspecialchars($data['icerik']),
                        'slug' => $data['slug'],
                        'resim_yol' => $image_upload->fileName,
                    );
                    $addBlog = $this->Financialservices_model->financialservicesEkleModel($blog_data);
                    if ($addBlog) {
                        $sonuc['result'] = 'Financial services added successfully.';
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

    public function financialservicesDuzenle()
    {
        if ($this->input->post('form_post')) {
            $this->load->helper('financialservices');
            $this->load->library('form_validation');
            $data = $this->input->post();
            $baslik = safeUrl($data['baslik']);
            $eski_baslik = safeUrl($data['eskiBaslik']);
            $this->form_validation->set_rules('baslik', 'title', 'required|min_length[5]');
            $this->form_validation->set_rules('icerik', 'content', 'required|min_length[5]');
            if ($baslik != $eski_baslik) {
                $data['slug'] = $baslik;
                $this->form_validation->set_rules('slug', 'title', 'required|is_unique[blog.slug]');
            }
            $this->form_validation->set_data($data);
            if ($this->form_validation->run()) {
                $blog_data = array(
                    'baslik' => $data['baslik'],
                    'icerik' => $data['icerik']
                );
                if ($baslik != $eski_baslik) {
                    $blog_data['slug'] = $data['slug'];
                }
                if (!empty($_FILES['image']['name'])) {
                    $image_upload = financialservicesImageUpload('image');
                    if ($image_upload->result == 1) {
                        $blog_data['resim_yol'] = $image_upload->fileName;
                        $updateBlog = $this->Financialservices_model->financialservicesGuncelleModel($data['duzenlemeID'], $blog_data);
                        if ($updateBlog) {
                            $sonuc['result'] = 'Financial services updated successfully.';
                        } else {
                            $sonuc['hata'] = 'There was a problem, please try again.';
                        }
                    } else {
                        $sonuc['hata'] = $image_upload->hata;
                    }
                } else {
                    $updateBlog = $this->Financialservices_model->financialservicesGuncelleModel($data['duzenlemeID'], $blog_data);
                    if ($updateBlog) {
                        $sonuc['result'] = 'Financial services updated successfully.';
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

    public function financialservicesBul($id)
    {
        $findBlog = $this->Financialservices_model->financialservicesbulModel($id);
        $findBlog->icerik = htmlspecialchars_decode($findBlog->icerik);
        $sonuc['result'] = $findBlog;
        echo json_encode($sonuc);
    }

    public function financialservicesSil($id)
    {
        $findBlog = $this->Financialservices_model->financialservicesSilModel($id);
        if ($findBlog) {
            $sonuc['result'] = 'Utilities deleted successfully!';
        } else {
            $sonuc['hata'] = 'There was a problem, please try again.';
        }
        echo json_encode($sonuc);
    }
}
