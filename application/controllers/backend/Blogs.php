<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Blogs_model', 'blogs_md');
    }

    public function index()
    {
        $data['title'] = 'Blogs List';
        $blogs = new Blogs_model();
        $data['lists'] = $blogs->select_all();
        $this->load->back('blogs/index', $data);
    }
    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            $this->form_validation->set_rules('image', 'Image', 'required');
            $this->form_validation->set_rules('post_by', 'Post by', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('blogs/create');
            }

            $path = 'upload/blog_image/';
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
                'description' => $this->security->xss_clean($this->input->post('description')),
                'content' => $this->security->xss_clean($this->input->post('content')),
                'image' => $path . $file_data['file_name'],
                'post_by' => $this->security->xss_clean($this->input->post('post_by')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->blogs_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla əlavə edildi');
                redirect('blogs');
            } else {
                if (file_exists($request_data['image'])) {
                    unlink($request_data['image']);
                }
                $this->session->set_flashdata('error_message', 'An error ocured');
            }
        }
        $data['title'] = 'Blogs Create';
        $this->load->back('blogs/create', $data);
    }

    public function edit($id)
    {
        $unlink = 0;
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $img = $this->input->post('img');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            $this->form_validation->set_rules('post_by', 'Post by', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('blogs/edit');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'description' => $this->security->xss_clean($this->input->post('description')),
                'content' => $this->security->xss_clean($this->input->post('content')),
                'post_by' => $this->security->xss_clean($this->input->post('post_by')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];
            if ($_FILES["image"]["tmp_name"]) {
                $path = 'upload/blog_image/';
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
                $select = $this->blogs_md->selectDataById($id);
                $image = $select->image;
                $img = $image;
            }

            $affected_rows = $this->blogs_md->update($id, $request_data);
            if ($unlink > 0 and file_exists($img)) {
                unlink($img);
                redirect('blogs/edit/' . $id);
            } else {
                $this->session->set_flashdata('error_message', 'Dəyişdirmə uğursuz oldu');
                redirect('blogs/edit/' . $id);
            }
        }

        $item = $this->blogs_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'Bu məlumat tapılmadı');
            redirect('blogs');
        }

        $data['item'] = $item;
        $data['title'] = 'Blogs Edit';
        $this->load->back('blogs/edit', $data);
    }
    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $select = $this->blogs_md->selectDataById($id);
        $image = $select->image;
        $this->blogs_md->delete($id);
        if (file_exists($image)) {
            unlink($image);
        }
        redirect('blogs');
    }
}
