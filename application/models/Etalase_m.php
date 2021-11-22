<?php

class Etalase_m extends CI_Model {

	public function getData()
	{
		$this->db->select('etalase_produk.*, data_komoditas_kelor.jenis_kelor, data_komoditas_kelor.nama_kebun');
		$this->db->from('etalase_produk');
		$this->db->join('data_komoditas_kelor', 'data_komoditas_kelor.id_datakelor = etalase_produk.id_datakelor');
		$query 	= $this->db->get();
		return $query->result();
	}

	public function getKomoditas()
	{
		$query = $this->db->query("SELECT * FROM data_komoditas_kelor WHERE jenis_kelor = jenis_kelor");
		return $query;
	}

	public function inputData($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function editData($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function updateData($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function deleteData($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function getAvatar()
	{
		return $this->db->get('user');
	}

}
