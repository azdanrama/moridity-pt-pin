<?php

class Moridata_m extends CI_Model {

	public function getData()
	{
		$this->db->select('data_komoditas_kelor.*, user.nama');
		$this->db->from('data_komoditas_kelor');
		$this->db->join('user', 'user.id = data_komoditas_kelor.id_user');
		$query	= $this->db->get();
		return $query->result();
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

	public function getUser()
	{
		$query = $this->db->query("SELECT * FROM user WHERE level = 'user' ");
		return $query;
	}

	public function filterData()
	{
		$query = $this->db->query("SELECT * FROM user WHERE id = id ");
		return $query;
	}

	public function getAvatar()
	{
		return $this->db->get('user');
	}

	public function getPDF(){
		return $this->db->get('data_komoditas_kelor');
	}
}
