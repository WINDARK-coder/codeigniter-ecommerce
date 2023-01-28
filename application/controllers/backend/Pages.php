<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Pages_model', 'pages_md');
    }

    public function index()
    {
        $data['title'] = 'Pages List';
        $pages = new Pages_model();
        $data['lists'] = $pages->select_all();
        $this->load->back('pages/index', $data);
    }
    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('pages/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'description' => $this->security->xss_clean($this->input->post('description')),
                'content' => $this->security->xss_clean($this->input->post('content')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->pages_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla əlavə edildi');
                redirect('pages');
            }
        }

        $data['title'] = 'Pages Create';
        $this->load->back('pages/create', $data);
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('pages/edit');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'description' => $this->security->xss_clean($this->input->post('description')),
                'content' => $this->security->xss_clean($this->input->post('content')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->pages_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla dəyişdirildi');

                redirect('pages/' . $id);
            }
        }

        $item = $this->pages_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'Bu məlumat tapılmadı');
            redirect('pages');
        }

        $data['item'] = $item;
        $data['title'] = 'Pages Edit';
        $this->load->back('pages/edit', $data);
    }
    public function delete($id)
    {
        $this->pages_md->delete($id);
        redirect('pages');
    }
}
