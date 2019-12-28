<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Homecomponent extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('login');
        }
        $this->load->model('Homecomponent_model');
    }

    public function index()
    {
        redirect('admin/homecomponent/intro');
    }

    public function intro()
    {
        $data['intro'] = $this->Homecomponent_model->introVeriAl();
        $this->theme->display('backend/intro', $data);
    }
    public function introDuzenle()
    {
        if ($this->input->post('intro_update')) {
            $this->form_validation->set_rules('content', 'content', 'required|min_length[5]');
            if ($this->form_validation->run()) {
                $data = $this->input->post();
                $intro_data = array(
                    'content' => $data['content']
                );
                $updateBlog = $this->Homecomponent_model->introGuncelleModel(1, $intro_data);
                if ($updateBlog) {
                    $sonuc['result'] = 'Intro updated successfully.';
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

    public function services()
    {
        $data['services'] = $this->Homecomponent_model->servicesVeriAlModel();
        $this->theme->display('backend/services', $data);
    }

    public function blogEkle()
    {
        if ($this->input->post('form_post')) {
            $this->load->helper('blog');
            $this->load->library('form_validation');
            $data = $this->input->post();
            $data['slug'] = safeUrl($data['baslik']);
            $this->form_validation->set_data($data);
            $this->form_validation->set_rules('baslik', 'Başlık', 'required|min_length[5]');
            $this->form_validation->set_rules('icerik', 'İçerik', 'required|min_length[5]');
            $this->form_validation->set_rules('slug', 'Başlık', 'required|is_unique[blog.slug]');
            if ($this->form_validation->run()) {
                $image_upload = blogImageUpload('image');
                if ($image_upload->result == 1) {
                    $blog_data = array(
                        'baslik' => $data['baslik'],
                        'icerik' => htmlspecialchars($data['icerik']),
                        'slug' => $data['slug'],
                        'resim_yol' => $image_upload->fileName,
                        'tiklanma_sayisi' => 0,
                    );
                    $addBlog = $this->Blog_model->blogEkleModel($blog_data);
                    if ($addBlog) {
                        $sonuc['result'] = 'Blog başarıyla eklendi .';
                    } else {
                        $sonuc['hata'] = 'Bir sorun oluştu tekrar deneyiniz.';
                    }
                } else {
                    $sonuc['hata'] = $image_upload->hata;
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

    public function blogDuzenle()
    {
        if ($this->input->post('form_post')) {
            $this->load->helper('blog');
            $this->load->library('form_validation');
            $data = $this->input->post();
            $baslik = safeUrl($data['baslik']);
            $eski_baslik = safeUrl($data['eskiBaslik']);
            $this->form_validation->set_rules('baslik', 'Başlık', 'required|min_length[5]');
            $this->form_validation->set_rules('icerik', 'İçerik', 'required|min_length[5]');
            if ($baslik != $eski_baslik) {
                $data['slug'] = $baslik;
                $this->form_validation->set_rules('slug', 'Başlık', 'required|is_unique[blog.slug]');
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
                    $image_upload = blogImageUpload('image');
                    if ($image_upload->result == 1) {
                        $blog_data['resim_yol'] = $image_upload->fileName;
                        error_log(print_r($blog_data, TRUE));
                        $updateBlog = $this->Blog_model->blogGuncelleModel($data['duzenlemeID'], $blog_data);
                        if ($updateBlog) {
                            $sonuc['result'] = 'Blog başarıyla güncellendi .';
                        } else {
                            $sonuc['hata'] = 'Bir sorun oluştu tekrar deneyiniz.';
                        }
                    } else {
                        $sonuc['hata'] = $image_upload->hata;
                    }
                } else {
                    error_log(print_r($blog_data, TRUE));
                    $updateBlog = $this->Blog_model->blogGuncelleModel($data['duzenlemeID'], $blog_data);
                    if ($updateBlog) {
                        $sonuc['result'] = 'Blog başarıyla güncellendi .';
                    } else {
                        $sonuc['hata'] = 'Bir sorun oluştu tekrar deneyiniz.';
                    }
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

    public function blogBul($id)
    {
        $findBlog = $this->Blog_model->blogbulModel($id);
        $findBlog->icerik = htmlspecialchars_decode($findBlog->icerik);
        $sonuc['result'] = $findBlog;
        echo json_encode($sonuc);
    }

    public function blogSil($id)
    {
        $findBlog = $this->Blog_model->blogSilModel($id);
        if ($findBlog) {
            $sonuc['result'] = 'Blog başarıyla silindi !';
        } else {
            $sonuc['hata'] = 'Bir sorun oluştu tekrar deneyiniz.';
        }
        echo json_encode($sonuc);
    }
}
