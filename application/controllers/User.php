<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan join kategori on kategori.id_kategori = kegiatan.id_kategori")->result_array();
		$this->load->view('user/user', $data);
	}

	public function detail($id)
	{
		$data['detail'] = $this->db->query("SELECT * FROM kegiatan join kategori on kategori.id_kategori = kegiatan.id_kategori where kegiatan.id_kegiatan='$id'")->row_array();
		$data['kegiatan'] = $this->db->get('kegiatan')->result_array();
		$this->load->view('user/detail', $data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */