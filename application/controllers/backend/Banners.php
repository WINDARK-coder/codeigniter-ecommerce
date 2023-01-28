<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banners extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Banners_model', 'banners_md');
    }

    public function index()
    {
        $data['title'] = 'Banners List';
        $banners = new Banners_model();
        $data['lists'] = $banners->select_all();
        $this->load->back('banners/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('image', 'Image', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('banners/create');
            }

            $path = 'upload/banners/';
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
                'image' => $path . $file_data['file_name'],
                'location' => $this->security->xss_clean($this->input->post('location')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->banners_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Success');
                redirect('banners');
            } else {
                if (file_exists($request_data['image'])) {
                    unlink($request_data['image']);
                }
                $this->session->set_flashdata('error_message', 'An error ocured');
            }
        }

        $data['title'] = 'Banners Create';
        $this->load->back('banners/create', $data);
    }

    public function edit($id)
    {
        $unlink = 0;

        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $img = $this->input->post('img');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('banners/edit');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'location' => $this->security->xss_clean($this->input->post('location')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            if ($_FILES["image"]["tmp_name"]) {

                $path = 'upload/banners/';
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
                $select = $this->banners_md->selectDataById($id);
                $logo = $select->image;
                $img = $logo;
            }

            $affected_rows = $this->banners_md->update($id, $request_data);

            if ($unlink > 0 and file_exists($img)) {
                unlink($img);
                redirect('banners/edit/' . $id);
            } else {
                $this->session->set_flashdata('error_message', 'Image upload error');
                redirect('banners/edit/' . $id);
            }
        }

        $item = $this->banners_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'No such file');
            redirect('banners');
        }

        $data['item'] = $item;
        $data['title'] = 'Banners Edit';
        $this->load->back('banners/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $select = $this->banners_md->selectDataById($id);
        $image = $select->image;
        $this->banners_md->delete($id);
        if (file_exists($image)) {
            unlink($image);
        }
        redirect('banners');
    }
}
