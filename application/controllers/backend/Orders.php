<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Orders extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Orders_model', 'orders_md');
        $this->load->model('Users_model', 'users_md');
        $this->load->model('Payment_methods_model', 'Payment_methods_md');
        $this->load->model('Delivery_methods_model', 'Delivery_methods_md');
        $this->load->model('Order_status_model', 'Order_status_md');
    }

    public function index()
    {
        $data['title'] = 'Orders List';
        $orders = new Orders_model();
        $data['lists'] = $orders->select_all();
        $users = new Users_model();
        $data['users'] = $users->select_all();
        $payment_methods = new Payment_methods_model();
        $data['payment_methods'] = $payment_methods->select_all();
        $delivery_methods = new Delivery_methods_model();
        $data['delivery_methods'] = $delivery_methods->select_all();
        $order_status = new Order_status_model();
        $data['order_status'] = $order_status->select_all();
        $this->load->back('orders/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('user_id', 'User', 'required');
            $this->form_validation->set_rules('payment_method', 'Payment method', 'required');
            $this->form_validation->set_rules('delivery_method', 'Delivery method', 'required');
            $this->form_validation->set_rules('total_amount', 'Total amount', 'required');
            $this->form_validation->set_rules('payment_json', 'Payment', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('status_id', 'Status', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('orders/create');
            }

            $request_data = [
                'user_id' => $this->security->xss_clean($this->input->post('user_id')),
                'payment_method' => $this->security->xss_clean($this->input->post('payment_method')),
                'delivery_method' => $this->security->xss_clean($this->input->post('delivery_method')),
                'total_amount' => $this->security->xss_clean($this->input->post('total_amount')),
                'payment_json' => $this->security->xss_clean($this->input->post('payment_json')),
                'price' => $this->security->xss_clean($this->input->post('price')),
                'status_id' => $this->security->xss_clean($this->input->post('status_id'))
            ];

            $insert_id = $this->orders_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla əlavə edildi');
                redirect('orders');
            }
        }

        $data['title'] = 'Orders Create';
        $users = new Users_model();
        $data['users'] = $users->select_all();
        $payment_methods = new Payment_methods_model();
        $data['payment_methods'] = $payment_methods->select_all();
        $delivery_methods = new Delivery_methods_model();
        $data['delivery_methods'] = $delivery_methods->select_all();
        $order_status = new Order_status_model();
        $data['orders_status'] = $order_status->select_all();
        $this->load->back('orders/create', $data);
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $this->load->library('form_validation');
            $this->form_validation->set_rules('user_id', 'User', 'required');
            $this->form_validation->set_rules('payment_method', 'Payment method', 'required');
            $this->form_validation->set_rules('delivery_method', 'Delivery method', 'required');
            $this->form_validation->set_rules('total_amount', 'Total amount', 'required');
            $this->form_validation->set_rules('payment_json', 'Payment', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('status_id', 'Status', 'required');

            // if ($this->form_validation->run() == FALSE) {
            //     $this->load->back('orders/edit');
            // }

            $request_data = [
                'user_id' => $this->security->xss_clean($this->input->post('user_id')),
                'payment_method' => $this->security->xss_clean($this->input->post('payment_method')),
                'delivery_method' => $this->security->xss_clean($this->input->post('delivery_method')),
                'total_amount' => $this->security->xss_clean($this->input->post('total_amount')),
                'payment_json' => $this->security->xss_clean($this->input->post('payment_json')),
                'price' => $this->security->xss_clean($this->input->post('price')),
                'status_id' => $this->security->xss_clean($this->input->post('status_id'))
            ];

            $affected_rows = $this->orders_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla dəyişdirildi');
                redirect('orders/edit/' . $id);
            }
        }

        $item = $this->orders_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'Bu məlumat tapılmadı');
            redirect('orders');
        }

        $data['item'] = $item;
        $data['title'] = 'Orders Edit';
        $users = new Users_model();
        $data['users'] = $users->select_all();
        $payment_methods = new Payment_methods_model();
        $data['payment_methods'] = $payment_methods->select_all();
        $delivery_methods = new Delivery_methods_model();
        $data['delivery_methods'] = $delivery_methods->select_all();
        $order_status = new Order_status_model();
        $data['orders_status'] = $order_status->select_all();
        $this->load->back('orders/edit', $data);
    }
    public function delete($id)
    {
        $this->orders_md->delete($id);
        redirect('orders');
    }
}
