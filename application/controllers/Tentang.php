<?php

class Tentang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$site = [
			'title' => 'Tentang | MoriDity'
		];

		$this->load->view('layouts/top', $site);
		$this->load->view('frontend/tentang');
		$this->load->view('layouts/bottom');
	}
}
