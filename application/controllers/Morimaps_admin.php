<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Morimaps_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Morimaps_admin_m');
	}

	public function index()
	{
		$data['user']				= $this->Morimaps_admin_m->getAvatar()->result();
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/morimaps/index');
		$this->load->view('admin/layouts/footer');
	}

	public function input()
	{
		$this->form_validation->set_rules('longitude','Longitude', 'required',array(
			'required' => '$s Longitude Harus Diisi !'
		));

		$this->form_validation->set_rules('latitude','Latitude', 'required',array(
			'required' => '$s Latitude Harus Diisi !'
		));

		$this->form_validation->set_rules('alamat','Alamat', 'required',array(
			'required' => '$s Alamat Harus Diisi !'
		));

		$this->form_validation->set_rules('nama_kebun','Nama Kebun', 'required',array(
			'required' => '$s Nama Kebun Harus Diisi !'
		));

		if ($this->form_validation->run() == FALSE){
			$data['user']				= $this->Morimaps_admin_m->getAvatar()->result();
			$this->load->view('admin/layouts/header', $data);
			$this->load->view('admin/layouts/sidebar');
			$this->load->view('admin/morimaps/index');
			$this->load->view('admin/layouts/footer');
		} else{
			$data = array(
				'nama_kebun'=> $this->input->post('nama_kebun'),
				'alamat'    => $this->input->post('alamat'),
				'longitude' => $this->input->post('longitude'),
				'latitude'  => $this->input->post('latitude')
			);
			$this->Morimaps_admin_m->create($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
			redirect('Morimaps_admin/index');
		}
		
	}


	public function edit($id)
	{
		$data['user']				= $this->Morimaps_admin_m->getAvatar()->result();
		$this->admin_login->cek_login();
		$this->form_validation->set_rules('longitude','Longitude', 'required',array(
			'required' => '$s Longitude Harus Diisi !'
		));

		$this->form_validation->set_rules('latitude','Latitude', 'required',array(
			'required' => '$s Latitude Harus Diisi !'
		));

		$this->form_validation->set_rules('alamat','Alamat', 'required',array(
			'required' => '$s Alamat Harus Diisi !'
		));

		$this->form_validation->set_rules('nama_kebun','Nama Kebun', 'required',array(
			'required' => '$s Nama Kebun Harus Diisi !'
		));


		if ($this->form_validation->run() == TRUE) {
			$data['user']				= $this->Morimaps_admin_m->getAvatar()->result();
			$this->load->view('admin/layouts/header', $data);
			$this->load->view('admin/layouts/sidebar');
			$this->load->view('admin/morimaps/index');
			$this->load->view('admin/layouts/footer');
		} else{
			$data = array(
				'nama_kebun'=> $this->input->post('nama_kebun'),
				'alamat'    => $this->input->post('alamat'),
				'longitude' => $this->input->post('longitude'),
				'latitude'  => $this->input->post('latitude')
			);
			$this->Morimaps_admin_m->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
			redirect('Morimaps_admin');
		}

		$data['user']				= $this->Morimaps_admin_m->getAvatar()->result();
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/morimaps/index');
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/layouts/footer');
	}

	public function hapus($id)
	{
		$this->user_login->cek_login();
		$data = array('id' => $id);
		$this->Morimaps_admin_m->hapus($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!!');
		redirect('Morimaps_admin');
	}
	
}
