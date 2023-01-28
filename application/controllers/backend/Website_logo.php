<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website_logo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Website_logo_model', 'website_logo_md');
    }

    public function index()
    {
        $data['title'] = 'Website Logo List';
        $website_logo = new Website_logo_model();
        $data['lists'] = $website_logo->select_all();
        $this->load->back('website_logo/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('logo', 'Logo', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('website_logo/create');
            }

            $path = 'upload/website_logo/';
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

            if (!$this->upload->do_upload('logo')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error_message', $error);
            } else {
                $file_data = $this->upload->data();;
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'logo' => $path . $file_data['file_name'],
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->website_logo_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Success');
                redirect('website_logo');
            } else {
                if (file_exists($request_data['logo'])) {
                    unlink($request_data['logo']);
                }
                $this->session->set_flashdata('error_message', 'An error ocured');
            }
        }

        $data['title'] = 'Website Logo Create';
        $this->load->back('website_logo/create', $data);
    }

    public function edit($id)
    {
        $unlink = 0;
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $img = $this->input->post('img');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('website_logo/edit');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            if ($_FILES["logo"]["tmp_name"]) {
                $path = 'upload/website_logo/';
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['overwrite'] = FALSE;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('logo')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error_message', $error);
                } else {
                    $file_data = $this->upload->data();
                    $request_data['logo'] = $path . $file_data['file_name'];
                    $unlink++;
                }
            } else {
                $select = $this->website_logo_md->selectDataById($id);
                $logo = $select->logo;
                $img = $logo;
            }

            $affected_rows = $this->website_logo_md->update($id, $request_data);

            if ($unlink > 0 and file_exists($img)) {
                unlink($img);
                redirect('website_logo/edit/' . $id);
            } else {
                $this->session->set_flashdata('error_message', 'Image upload error');
                redirect('website_logo/edit/' . $id);
            }
        }

        $item = $this->website_logo_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'No such file');
            redirect('website_logo');
        }

        $data['item'] = $item;
        $data['title'] = 'Website Logo Edit';
        $this->load->back('website_logo/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $select = $this->website_logo_md->selectDataById($id);
        $logo = $select->logo;
        $this->website_logo_md->delete($id);
        if (file_exists($logo)) {
            unlink($logo);
        }
        redirect('website_logo');
    }
}
