<?php

class Auth_m extends CI_Model {

	public function checkUser($username)
	{
		$query	= $this->db->query("SELECT * FROM user WHERE username = '$username'");

		if ($query->num_rows() == 1) 
		{
			return $query->result();
		} else 
		{
			return false;
		}
	}

	public function checkLogin($username, $password)
	{
		$query	= $this->db->query("SELECT * FROM user WHERE username = '$username' and password = '$password' ");

		if ($query->num_rows() == 1) 
		{
			return $query->result();
		} else 
		{
			return false;
		}
	}
}
