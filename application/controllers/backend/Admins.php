<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admins extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Admins_model', 'admins_md');
    }

    public function index()
    {
        $data['title'] = 'Admins List';
        $admins = new Admins_model();
        $data['lists'] = $admins->select_all();
        $this->load->back('admins/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('fullname', 'Ad ve soyad', 'required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Şifrə', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('admins/create');
            }
            $path = 'upload/admin_image/';
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
                'email' => $this->security->xss_clean($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                'image' => $path . $file_data['file_name'],
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->admins_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Success');

                redirect('admins');
            } else {
                if (file_exists($request_data['image'])) {
                    unlink($request_data['image']);
                }
                $this->session->set_flashdata('error_message', 'An error ocured');
            }
        }

        $data['title'] = 'Admins Create';

        $this->load->back('admins/create', $data);
    }

    public function edit($id)
    {
        $unlink = 0;


        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $img = $this->input->post('img');


            $this->load->library('form_validation');

            $this->form_validation->set_rules('fullname', 'Ad ve soyad', 'required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('admins/edit');
            }

            $request_data = [
                'fullname' => $this->security->xss_clean($this->input->post('fullname')),
                'email' => $this->security->xss_clean($this->input->post('email')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            if (!empty($this->input->post('password'))) {
                $request_data['password'] = md5($this->input->post('password'));
            }

            if ($_FILES["image"]["tmp_name"]) {

                $path = 'upload/admin_image/';
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
                $select = $this->admins_md->selectDataById($id);
                $image = $select->image;
                $img = $image;
            }

            $affected_rows = $this->admins_md->update($id, $request_data);

            if ($unlink > 0 and file_exists($img)) {
                unlink($img);
                redirect('admins/edit/' . $id);
            } else {
                $this->session->set_flashdata('error_message', 'Image upload error');
                redirect('admins/edit/' . $id);
            }
        }

        $item = $this->admins_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'Bu məlumat tapılmadı');

            redirect('admins');
        }

        $data['item'] = $item;

        $data['title'] = 'Admins Edit';

        if ($id == $_SESSION['admin']->id) {
            $this->session->set_userdata('admin', $data['item']);
        }

        $this->load->back('admins/edit', $data);
    }
    public function delete($id)
    {
        $id = $this->security->xss_clean($id);

        $select = $this->admins_md->selectDataById($id);
        $image = $select->image;

        $this->admins_md->delete($id);
        if (file_exists($image)) {
            unlink($image);
        }
        redirect('admins');
    }
}
