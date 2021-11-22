<?php

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
	}

	public function index()
	{
		$this->load->view('auth/auth_v');
	}

	public function check()
	{
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		
		$checkUser	= $this->Auth_m->checkUser($username);
		if ($checkUser) {
			
			$checkLogin	= $this->Auth_m->checkLogin($username, $password);
			if ($checkLogin) {

				foreach ($checkLogin as $row)

				$this->session->set_userdata('id', $row->id);
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('nama', $row->nama);
				$this->session->set_userdata('email', $row->email);
				$this->session->set_userdata('nohp', $row->nohp);
				$this->session->set_userdata('alamat', $row->alamat);
				$this->session->set_userdata('level', $row->level);

				if ($this->session->userdata('level') == 'admin') 
				{
					redirect('Admin', 'refresh');
				} else {
					redirect('User', 'refresh');
				}


			} else {
				echo "<script>alert('Maaf, username atau password anda salah !');</script>";
				redirect('Auth', 'refresh');
			}

		} else {
				echo "<script>alert('Maaf, username dan password anda belum terdaftar !');</script>";
				redirect('Auth', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth', 'refresh');
	}
}
