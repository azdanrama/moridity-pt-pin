<?php

class User_m extends CI_Model {

	public function getData()
	{
		return $this->db->get('user');
	}

	public function editProfile($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function updateData($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
