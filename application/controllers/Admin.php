<?php

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
	}

	public function index()
	{
		$data['user']	= $this->Admin_m->getData()->result();
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/index');
		$this->load->view('admin/layouts/footer');
	}

	public function profile()
	{
		$data['user']	= $this->Admin_m->getData()->result();
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/profile/index', $data);
		$this->load->view('admin/layouts/footer');
	}


	public function editprofileadmin($id)
	{
		$where			= array ('id' => $id);
		$data['user']	= $this->Admin_m->editprofileadmin($where, 'user')->result();
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/profile/edit', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function updateprofileadmin()
	{
		$id				= $this->input->post('id');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		$nama			= $this->input->post('nama');
		$email			= $this->input->post('email');
		$nohp			= $this->input->post('nohp');
		$alamat			= $this->input->post('alamat');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$telepon		= $this->input->post('telepon');
		$avatar			= $_FILES['avatar'];
		if ($avatar = ''){} else {
			$config['upload_path']		= './gambar/avatar/';
			$config['allowed_types']	= 'jpg|png|gif|jpeg';

			$this->load->library('upload', $config);
			if (! $this->upload->do_upload('avatar')) {
				echo "upload gagal!"; die();
			} else {
				$avatar = $this->upload->data('file_name');
			}
		}

		$data			= array (
			'username'		=> $username,
			'password'		=> $password,
			'nama'			=> $nama,
			'email'			=> $email,
			'nohp'			=> $nohp,
			'alamat'		=> $alamat,
			'jenis_kelamin'	=> $jenis_kelamin,
			'tgl_lahir'		=> $tgl_lahir,
			'telepon'		=> $telepon,
			'avatar'		=> $avatar
		);

		$where			= array (
			'id'			=> $id
		);

		$this->Admin_m->updateprofileadmin($where, $data, '');
		redirect('Admin/profile');
	}
}
