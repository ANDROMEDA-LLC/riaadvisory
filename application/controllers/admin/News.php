<?php

defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == false) {
            redirect('login');
        }
        $this->load->model('News_model');
    }

    public function index()
    {
        $data['blogs'] = $this->News_model->newsVeriAlModel();
        $this->theme->display('backend/news', $data);
    }

    public function newsEkle()
    {
        if ($this->input->post('form_post')) {
            $this->load->helper('news');
            $this->load->library('form_validation');
            $data = $this->input->post();
            $data['slug'] = safeUrl($data['baslik']);
            $this->form_validation->set_data($data);
            $this->form_validation->set_rules('baslik', 'title', 'required|min_length[5]');
            $this->form_validation->set_rules('icerik', 'content', 'required|min_length[5]');
            $this->form_validation->set_rules('slug', 'title', 'required|is_unique[news.slug]');
            if ($this->form_validation->run()) {
                $image_upload = newsImageUpload('image');
                if ($image_upload->result == 1) {
                    $blog_data = array(
                        'baslik' => $data['baslik'],
                        'icerik' => htmlspecialchars($data['icerik']),
                        'slug' => $data['slug'],
                        'resim_yol' => $image_upload->fileName,
                    );
                    $addBlog = $this->News_model->newsEkleModel($blog_data);
                    if ($addBlog) {
                        $sonuc['result'] = 'News added successfully.';
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

    public function newsDuzenle()
    {
        if ($this->input->post('form_post')) {
            $this->load->helper('news');
            $this->load->library('form_validation');
            $data = $this->input->post();
            $baslik = safeUrl($data['baslik']);
            $eski_baslik = safeUrl($data['eskiBaslik']);
            $this->form_validation->set_rules('baslik', 'title', 'required|min_length[5]');
            $this->form_validation->set_rules('icerik', 'content', 'required|min_length[5]');
            if ($baslik != $eski_baslik) {
                $data['slug'] = $baslik;
                $this->form_validation->set_rules('slug', 'title', 'required|is_unique[news.slug]');
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
                    $image_upload = newsImageUpload('image');
                    if ($image_upload->result == 1) {
                        $blog_data['resim_yol'] = $image_upload->fileName;
                        $updateBlog = $this->News_model->newsGuncelleModel($data['duzenlemeID'], $blog_data);
                        if ($updateBlog) {
                            $sonuc['result'] = 'News updated successfully.';
                        } else {
                            $sonuc['hata'] = 'There was a problem, please try again.';
                        }
                    } else {
                        $sonuc['hata'] = $image_upload->hata;
                    }
                } else {
                    $updateBlog = $this->News_model->newsGuncelleModel($data['duzenlemeID'], $blog_data);
                    if ($updateBlog) {
                        $sonuc['result'] = 'News updated successfully.';
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

    public function newsBul($id)
    {
        $findBlog = $this->News_model->newsbulModel($id);
        $findBlog->icerik = htmlspecialchars_decode($findBlog->icerik);
        $sonuc['result'] = $findBlog;
        echo json_encode($sonuc);
    }

    public function newsSil($id)
    {
        $findBlog = $this->News_model->newsSilModel($id);
        if ($findBlog) {
            $sonuc['result'] = 'News deleted successfully!';
        } else {
            $sonuc['hata'] = 'There was a problem, please try again.';
        }
        echo json_encode($sonuc);
    }
}
