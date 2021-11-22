<?php

class Profile_m extends CI_Model {

	public function getData()
	{
		return $this->db->get('user');
	}
}
