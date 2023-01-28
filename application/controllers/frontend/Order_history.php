<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Order_history extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Payment_methods_model', 'payment_methods_md');
        $this->load->model('Categories_model', 'categories_md');
    }

    public function index()
    {
        $data['title'] = 'Order history page';
        $data['payment_methods'] = $this->payment_methods_md->select_all();
        $data['lists'] = category_tree($this->categories_md->select_all());
        $this->load->front('order_history', $data);
    }
}
