<?php
defined('BASEPATH') or exit('No direct script access allowed');


class About_us extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Payment_methods_model', 'payment_methods_md');
        $this->load->model('Categories_model', 'categories_md');
        $this->load->model('Our_team_model', 'our_team_md');
        $this->load->model('About_us_model', 'about_us_md');
        $this->load->model('Products_model', 'products_md');
    }

    public function index()
    {
        $data['title'] = 'About us page';
        $data['payment_methods'] = $this->payment_methods_md->select_all();
        $data['about_us'] = $this->about_us_md->select_all();
        $data['our_team'] = $this->our_team_md->select_all();
        $data['lists'] = category_tree($this->categories_md->select_all());
        $data['cart_products'] = $this->products_md->joinDataById($_COOKIE['cart_products']);

        $this->load->front('about_us', $data);
    }
}
