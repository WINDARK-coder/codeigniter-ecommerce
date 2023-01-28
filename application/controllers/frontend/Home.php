<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Categories_model', 'categories_md');
        $this->load->model('Sliders_model', 'sliders_md');
        $this->load->model('Banners_model', 'banners_md');
        $this->load->model('Brands_model', 'brands_md');
        $this->load->model('Payment_methods_model', 'payment_methods_md');
        $this->load->model('Products_model', 'products_md');
        $this->load->model('Blogs_model', 'blogs_md');
        $this->load->model('Our_team_model', 'our_team_md');
    }

    public function index()
    {
        $data['title'] = 'Home page';
        $data['lists'] = category_tree($this->categories_md->select_all());
        $data['lists_app'] = category_tree($this->categories_md->select_all(), 18);
        $data['lists_cul'] = category_tree($this->categories_md->select_all(), 14);
        $data['lists_elect'] = category_tree($this->categories_md->select_all(), 8);
        $data['sliders'] = $this->sliders_md->select_all();
        $data['banners_main'] = $this->banners_md->select_data_loc("0");
        $data['banners_elect'] = $this->banners_md->select_data_loc("1");
        $data['banners_cul'] = $this->banners_md->select_data_loc("2");
        $data['banners_app'] = $this->banners_md->select_data_loc("3");
        $data['brands'] = $this->brands_md->select_all();
        $data['payment_methods'] = $this->payment_methods_md->select_all();
        $data['products_app'] = $this->products_md->join_app();
        $data['products_cul'] = $this->products_md->join_cul();
        $data['products_elect'] = $this->products_md->join_elect();
        $data['cart_products'] = $this->products_md->joinDataById($_COOKIE['cart_products']);
        $data['products_date'] = $this->products_md->select_by_date();
        $data['products_quan'] = $this->products_md->select_by_quan();
        $data['products_price'] = $this->products_md->select_by_price_limit2();
        $data['new_blogs'] = $this->blogs_md->new_blogs();
        $data['team'] = $this->our_team_md->select_last_item();
        // echo "<pre>";
        // print_r($_SESSION);
        // exit();


        $includes = ['main', 'includes/hotdeals', 'includes/electronics', 'includes/updates'];
        $this->load->main($includes, $data);
    }
}
