<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function ceklogin($username, $password)
	{
		return $this->db->get_where('data_user', ['username' => $username, 'password' => $password]);
	}

}

/* End of file Model_login.php */
/* Location: ./application/models/Model_login.php */