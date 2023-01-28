<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Header extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged();


        $this->load->model('Categories_model', 'categories_md');
        $this->load->model('Sliders_model', 'sliders_md');
        $this->load->model('Banners_model', 'banners_md');
        $this->load->model('Brands_model', 'brands_md');
    }

    public function index()
    {
        $data['lists'] = category_tree($this->categories_md->select_all());
        $data['sliders'] = $this->sliders_md->select_all();
        $data['banners'] = $this->banners_md->select_all();
        $data['brands'] = $this->brands_md->select_all();
        $this->load->view('frontend/template/header', $data);
    }
}
