<?php

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_m');
	}

	public function index()
	{
		$data['user'] = $this->Profile_m->getData()->result();
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/profile/index', $data);
	}

	public function edit($id)
	{
		$where	= array ('id' => $id);
		$data['user']	= $this->Profile_m->editData($where, 'user')->result();
		
		$this->load->view('admin/layouts/header_admin');
		$this->load->view('admin/profile/edit');
		$this->load->view('admin/layouts/footer_admin');
	}
}
