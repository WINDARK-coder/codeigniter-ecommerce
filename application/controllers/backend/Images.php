<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Images extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Images_model', 'images_md');
        $this->load->model('Products_model', 'products_md');
    }

    public function index()
    {
        $data['title'] = 'Images List';
        $images = new Images_model();
        $products = new Products_model();
        $data['products'] = $products->select_all();
        $data['lists'] = $images->select_all();
        $this->load->back('images/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('path', 'Path', 'required');
            $this->form_validation->set_rules('product_id', 'Product id', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('images/create');
            }
            $dir = 'upload/image/';
            if (!file_exists("upload")) {
                mkdir("upload");
            }
            if (!file_exists($dir)) {
                mkdir($dir);
            }

            $config['upload_path'] = $dir;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = FALSE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('path')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error_message', $error);
            } else {
                $file_data = $this->upload->data();;
            }

            $request_data = [
                'product_id' => $this->security->xss_clean($this->input->post('product_id')),
                'path' => $dir . $file_data['file_name'],
                'main' => $this->security->xss_clean($this->input->post('main'))
            ];

            $insert_id = $this->images_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Success');
                redirect('images');
            } else {
                if (file_exists($request_data['image'])) {
                    unlink($request_data['image']);
                }
                $this->session->set_flashdata('error_message', 'An error ocured');
            }
        }

        $data['title'] = 'Images Create';
        $products = new Products_model();
        $data['products'] = $products->select_all();
        $this->load->back('images/create', $data);
    }

    public function edit($id)
    {
        $unlink = 0;
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $img = $this->input->post('img');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('product_id', 'Product id', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('images/edit');
            }

            $request_data = [
                'product_id' => $this->security->xss_clean($this->input->post('product_id')),
                'main' => $this->security->xss_clean($this->input->post('main'))
            ];

            if ($_FILES["path"]["tmp_name"]) {
                $dir = 'upload/image/';
                $config['upload_path'] = $dir;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['overwrite'] = FALSE;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('path')) {

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error_message', $error);
                } else {
                    $file_data = $this->upload->data();
                    $request_data['path'] = $dir . $file_data['file_name'];
                    $unlink++;
                }
            } else {
                $select = $this->images_md->selectDataById($id);
                $path = $select->path;
                $img = $path;
            }

            $affected_rows = $this->images_md->update($id, $request_data);

            if ($unlink > 0 and file_exists($img)) {
                unlink($img);
                redirect('images/edit/' . $id);
            } else {
                $this->session->set_flashdata('error_message', 'Image upload error');
                redirect('images/edit/' . $id);
            }
        }

        $item = $this->images_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'No such file');
            redirect('images');
        }

        $data['item'] = $item;
        $data['title'] = 'Images Edit';
        $products = new Products_model();
        $data['products'] = $products->select_all();
        $this->load->back('images/edit', $data);
    }
    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $select = $this->images_md->selectDataById($id);
        $path = $select->path;
        $this->images_md->delete($id);
        if (file_exists($path)) {
            unlink($path);
        }
        redirect('images');
    }
}
