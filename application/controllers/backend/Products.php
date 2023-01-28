<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Products_model', 'products_md');
        $this->load->model('Brands_model', 'brands_md');
        $this->load->model('Categories_model', 'categories_md');
    }

    public function index()
    {
        $data['title'] = 'Products List';
        $products = new Products_model();
        $data['lists'] = $products->select_all();
        $data['categories'] = $products;
        $this->load->back('products/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('brand_id', 'Brand id', 'required');
            $this->form_validation->set_rules('category_id', 'Category id', 'required');
            $this->form_validation->set_rules('quantity', 'Quantity', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('sales_price', 'Sales Price', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('products/create');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'description' => $this->security->xss_clean($this->input->post('description')),
                'brand_id' => $this->security->xss_clean($this->input->post('brand_id')),
                'category_id' => $this->security->xss_clean($this->input->post('category_id')),
                'quantity' => $this->security->xss_clean($this->input->post('quantity')),
                'price' => $this->security->xss_clean($this->input->post('price')),
                'sales_price' => $this->security->xss_clean($this->input->post('sales_price')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->products_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla əlavə edildi');
                redirect('products');
            }
        }

        $data['title'] = 'Products Create';
        $brands = new Brands_model();
        $data['brands'] = $brands->select_all();
        $categories = new Categories_model();
        $data['categories'] = $categories->select_all();
        $this->load->back('products/create', $data);
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('brand_id', 'Brand id', 'required');
            $this->form_validation->set_rules('category_id', 'Category id', 'required');
            $this->form_validation->set_rules('quantity', 'Quantity', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('sales_price', 'Sales Price', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('products/edit');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'description' => $this->security->xss_clean($this->input->post('description')),
                'brand_id' => $this->security->xss_clean($this->input->post('brand_id')),
                'category_id' => $this->security->xss_clean($this->input->post('category_id')),
                'quantity' => $this->security->xss_clean($this->input->post('quantity')),
                'price' => $this->security->xss_clean($this->input->post('price')),
                'sales_price' => $this->security->xss_clean($this->input->post('sales_price')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->products_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla dəyişdirildi');
                redirect('products/edit/' . $id);
            }
        }
        $item = $this->products_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'Bu məlumat tapılmadı');
            redirect('products');
        }

        $data['item'] = $item;
        $data['title'] = 'Products Edit';
        $brands = new Brands_model();
        $data['brands'] = $brands->select_all();
        $categories = new Categories_model();
        $data['categories'] = $categories->select_all();
        $this->load->back('products/edit', $data);
    }
    public function delete($id)
    {
        $this->products_md->delete($id);
        redirect('products');
    }
}
