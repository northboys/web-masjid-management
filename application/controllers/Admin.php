<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');        
	    $this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('admin/admin_list');
        $this->load->view('template/footer');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Admin_model->json();
    }

    public function read($id) 
    {
        $row = $this->Admin_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_admin' => $row->id_admin,
		'nama_admin' => $row->nama_admin,
		'username_admin' => $row->username_admin,
		'password_admin' => $row->password_admin,
		'level_admin' => $row->level_admin,
	    );
            $this->load->view('admin/admin_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('admin/create_action'),
	    'id_admin' => set_value('id_admin'),
	    'nama_admin' => set_value('nama_admin'),
	    'username_admin' => set_value('username_admin'),
	    'password_admin' => set_value('password_admin'),
	    'level_admin' => set_value('level_admin'),
	);
        $this->load->view('template/header');
        $this->load->view('admin/admin_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_admin' => $this->input->post('nama_admin',TRUE),
		'username_admin' => $this->input->post('username_admin',TRUE),
		'password_admin' => $this->input->post('password_admin',TRUE),
		'level_admin' => $this->input->post('level_admin',TRUE),
	    );

            $this->Admin_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Admin_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admin/update_action'),
		'id_admin' => set_value('id_admin', $row->id_admin),
		'nama_admin' => set_value('nama_admin', $row->nama_admin),
		'username_admin' => set_value('username_admin', $row->username_admin),
		'password_admin' => set_value('password_admin', $row->password_admin),
		'level_admin' => set_value('level_admin', $row->level_admin),
	    );
            $this->load->view('template/header');
            $this->load->view('admin/admin_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_admin', TRUE));
        } else {
            $data = array(
		'nama_admin' => $this->input->post('nama_admin',TRUE),
		'username_admin' => $this->input->post('username_admin',TRUE),
		'password_admin' => $this->input->post('password_admin',TRUE),
		'level_admin' => $this->input->post('level_admin',TRUE),
	    );

            $this->Admin_model->update($this->input->post('id_admin', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Admin_model->get_by_id($id);

        if ($row) {
            $this->Admin_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_admin', 'nama admin', 'trim|required');
	$this->form_validation->set_rules('username_admin', 'username admin', 'trim|required');
	$this->form_validation->set_rules('password_admin', 'password admin', 'trim|required');
	$this->form_validation->set_rules('level_admin', 'level admin', 'trim|required');

	$this->form_validation->set_rules('id_admin', 'id_admin', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-07-23 05:41:37 */
/* http://harviacode.com */