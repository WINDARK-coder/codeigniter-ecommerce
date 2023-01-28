<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_methods_model', 'payment_methods_md');
        $this->load->model('Categories_model', 'categories_md');
        $this->load->model('Products_model', 'products_md');
    }

    public function index()
    {
        $data['title'] = 'Category page';
        $data['payment_methods'] = $this->payment_methods_md->select_all();
        $data['lists'] = category_tree($this->categories_md->select_all());
        $data['products_date'] = $this->products_md->select_by_date_limit4();
        $data['products_app'] = $this->products_md->join_app();
        $data['products_cul'] = $this->products_md->join_cul();
        $data['products_elect'] = $this->products_md->join_elect();
        $this->load->front('categories', $data);
    }
}
