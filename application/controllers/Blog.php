<?php

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$site = [
			'title' => 'Blog | MoriDity'
		];

		$this->load->view('layouts/top', $site);
		$this->load->view('frontend/blog');
		$this->load->view('layouts/bottom');
	}
}
