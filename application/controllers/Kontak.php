<?php

class Kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$site = [
			'title' => 'Kontak | MoriDity'
		];

		$this->load->view('layouts/top', $site);
		$this->load->view('frontend/kontak');
		$this->load->view('layouts/bottom');
	}
}
