<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Products_model', 'products_md');
        $this->load->model('Payment_methods_model', 'payment_methods_md');
        $this->load->model('Categories_model', 'categories_md');

        is_logged();
    }

    public function index($id)
    {
        $data['title'] = 'Product page';
        $data['products'] = $this->products_md->joinDataById($id);
        $data['brand'] = $this->products_md->select_data_brand($data['products']->brand_id);
        $data['related_products'] = $this->products_md->select_by_category_limit4($data['products']->category_id);
        $data['payment_methods'] = $this->payment_methods_md->select_all();
        $data['products_quan'] = $this->products_md->select_by_quan();
        $data['lists'] = category_tree($this->categories_md->select_all());
        $data['cart_products'] = $this->products_md->joinDataById($_COOKIE['cart_products']);


        $this->load->front('product', $data);
        // echo "<pre>";
        // print_r($data['products_quan']);
        // exit();
    }
}
