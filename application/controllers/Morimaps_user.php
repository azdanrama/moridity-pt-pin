<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Morimaps_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Morimaps_user_m');
	}

	public function index()
	{
		$data['user']				= $this->Morimaps_user_m->getAvatar()->result();
		$this->load->view('user/layouts/header', $data);
		$this->load->view('user/layouts/sidebar');
		$this->load->view('user/morimaps/v_input_datamap');
		$this->load->view('user/layouts/footer');
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
			$data['user']				= $this->Morimaps_user_m->getAvatar()->result();
			$this->load->view('user/layouts/header', $data);
			$this->load->view('user/layouts/sidebar');
			$this->load->view('user/morimaps/v_input_datamap');
			$this->load->view('user/layouts/footer');
		} else{
			$data = array(
				'nama_kebun'=> $this->input->post('nama_kebun'),
				'alamat'    => $this->input->post('alamat'),
				'longitude' => $this->input->post('longitude'),
				'latitude'  => $this->input->post('latitude')
			);
			$this->Morimaps_user_m->create($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
			redirect('Morimaps_user/v_input_datamap');
		}
		
	}


	public function edit($id)
	{
		$data['user']				= $this->Morimaps_user_m->getAvatar()->result();
		$this->user_login->cek_login();
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
			$data['user']				= $this->Morimaps_user_m->getAvatar()->result();
			$this->load->view('user/layouts/header', $data);
			$this->load->view('user/layouts/sidebar');
			$this->load->view('user/morimaps/v_input_datamap');
			$this->load->view('user/layouts/footer');
		} else{
			$data = array(
				'nama_kebun'=> $this->input->post('nama_kebun'),
				'alamat'    => $this->input->post('alamat'),
				'longitude' => $this->input->post('longitude'),
				'latitude'  => $this->input->post('latitude')
			);
			$this->Morimaps_user_m->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
			redirect('Morimaps_user');
		}

		$data['user']				= $this->Morimaps_user_m->getAvatar()->result();
		$this->load->view('user/layouts/header', $data);
		$this->load->view('user/morimaps/v_input_datamap');
		$this->load->view('user/layouts/sidebar');
		$this->load->view('user/layouts/footer');
	}

	public function hapus($id)
	{
		$this->user_login->cek_login();
		$data = array('id' => $id);
		$this->Morimaps_user_m->hapus($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!!');
		redirect('Morimaps_user');
	}
	
}
