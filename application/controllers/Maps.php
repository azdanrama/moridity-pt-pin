<?php

class Maps extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$site = [
			'title' => 'Maps | MoriDity'
		];

		$this->load->view('layouts/top', $site);
		$this->load->view('frontend/maps');
		$this->load->view('layouts/bottom');
	}
}
