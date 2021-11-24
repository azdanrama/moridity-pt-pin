<?php

class Etalase extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Etalase_m');
		$this->load->database();
	}

	public function index()
	{
		$data['etalase'] 	= $this->Etalase_m->getData();
		$data['user']		= $this->Etalase_m->getAvatar()->result();
		$this->load->view('user/layouts/header', $data);
		$this->load->view('user/layouts/sidebar');
		$this->load->view('user/etalase/index', $data);
		$this->load->view('user/layouts/footer');
	}

	public function create()
	{
		$data['data_komoditas_kelor']	= $this->Etalase_m->getKomoditas()->result();
		$data['user']					= $this->Etalase_m->getAvatar()->result();
		$this->load->view('user/layouts/header', $data);
		$this->load->view('user/layouts/sidebar');
		$this->load->view('user/etalase/create', $data);
		$this->load->view('user/layouts/footer');
	}

	public function create_data()
	{
		$id_datakelor	= $this->input->post('id_datakelor');
		$id_user		= $this->input->post('id_user');
		$stok_kelor		= $this->input->post('stok_kelor');
		$foto_kelor		= $_FILES['foto_kelor'];
		if ($foto_kelor = ''){} else {
			$config['upload_path']		= './gambar';
			$config['allowed_types']	= 'jpg|png|gif|jpeg';

			$this->load->library('upload', $config);
			if (! $this->upload->do_upload('foto_kelor')) {
				echo "upload gagal!"; die();
			} else {
				$foto_kelor = $this->upload->data('file_name');
			}
		}

		$data				= array (
			'id_datakelor'	=> $id_datakelor,
			'id_user'		=> $id_user,
			'stok_kelor'	=> $stok_kelor,
			'foto_kelor'	=> $foto_kelor
		);

		$this->Etalase_m->inputData($data, 'etalase_produk');
		redirect('Etalase/index');
	}

	public function edit($id)
	{
		$where	= array ('id' => $id);
		$data['etalase']				= $this->Etalase_m->editData($where, 'etalase_produk')->result();
		$data['data_komoditas_kelor']	= $this->Etalase_m->getKomoditas()->result();
		$data['user']					= $this->Etalase_m->getAvatar()->result();
		
		$this->load->view('user/layouts/header', $data);
		$this->load->view('user/layouts/sidebar');
		$this->load->view('user/etalase/edit', $data);
		$this->load->view('user/layouts/footer');
	}

	public function update()
	{
		$id				= $this->input->post('id');
		$nama_produk	= $this->input->post('nama_produk');
		$id_datakelor	= $this->input->post('id_datakelor');
		$id_user		= $this->input->post('id_user');
		$stok_kelor		= $this->input->post('stok_kelor');
		$foto_kelor		= $_FILES['foto_kelor'];
		if ($foto_kelor = ''){} else {
			$config['upload_path']		= './gambar';
			$config['allowed_types']	= 'jpg|png|gif|jpeg';

			$this->load->library('upload', $config);
			if (! $this->upload->do_upload('foto_kelor')) {
				echo "upload gagal!"; die();
			} else {
				$foto_kelor = $this->upload->data('file_name');
			}
		}

		$data			= array (
			'nama_produk'	=> $nama_produk,
			'id_datakelor'	=> $id_datakelor,
			'id_user'		=> $id_user,
			'stok_kelor'	=> $stok_kelor,
			'foto_kelor'	=> $foto_kelor
		);

		$where			= array (
			'id'		=> $id
		);

		$this->Etalase_m->updateData($where, $data, 'etalase_produk');
		redirect('Etalase/index');
	}

	public function delete($id_etalase)
	{
		$where	= array('id_etalase' => $id_etalase);
		$this->Etalase_m->deleteData($where, 'etalase_produk');
		redirect('Etalase/index');
	}
}
