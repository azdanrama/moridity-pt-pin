<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mapsuser extends CI_Controller {

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->view('user/layouts/header_petani', $data);
		$this->load->view('user/morimaps/morimaps_v');
		$this->load->view('user/layouts/footer_petani');
	}
}
