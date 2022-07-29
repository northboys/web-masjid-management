<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_user_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    if (empty($this->session->userdata('id_user'))) {
      redirect('login');
    }
    }

    public function index()
    {
        $data['judul'] = "Data Akses";

        $this->load->view('template/header', $data);
        $this->load->view('data_user/data_user_list');
        $this->load->view('template/footer');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Data_user_model->json();
    }

    public function read($id) 
    {
        $row = $this->Data_user_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_user' => $row->id_user,
		'nama_user' => $row->nama_user,
		'username' => $row->username,
		'password' => $row->password,
		'level' => $row->level,
	    );
            $this->load->view('data_user/data_user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_user'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_user/create_action'),
	    'id_user' => set_value('id_user'),
	    'nama_user' => set_value('nama_user'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'level' => set_value('level'),
	);
        $data['judul'] = "Tambah Akses";
        $this->load->view('template/header', $data);
        $this->load->view('data_user/data_user_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_user' => $this->input->post('nama_user',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'level' => $this->input->post('level',TRUE),
	    );

            $this->Data_user_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_user'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_user_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_user/update_action'),
		'id_user' => set_value('id_user', $row->id_user),
		'nama_user' => set_value('nama_user', $row->nama_user),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'level' => set_value('level', $row->level),
	    );
            $data['judul'] = "Update Akses";
            $this->load->view('template/header', $data);
            $this->load->view('data_user/data_user_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_user'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user', TRUE));
        } else {
            $data = array(
		'nama_user' => $this->input->post('nama_user',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'level' => $this->input->post('level',TRUE),
	    );

            $this->Data_user_model->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_user'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_user_model->get_by_id($id);

        if ($row) {
            $this->Data_user_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_user'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_user', 'nama user', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('level', 'level', 'trim|required');

	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "data_user.xls";
        $judul = "data_user";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama User");
	xlsWriteLabel($tablehead, $kolomhead++, "Username");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Level");

	foreach ($this->Data_user_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_user);
	    xlsWriteLabel($tablebody, $kolombody++, $data->username);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteNumber($tablebody, $kolombody++, $data->level);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Data_user.php */
/* Location: ./application/controllers/Data_user.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-06-22 06:55:34 */
/* http://harviacode.com */