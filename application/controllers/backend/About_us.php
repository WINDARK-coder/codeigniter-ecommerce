<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('About_us_model', 'about_us_md');
    }

    public function index()
    {
        $data['title'] = 'About us List';
        $about_us = new About_us_model();
        $data['lists'] = $about_us->select_all();
        $this->load->back('about_us/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('image', 'Image', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('about_us/create');
            }

            $path = 'upload/about_us/';
            if (!file_exists("upload")) {
                mkdir("upload");
            }
            if (!file_exists($path)) {
                mkdir($path);
            }

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = FALSE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error_message', $error);
            } else {
                $file_data = $this->upload->data();;
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'content' => $this->security->xss_clean($this->input->post('content')),
                'image' => $path . $file_data['file_name'],
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->about_us_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Success');
                redirect('about_us');
            } else {
                if (file_exists($request_data['image'])) {
                    unlink($request_data['image']);
                }
                $this->session->set_flashdata('error_message', 'An error ocured');
            }
        }

        $data['title'] = 'About us Create';
        $this->load->back('about_us/create', $data);
    }

    public function edit($id)
    {
        $unlink = 0;
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $img = $this->input->post('img');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('about_us/edit');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'content' => $this->security->xss_clean($this->input->post('content')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            if ($_FILES["image"]["tmp_name"]) {
                $path = 'upload/about_us/';
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['overwrite'] = FALSE;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error_message', $error);
                } else {
                    $file_data = $this->upload->data();
                    $request_data['image'] = $path . $file_data['file_name'];
                    $unlink++;
                }
            } else {
                $select = $this->about_us_md->selectDataById($id);
                $image = $select->image;
                $img = $image;
            }

            $affected_rows = $this->about_us_md->update($id, $request_data);

            if ($unlink > 0 and file_exists($img)) {
                unlink($img);
                redirect('about_us/edit/' . $id);
            } else {
                $this->session->set_flashdata('error_message', 'Image upload error');
                redirect('about_us/edit/' . $id);
            }
        }

        $item = $this->about_us_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'No such file');
            redirect('about_us');
        }

        $data['item'] = $item;
        $data['title'] = 'About us Edit';
        $this->load->back('about_us/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $select = $this->about_us_md->selectDataById($id);
        $image = $select->image;
        $this->about_us_md->delete($id);
        if (file_exists($image)) {
            unlink($image);
        }
        redirect('about_us');
    }
}
