<?php

class Admin_moridata_m extends CI_Model
{
	public function getData()
	{
		$this->db->select('data_komoditas_kelor_general.*, data_komoditas_kelor.nama_kebun, data_komoditas_kelor.jenis_kelor, data_komoditas_kelor.tgl_panen, data_komoditas_kelor.jumlah_panen, user.nama');
		$this->db->from('data_komoditas_kelor_general');
		$this->db->join('data_komoditas_kelor', 'data_komoditas_kelor.id_datakelor = data_komoditas_kelor_general.id_datakelor');
		$this->db->join('user', 'user.id = data_komoditas_kelor_general.id_user');
		$query = $this->db->get();
		return $query->result();
	}
}
