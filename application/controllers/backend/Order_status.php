<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_status extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Order_status_model', 'order_status_md');
    }

    public function index()
    {
        $data['title'] = 'Order Status List';
        $order_status = new Order_status_model();
        $data['lists'] = $order_status->select_all();
        $this->load->back('order_status/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('order_status/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->order_status_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla əlavə edildi');
                redirect('order_status');
            }
        }

        $data['title'] = 'Order Status Create';
        $this->load->back('order_status/create', $data);
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('order_status/edit');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->order_status_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla dəyişdirildi');
                redirect('order_status/edit/' . $id);
            }
        }

        $item = $this->order_status_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'Bu məlumat tapılmadı');
            redirect('order_status');
        }

        $data['item'] = $item;
        $data['title'] = 'Order Status Edit';
        $this->load->back('order_status/edit', $data);
    }
    public function delete($id)
    {
        $this->order_status_md->delete($id);
        redirect('order_status');
    }
}
