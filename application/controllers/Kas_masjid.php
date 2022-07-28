<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kas_masjid extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Kasmasjid', 'mmasjid');
	}

	public function index()
	{
		$data['pemasukan'] = $this->mmasjid->getPemasukan()->row_array();
		$data['kasmasjid'] = $this->mmasjid->getAllKasMasuk("Masuk")->result_array();
		$this->load->view('template/header');
		$this->load->view('kas_masjid/masuk/masuklist', $data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$this->load->view('template/header');
		$this->load->view('kas_masjid/masuk/masukcreate');
		$this->load->view('template/footer');
	}

	public function create_action()
	{
		$data = [
			'tgl_kas_masjid' => $this->input->post('tgl_kas_masjid'),
			'uraian_kas_masjid' => $this->input->post('uraian'),
			'masuk_kas_masjid' => $this->input->post('jumlah'),
			'keluar_kas_masjid' => 0,
			'jenis_kas_masjid' => "Masuk"
		];

		$this->mmasjid->addKasMasuk($data);
		redirect('kas_masjid');
	}

	public function hapuskas($id)
	{
		$this->db->where('id_kas_masjid', $id);
		$this->db->delete('kas_masjid');
		redirect('kas_masjid');
	}

	public function kaskeluar()
	{
		$data['pengeluaran'] = $this->mmasjid->getPengeluaran()->row_array();
		$data['kaskeluar'] = $this->mmasjid->getAllKasMasuk("Keluar")->result_array();
		$this->load->view('template/header');
		$this->load->view('kas_masjid/keluar/keluarlist', $data);
		$this->load->view('template/footer');
	}

	public function createkeluar()
	{
		$this->load->view('template/header');
		$this->load->view('kas_masjid/keluar/keluarcreate');
		$this->load->view('template/footer');
	}

	public function create_action_keluar()
	{
		$data = [
			'tgl_kas_masjid' => $this->input->post('tgl_kas_masjid'),
			'uraian_kas_masjid' => $this->input->post('uraian'),
			'masuk_kas_masjid' => 0,
			'keluar_kas_masjid' => $this->input->post('jumlah'),
			'jenis_kas_masjid' => "Keluar"
		];

		$this->mmasjid->addKasMasuk($data);
		redirect('kas_masjid/kaskeluar');
	}

	public function rekap()
	{
		$data['rekap'] = $this->mmasjid->getAllRekap()->result_array();
		$data['pemasukan'] = $this->mmasjid->getPemasukan()->row_array();
		$data['pengeluaran'] = $this->mmasjid->getPengeluaran()->row_array();
		$this->load->view('template/header');
		$this->load->view('kas_masjid/rekap/rekaplist', $data);
		$this->load->view('template/footer');
	}

}

/* End of file Kas_masjid.php */
/* Location: ./application/controllers/Kas_masjid.php */