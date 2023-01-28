<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model', 'users_md');
        $this->load->model('Payment_methods_model', 'payment_methods_md');
        $this->load->model('Categories_model', 'categories_md');
    }

    public function index()
    {
        $data['title'] = 'Register page';
        $data['payment_methods'] = $this->payment_methods_md->select_all();
        $data['lists'] = category_tree($this->categories_md->select_all());
        $this->load->front('register', $data);
    }

    public function create()
    {
        if ($this->input->post('password') == $this->input->post('confirm') && $this->input->post('status') == 1) {

            if ($this->input->post()) {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('surname', 'Surname', 'required');
                $this->form_validation->set_rules('phone', 'Phone', 'required');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('status', 'Status', 'required');


                if ($this->form_validation->run() == FALSE) {
                    $this->load->front('register/create');
                }

                $request_data = [
                    'name' => $this->security->xss_clean($this->input->post('name')),
                    'surname' => $this->security->xss_clean($this->input->post('surname')),
                    'phone' => $this->security->xss_clean($this->input->post('phone')),
                    'email' => $this->security->xss_clean($this->input->post('email')),
                    'password' => md5($this->input->post('password')),
                    'status' => $this->security->xss_clean($this->input->post('status'))
                ];


                $insert_id = $this->users_md->insert($request_data);
                if ($insert_id > 0) {
                    $this->session->set_flashdata('success_message', 'Məlumat uğurla əlavə edildi');


                    redirect('frontend/login');
                }
            }
        } else {
            $this->session->set_flashdata('error_message', 'No matches in password or You did not agree with given conditions');
            redirect('frontend/register');
        }

        $data['title'] = 'Users Create';

        $this->load->front('register/create', $data);
    }
}
