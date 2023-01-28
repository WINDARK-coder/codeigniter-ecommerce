<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Our_team extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Our_team_model', 'our_team_md');
    }

    public function index()
    {
        $data['title'] = 'Our team List';
        $our_team = new Our_team_model();
        $data['lists'] = $our_team->select_all();
        $this->load->back('our_team/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('fullname', 'Fullname', 'required');
            $this->form_validation->set_rules('image', 'Image', 'required');
            $this->form_validation->set_rules('profession', 'Profession', 'required');
            $this->form_validation->set_rules('about', 'About', 'required');
            $this->form_validation->set_rules('rss', 'Rss', 'required');
            $this->form_validation->set_rules('facebook', 'Facebook', 'required');
            $this->form_validation->set_rules('twitter', 'Twitter', 'required');
            $this->form_validation->set_rules('google', 'Google', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('our_team/create');
            }

            $path = 'upload/our_team/';
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
                'fullname' => $this->security->xss_clean($this->input->post('fullname')),
                'image' => $path . $file_data['file_name'],
                'profession' => $this->security->xss_clean($this->input->post('profession')),
                'rss' => $this->security->xss_clean($this->input->post('rss')),
                'facebook' => $this->security->xss_clean($this->input->post('facebook')),
                'twitter' => $this->security->xss_clean($this->input->post('twitter')),
                'google' => $this->security->xss_clean($this->input->post('google')),
                'about' => $this->security->xss_clean($this->input->post('about')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->our_team_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Success');
                redirect('our_team');
            } else {
                if (file_exists($request_data['image'])) {
                    unlink($request_data['image']);
                }
                $this->session->set_flashdata('error_message', 'An error ocured');
            }
        }

        $data['title'] = 'Our Team Create';
        $this->load->back('our_team/create', $data);
    }

    public function edit($id)
    {
        $unlink = 0;
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $img = $this->input->post('img');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('fullname', 'Fullname', 'required');
            $this->form_validation->set_rules('image', 'Image', 'required');
            $this->form_validation->set_rules('profession', 'Profession', 'required');
            $this->form_validation->set_rules('about', 'About', 'required');
            $this->form_validation->set_rules('rss', 'Rss', 'required');
            $this->form_validation->set_rules('facebook', 'Facebook', 'required');
            $this->form_validation->set_rules('twitter', 'Twitter', 'required');
            $this->form_validation->set_rules('google', 'Google', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('our_team/edit');
            }

            $request_data = [
                'fullname' => $this->security->xss_clean($this->input->post('fullname')),
                'profession' => $this->security->xss_clean($this->input->post('profession')),
                'rss' => $this->security->xss_clean($this->input->post('rss')),
                'facebook' => $this->security->xss_clean($this->input->post('facebook')),
                'twitter' => $this->security->xss_clean($this->input->post('twitter')),
                'google' => $this->security->xss_clean($this->input->post('google')),
                'about' => $this->security->xss_clean($this->input->post('about')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            if ($_FILES["image"]["tmp_name"]) {
                $path = 'upload/our_team/';
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
                $select = $this->our_team_md->selectDataById($id);
                $image = $select->image;
                $img = $image;
            }

            $affected_rows = $this->our_team_md->update($id, $request_data);

            if ($unlink > 0 and file_exists($img)) {
                unlink($img);
                redirect('our_team/edit/' . $id);
            } else {
                $this->session->set_flashdata('error_message', 'Image upload error');
                redirect('our_team/edit/' . $id);
            }
        }

        $item = $this->our_team_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'No such file');
            redirect('our_team');
        }

        $data['item'] = $item;
        $data['title'] = 'Our Team Edit';
        $this->load->back('our_team/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $select = $this->our_team_md->selectDataById($id);
        $image = $select->image;
        $this->our_team_md->delete($id);
        if (file_exists($image)) {
            unlink($image);
        }
        redirect('our_team');
    }
}
