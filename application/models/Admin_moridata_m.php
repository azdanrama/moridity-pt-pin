<?php

class Admin_moridata_m extends CI_Model
{
	public function getDataUser()
	{
		$query = $this->db->query("SELECT nama, nama_kebun,jenis_kelor, tgl_panen, jumlah_panen FROM user, data_komoditas_kelor");
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

	public function getAvatar()
	{
		return $this->db->get('user');
	}

	public function getPDF(){
		return $this->db->get('data_komoditas_kelor');
	}
}
