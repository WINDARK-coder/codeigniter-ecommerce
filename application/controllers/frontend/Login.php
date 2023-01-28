<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Users_model', 'users_md');
        $this->load->model('Payment_methods_model', 'payment_methods_md');
        $this->load->model('Categories_model', 'categories_md');
    }

    public function index()
    {
        $data['title'] = 'Login page';
        $data['payment_methods'] = $this->payment_methods_md->select_all();
        $data['lists'] = category_tree($this->categories_md->select_all());


        if ($this->input->post()) {

            $this->load->library('form_validation');
            $users = new Users_model();


            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Şifrə', 'required');

            $request_data = [
                'email' => $this->security->xss_clean($this->input->post('email')),
                'password' => md5($this->input->post('password'))

            ];
            $data['user'] = $users->loggedin($request_data['email'], $request_data['password']);

            // print_r($data['admin']);
            if ($data['user']) {
                $this->session->set_flashdata('success_message', 'Success');
                $this->session->set_userdata('user', $data['user']);
                $this->session->set_userdata('loggedin2', 1);
                redirect('home');
            } else {
                $this->session->set_flashdata('error_message', 'Error');
                redirect('login');
            }
        }

        $this->load->front('login', $data);
    }
}
