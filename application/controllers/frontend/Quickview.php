<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Quickview extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Products_model', 'products_md');
    }

    public function index($id)
    {
        $data['title'] = 'Quickview page';
        $data['products'] = $this->products_md->joinDataById($id);

        $this->load->view('frontend/quickview', $data);
    }
}
