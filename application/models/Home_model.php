<?php

class Home_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function homeGetBlogModel()
    {
        return $this->db->select('*')
            ->order_by('create_date', 'DESC')
            ->get('blog')
            ->result(); // row() bir tane ve 1. sırada ki veri çeker , result() bütün veriyi döner . 
    }

    function utilitiesDataModel()
    {
        return $this->db->select('*')
            ->order_by('create_date', 'DESC')
            ->get('utilities')
            ->result(); // row() bir tane ve 1. sırada ki veri çeker , result() bütün veriyi döner . 
    }
    function servicesDataModel()
    {
        return $this->db->select('*')
            ->order_by('create_date', 'DESC')
            ->get('financialservices')
            ->result(); // row() bir tane ve 1. sırada ki veri çeker , result() bütün veriyi döner . 
    }
    function whyusDataModel()
    {
        return $this->db->select('*')
            ->get('whysus')
            ->row(); // row() bir tane ve 1. sırada ki veri çeker , result() bütün veriyi döner . 
    }
    function introGetBlogModel()
    {
        return $this->db->select('*')
            ->where('ID', 1)
            ->get('intro')
            ->row(); // row() bir tane ve 1. sırada ki veri çeker , result() bütün veriyi döner . 
    }
    function workRiaDataModel()
    {
        return $this->db->select('*')
            ->order_by('create_date', 'DESC')
            ->get('application')
            ->result(); // row() bir tane ve 1. sırada ki veri çeker , result() bütün veriyi döner . 

    }
    function workRiaDetailDataModel($kod)
    {
        return $this->db->select('*')
            ->where('slug', $kod)
            ->get('application')
            ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }
    function blogDataModel()
    {
        return $this->db->select('*')
            ->order_by('create_date', 'DESC')
            ->get('blog')
            ->result(); // row() bir tane ve 1. sırada ki veri çeker , result() bütün veriyi döner . 
    }
    function newsDataModel()
    {
        return $this->db->select('*')
            ->order_by('create_date', 'DESC')
            ->get('news')
            ->result(); // row() bir tane ve 1. sırada ki veri çeker , result() bütün veriyi döner . 
    }
    function newsdetailDataModel($kod){
        return $this->db->select('*')
        ->where('slug', $kod)
        ->get('news')
        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }
    function latestnewsDataModel(){
        return $this->db->select('*')
        ->order_by('create_date', 'DESC') 
        ->limit(3)
        ->get('news')
        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }
    function blogdetailDataModel($kod){
        return $this->db->select('*')
        ->where('slug', $kod)
        ->get('blog')
        ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }
    function latestblogDataModel(){
        return $this->db->select('*')
        ->order_by('create_date', 'DESC') 
        ->limit(3)
        ->get('blog')
        ->result(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }
    function aboutusDataModel()
    {
        return $this->db->select('*')
            ->get('aboutus')
            ->row(); // row() bir tane ve 1. sırada ki veri çeker , result() bütün veriyi döner . 
    }

    function homeblogFindModel($slug)
    {
        return $this->db->select('baslik,icerik,resim_yol,create_date')
            ->where('slug', $slug)
            ->get('blog')
            ->row(); // row() bir tane ve en üste ki veri çeker result() bütün veriyi döner . 
    }

    function contactEkleModel($data)
    {
        $this->db->insert('contact', $data);
        return $this->db->insert_id();
    }

    function workriaEkleModel($data)
    {
        $this->db->insert('person_app', $data);
        return $this->db->insert_id();
    }
}
