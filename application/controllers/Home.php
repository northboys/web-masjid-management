<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Kasmasjid', 'mmasjid');
	}

	public function index()
	{
		$data['pemasukan'] = $this->mmasjid->getPemasukan()->row_array();
		$data['pengeluaran'] = $this->mmasjid->getPengeluaran()->row_array();
		$data['data_user'] = $this->db->get('data_user')->num_rows();

		$this->load->view('template/header');
		$this->load->view('home/home', $data);
		$this->load->view('template/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */