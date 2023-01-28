<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sliders extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
        $this->load->model('Sliders_model', 'sliders_md');
    }

    public function index()
    {
        $data['title'] = 'Sliders List';
        $sliders = new Sliders_model();
        $data['lists'] = $sliders->select_all();
        $this->load->back('sliders/index', $data);
    }


    public function create()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
            $this->form_validation->set_rules('image1', 'First image', 'required');
            $this->form_validation->set_rules('image2', 'Second image', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('sliders/create');
            }

            $path = 'upload/sliders/';
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

            if (!$this->upload->do_upload('image1')) {
                $error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('error_message', $error);
            } else {
                $file_data1 = $this->upload->data();;
            }

            if (!$this->upload->do_upload('image2')) {
                $error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('error_message', $error);
            } else {
                $file_data2 = $this->upload->data();;
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'subtitle' => $this->security->xss_clean($this->input->post('subtitle')),
                'image1' => $path . $file_data1['file_name'],
                'image2' => $path . $file_data2['file_name'],
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $insert_id = $this->sliders_md->insert($request_data);

            if ($insert_id > 0) {
                $this->session->set_flashdata('success_message', 'Success');
                redirect('sliders');
            } else {
                if (file_exists($request_data['image1'])) {
                    unlink($request_data['image1']);
                } elseif (file_exists($request_data['image2'])) {
                    unlink($request_data['image2']);
                }
                $this->session->set_flashdata('error_message', 'An error ocured');
            }
        }

        $data['title'] = 'Sliders Create';
        $this->load->back('sliders/create', $data);
    }

    public function edit($id)
    {
        $unlink1 = 0;
        $unlink2 = 0;
        if ($this->input->post()) {
            $id = $this->security->xss_clean($id);
            $img1 = $this->input->post('img1');
            $img2 = $this->input->post('img2');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('subtitle', 'Subtitle', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->back('sliders/edit');
            }

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'subtitle' => $this->security->xss_clean($this->input->post('subtitle')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            if ($_FILES["image1"]["tmp_name"]) {
                $path = 'upload/sliders/';
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['overwrite'] = FALSE;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image1')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error_message', $error);
                } else {
                    $file_data1 = $this->upload->data();
                    $request_data['image1'] = $path . $file_data1['file_name'];
                    $unlink1++;
                }
            } else {
                $select = $this->sliders_md->selectDataById($id);
                $image1 = $select->image1;
                $img1 = $image1;
            }

            if ($_FILES["image2"]["tmp_name"]) {
                $path = 'upload/sliders/';
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['overwrite'] = FALSE;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image2')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error_message', $error);
                } else {
                    $file_data2 = $this->upload->data();
                    $request_data['image2'] = $path . $file_data2['file_name'];
                    $unlink2++;
                }
            } else {
                $select = $this->sliders_md->selectDataById($id);
                $image2 = $select->image2;
                $img2 = $image2;
            }

            $affected_rows = $this->sliders_md->update($id, $request_data);
            if ($unlink1 > 0 and file_exists($img1)) {
                unlink($img1);
                redirect('sliders/edit/' . $id);
            } elseif ($unlink2 > 0 and file_exists($img2)) {
                unlink($img2);
                redirect('sliders/edit/' . $id);
            } elseif ($unlink1 > 0 and file_exists($img1) and $unlink2 > 0 and file_exists($img2)) {
                unlink($img1);
                unlink($img2);
                redirect('sliders/edit/' . $id);
            } else {
                $this->session->set_flashdata('error_message', 'Image upload error');
                redirect('sliders/edit/' . $id);
            }
        }

        $item = $this->sliders_md->selectDataById($id);

        if (empty($item)) {
            $this->session->set_flashdata('error_message', 'No such file');
            redirect('sliders');
        }

        $data['item'] = $item;
        $data['title'] = 'Sliders Edit';
        $this->load->back('sliders/edit', $data);
    }

    public function delete($id)
    {
        $id = $this->security->xss_clean($id);
        $select = $this->sliders_md->selectDataById($id);
        $image1 = $select->image1;
        $image2 = $select->image2;
        $this->sliders_md->delete($id);
        if (file_exists($image1)) {
            unlink($image1);
        } elseif (file_exists($image2)) {
            unlink($image2);
        }
        redirect('sliders');
    }
}
