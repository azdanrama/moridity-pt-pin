<?php

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Etalase_m');
	}

	public function index()
	{
		$site = [
			'title' => 'MoriDity'
		];

		$data['etalase'] = $this->Etalase_m->getData();

		$this->load->view('layouts/top', $site);
		$this->load->view('frontend/index', $data);
		$this->load->view('layouts/bottom');
	}
}
