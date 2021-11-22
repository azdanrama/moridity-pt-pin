<?php

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$site = [
			'title' => 'MoriDity'
		];
		$this->load->view('layouts/top', $site);
		$this->load->view('frontend/index');
		$this->load->view('layouts/bottom');
	}
}
