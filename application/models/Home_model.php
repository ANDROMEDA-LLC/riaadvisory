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
            ->where('ID',1)
            ->get('intro')
            ->row(); // row() bir tane ve 1. sırada ki veri çeker , result() bütün veriyi döner . 
    }
    function workRiaDataModel()
    {
        

    }
    function blogDataModel()
    {
        return $this->db->select('*')
        ->order_by('create_date', 'DESC')
        ->get('blog')
        ->result(); // row() bir tane ve 1. sırada ki veri çeker , result() bütün veriyi döner . 
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
}
