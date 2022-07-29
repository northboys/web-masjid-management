<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_login', 'mlogin');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/login');
		} else {
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$check = $this->mlogin->ceklogin($username, $password)->num_rows();

			if ($check > 0) {
				
				$get = $this->mlogin->ceklogin($username, $password)->row_array();

				$array = array(
						'nama_user' => $get['username'],
						'username' => $get['username'],
						'level' => $get['level'],
						'id_user' => $get['id_user']
					);
					
				$this->session->set_userdata($array);
				redirect('home');

			} else {
				echo "username/password tidak ditemukan";
			}

		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nama_user');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('id_user');
		redirect('login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */