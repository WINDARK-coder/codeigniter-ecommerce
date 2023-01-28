<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Banner_effect extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged();
    }

    public function index()
    {
        $data['title'] = 'Banner effect page';
        $this->load->front('banner_effect', $data);
    }
}
