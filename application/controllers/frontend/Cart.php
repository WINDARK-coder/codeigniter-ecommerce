<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Payment_methods_model', 'payment_methods_md');
        $this->load->model('Categories_model', 'categories_md');
        $this->load->model('Products_model', 'products_md');
    }

    public function index()
    {
        $data['title'] = 'Cart page';
        $data['payment_methods'] = $this->payment_methods_md->select_all();
        $data['lists'] = category_tree($this->categories_md->select_all());
        $data['cart_products'] = $this->products_md->joinDataById($_COOKIE['cart_products']);

        // echo "<pre>";
        // print_r($this->input->post());
        // exit();

        $this->load->front('cart', $data);
    }
    public function add_to_cart()
    {

        // print_r($_POST);
        // exit();

        if ($this->input->is_ajax_request()) {


            $id = $this->security->xss_clean($this->input->post('id'));
            $quantity = $this->security->xss_clean($this->input->post('value'));
            $product = $this->products_md->selectDataById($id);
            if (!empty($product)) {
                if (!empty(get_cookie('cart_products'))) {
                    $cart_products = explode(',', get_cookie('cart_products'));
                    array_push($cart_products, $id);
                    $cart_products = implode(',', $cart_products);
                    set_cookie('cart_products', $cart_products, 86400);
                } else {
                    $cart_products[] = $id;
                    $cart_products = implode(',', $cart_products);
                    set_cookie('cart_products', $cart_products, 86400);
                }

                echo $id;
                echo json_encode(["process" => true]);
            }
        }
    }
}
