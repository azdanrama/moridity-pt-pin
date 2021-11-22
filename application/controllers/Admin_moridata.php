<?php

class Admin_moridata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_moridata_m');
	}

	public function index()
	{
		$data['data_komoditas_kelor_general']	= $this->Admin_moridata_m->getData();
		$this->load->view('admin/layouts/header_admin');
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/moridata/index', $data);
		$this->load->view('admin/layouts/footer_admin');
	}
}
