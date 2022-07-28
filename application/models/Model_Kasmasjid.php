<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Kasmasjid extends CI_Model {

	public function getAllKasMasuk($jenis)
	{
		return $this->db->query("SELECT *, format(masuk_kas_masjid,0) as masukkas, format(keluar_kas_masjid,0) as keluarkas FROM kas_masjid where jenis_kas_masjid = '$jenis'");
	}

	public function addKasMasuk($data)	
	{
		$this->db->insert('kas_masjid', $data);
	}

	public function getPemasukan()
	{
		return $this->db->query("SELECT *, format(SUM(masuk_kas_masjid),0) as totalMasuk, SUM(masuk_kas_masjid) as totalMasukNorp from kas_masjid where jenis_kas_masjid='Masuk'");
	}

	public function getPengeluaran()
	{
		return $this->db->query("SELECT*, format(SUM(keluar_kas_masjid),0) as totalKeluar, SUM(keluar_kas_masjid) as totalKeluarNoRp from kas_masjid where jenis_kas_masjid='Keluar'");
	}

	public function getAllRekap()
	{
		return $this->db->query("SELECT *, format(masuk_kas_masjid,0) as masukRp, format(keluar_kas_masjid,0) as keluarRp from kas_masjid");
	}

}

/* End of file Model_Kasmasjid.php */
/* Location: ./application/models/Model_Kasmasjid.php */