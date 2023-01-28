<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Blog_detail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blogs_model', 'blogs_md');
        $this->load->model('Products_model', 'products_md');
        $this->load->model('Payment_methods_model', 'payment_methods_md');
        $this->load->model('Categories_model', 'categories_md');
    }

    public function index($id)
    {
        $data['title'] = 'Blog detail page';
        $data['blogs'] = $this->blogs_md->selectDataById($id);
        $data['products_date_limit'] = $this->products_md->select_by_date_limit4();
        $data['payment_methods'] = $this->payment_methods_md->select_all();
        $data['lists'] = category_tree($this->categories_md->select_all());
        $this->load->front('blog_detail', $data);
    }
}
