<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Morimaps_user extends CI_Controller {

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->view('user/layouts/header', $data);
		$this->load->view('user/morimaps/v_morimaps_user');
		$this->load->view('user/layouts/sidebar');
		$this->load->view('user/layouts/footer');
	}
}
