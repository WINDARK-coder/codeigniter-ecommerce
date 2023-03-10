<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Categories_model', 'categories_md');
    }

    public function index()
    {
        $data['title'] = 'Categories List';
        $categories = new Categories_model();
        $data['lists'] = $categories->join();
        $this->load->back('categories/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('slug', 'Slug', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('categories/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'parent_id' => $this->security->xss_clean($this->input->post('parent_id')),
                'slug' => $this->security->xss_clean($this->input->post('slug')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->categories_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla əlavə edildi');
                redirect('categories');
            }
        }

        $data['title'] = 'Categories Create';
        $data['categories'] = $this->categories_md->select_all();
        $this->load->back('categories/create', $data);
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('slug', 'Slug', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('categories/edit');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'parent_id' => $this->security->xss_clean($this->input->post('parent_id')),
                'slug' => $this->security->xss_clean($this->input->post('slug')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->categories_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla dəyişdirildi');
                redirect('categories/edit/' . $id);
            }
        }
        $item = $this->categories_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'Bu məlumat tapılmadı');
            redirect('categories');
        }
        $data['item'] = $item;
        $data['title'] = 'Categories Edit';
        $categories = new Categories_model();
        $data['categories'] = $categories->select_all();
        $this->load->back('categories/edit', $data);
    }
    public function delete($id)
    {
        $this->categories_md->delete($id);
        redirect('categories');
    }
}
