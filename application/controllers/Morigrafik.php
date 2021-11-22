<?php

class Morigrafik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$site = [
			'title' => 'Morigrafik | MoriDity'
		];

		$this->load->view('layouts/top', $site);
		$this->load->view('frontend/morigrafik');
		$this->load->view('layouts/bottom');
	}
}
