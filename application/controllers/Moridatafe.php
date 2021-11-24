<?php

class Moridatafe extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_moridata_m');
	}

	public function index()
	{
		$site = [
			'title' => 'MoriData & MoriGraph | MoriDity'
		];

		$data['user'] = $this->Admin_moridata_m->getDataUser();

		$this->load->view('layouts/top', $site);
		$this->load->view('frontend/moridata', $data);
		$this->load->view('layouts/bottom');
	}
}
