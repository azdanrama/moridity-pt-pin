<?php

class Blog_single extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$site = [
			'title' => 'Single Blog | MoriDity'
		];

		$this->load->view('layouts/top', $site);
		$this->load->view('frontend/blog_single');
		$this->load->view('layouts/bottom');
	}
}
