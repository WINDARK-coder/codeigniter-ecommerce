<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Settings_model', 'settings_md');
    }

    public function index()
    {
        $data['title'] = 'Settings List';
        $settings = new Settings_model();
        $data['lists'] = $settings->select_all();
        $this->load->back('settings/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('key', 'Key', 'required');
            $this->form_validation->set_rules('value', 'Value', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('settings/create');
            }

            $request_data = [
                'key' => $this->security->xss_clean($this->input->post('key')),
                'value' => $this->security->xss_clean($this->input->post('value')),
                'phone' => $this->security->xss_clean($this->input->post('phone')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->settings_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla əlavə edildi');
                redirect('settings');
            }
        }
        $data['title'] = 'Settings Create';
        $this->load->back('settings/create', $data);
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $this->load->library('form_validation');
            $this->form_validation->set_rules('key', 'Key', 'required');
            $this->form_validation->set_rules('value', 'Value', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('settings/edit');
            }

            $request_data = [
                'key' => $this->security->xss_clean($this->input->post('key')),
                'value' => $this->security->xss_clean($this->input->post('value')),
                'phone' => $this->security->xss_clean($this->input->post('phone')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->settings_md->update($id, $request_data);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success_message', 'Məlumat uğurla dəyişdirildi');

                redirect('settings/edit/' . $id);
            }
        }

        $item = $this->settings_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'Bu məlumat tapılmadı');
            redirect('settings');
        }

        $data['item'] = $item;
        $data['title'] = 'Settings Edit';
        $this->load->back('settings/edit', $data);
    }
    public function delete($id)
    {
        $this->settings_md->delete($id);
        redirect('settings');
    }
}
