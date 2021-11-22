<?php

require './spreadsheet/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Moridata extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Moridata_m');
	}

	public function exportspreadsheet()
	{
		$moridata	= $this->Moridata_m->getData();
		$spreadsheet = new Spreadsheet();

		$spreadsheet->getProperties()->setCreator('Mori')
		->setLastModifiedBy('Morimori')
		->setTitle('Laporan Mori')
		->setSubject('Pelaporan excel')
		->setDescription('Generate laporan excel dari websote')
		->setKeywords('excel openxml php')
		->setCategory('Test result file');

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'ID Datakelor')
		->setCellValue('B1', 'ID User')
		->setCellValue('C1', 'Nama Kebun')
		->setCellValue('D1', 'Jenis Kelor')
		->setCellValue('E1', 'Tanggal Panen')
		->setCellValue('F1', 'Jumlan Panen')
		;

		$i=2; foreach($moridata as $data) {

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A'.$i, $data->id_datakelor)
		->setCellValue('B'.$i, $data->id_user)
		->setCellValue('C'.$i, $data->nama_kebun)
		->setCellValue('D'.$i, $data->jenis_kelor)
		->setCellValue('E'.$i, $data->tgl_panen)
		->setCellValue('F'.$i, $data->jumlah_panen);
		$i++;
		}

		$spreadsheet->getActiveSheet()->setTitle('Laporan Moridata '.date('d-m-Y H'));
		$spreadsheet->setActiveSheetIndex(0);

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Laporan Moridata.xlsx"');
		header('Cache-Control: max-age=0');
		header('Cache-Control: max-age=1');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
		header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header('Pragma: public'); // HTTP/1.0


		$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
		$writer->save('php://output');
		exit;
	}

	public function index()
	{
		$data['komoditas_kelor']	= $this->Moridata_m->getData();
		$data['filterData']			= $this->Moridata_m->filterData();
		$data['user']				= $this->Moridata_m->getAvatar()->result();
		$this->load->view('user/layouts/header_petani', $data);
		$this->load->view('user/layouts/sidebar');
		$this->load->view('user/moridata/index', $data);
		$this->load->view('user/layouts/footer_petani');
	}

	public function create()
	{
		$data['user']	= $this->Moridata_m->getuser()->result();
		$this->load->view('user/layouts/header_petani', $data);
		$this->load->view('user/layouts/sidebar');
		$this->load->view('user/moridata/create', $data);
		$this->load->view('user/layouts/footer_petani');
	}

	public function create_data()
	{
		$id_user		= $this->input->post('id_user');
		$nama_kebun		= $this->input->post('nama_kebun');
		$jenis_kelor	= $this->input->post('jenis_kelor');
		$tgl_panen		= $this->input->post('tgl_panen');
		$jumlah_panen	= $this->input->post('jumlah_panen');

		$data = array (
			'id_user'		=> $id_user,
			'nama_kebun'	=> $nama_kebun,
			'jenis_kelor'	=> $jenis_kelor,
			'tgl_panen'		=> $tgl_panen,
			'jumlah_panen'	=> $jumlah_panen
		);

		$this->Moridata_m->inputData($data, 'data_komoditas_kelor');
		redirect('moridata/index');
	}

	public function edit($id)
	{
		$where	= array ('id_datakelor' => $id);
		$data['komoditas_kelor']	= $this->Moridata_m->editData($where, 'data_komoditas_kelor')->result();
		$data['user']				= $this->Moridata_m->getAvatar()->result();
		$this->load->view('user/layouts/header_petani', $data);
		$this->load->view('user/layouts/sidebar');
		$this->load->view('user/moridata/edit', $data);
		$this->load->view('user/layouts/footer_petani');

	}

	public function update()
	{
		$id				= $this->input->post('id_datakelor');
		$nama_kebun		= $this->input->post('nama_kebun');
		$jenis_kelor	= $this->input->post('jenis_kelor');
		$tgl_panen		= $this->input->post('tgl_panen');
		$jumlah_panen	= $this->input->post('jumlah_panen');

		$data = array (
			'nama_kebun'	=> $nama_kebun,
			'jenis_kelor'	=> $jenis_kelor,
			'tgl_panen'		=> $tgl_panen,
			'jumlah_panen'	=> $jumlah_panen
		);

		$where	= array (
			'id_datakelor' => $id
		);

		$this->Moridata_m->updateData($where, $data, 'data_komoditas_kelor');
		redirect('moridata/index');
	}

	public function delete($id)
	{
		$where	= array('id_datakelor' => $id);
		$this->Moridata_m->deleteData($where, 'data_komoditas_kelor');
		redirect('moridata/index');
	}

	public function exportpdf(){
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdf');
		
        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Data Komoditas Kelor';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
		$data['mori']	= $this->Moridata_m->getPDF()->result();
		$html			= $this->load->view('user/moridata/mori_pdf', $data, true);
		$this->pdf->generate($html, $file_pdf, $paper, $orientation);
	}

}
