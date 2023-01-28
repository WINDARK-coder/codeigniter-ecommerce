<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment_methods extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Payment_methods_model', 'payment_methods_md');
    }

    public function index()
    {
        $data['title'] = 'Payment Methods List';
        $payment_methods = new Payment_methods_model();
        $data['lists'] = $payment_methods->select_all();
        $this->load->back('payment_methods/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('image', 'Image', 'required');
            $this->form_validation->set_rules('order', 'Order', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('payment_methods/create');
            }

            $path = 'upload/payment_methods/';
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
                'order' => $this->security->xss_clean($this->input->post('order')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];
            $insert_id = $this->payment_methods_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla əlavə edildi');
                redirect('payment_methods');
            } else {
                if (file_exists($request_data['image'])) {
                    unlink($request_data['image']);
                }
                $this->session->set_flashdata('error_message', 'An error ocured');
            }
        }
        $data['title'] = 'Payment Methods Create';
        $this->load->back('payment_methods/create', $data);
    }

    public function edit($id)
    {
        $unlink = 0;
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $img = $this->input->post('img');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('order', 'Order', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('payment_methods/edit');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'order' => $this->security->xss_clean($this->input->post('order')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->payment_methods_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla dəyişdirildi');

                redirect('payment_methods/edit/' . $id);
            }

            if ($_FILES["image"]["tmp_name"]) {
                $path = 'upload/payment_methods/';
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
                $select = $this->payment_methods_md->selectDataById($id);
                $image = $select->image;
                $img = $image;
            }
            $affected_rows = $this->payment_methods_md->update($id, $request_data);

            if ($unlink > 0 and file_exists($img)) {
                unlink($img);
                redirect('payment_methods/edit/' . $id);
            } else {
                $this->session->set_flashdata('error_message', 'Image upload error');
                redirect('payment_methods/edit/' . $id);
            }
        }
        $item = $this->payment_methods_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'Bu məlumat tapılmadı');

            redirect('payment_methods');
        }

        $data['item'] = $item;
        $data['title'] = 'Payment Methods Edit';
        $this->load->back('payment_methods/edit', $data);
    }
    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $select = $this->payment_methods_md->selectDataById($id);
        $image = $select->image;
        $this->payment_methods_md->delete($id);
        if (file_exists($image)) {
            unlink($image);
        }
        redirect('payment_methods');
    }
}
