<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_dokumen extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jenis_dokumen');
	}

	public function index()
	{
		$data['userdata'] 	= $this->userdata;
		$data['datajenisdokumen'] 	= $this->M_jenis_dokumen->select_all();

		$data['page'] 		= "jenis dokumen";
		$data['judul'] 		= "Data jenis dokumen";
		$data['deskripsi'] 	= "Manage Data jenis dokumen";

		$data['modal_tambah_jenis_dokumen'] = show_my_modal('modals/modal_tambah_jenis_dokumen', 'tambah-jenis-dokumen', $data);

		$this->template->views('jenis_dokumen/home', $data);
	}

	public function tampil()
	{
		$data['dataJenisdokumen'] = $this->M_jenis_dokumen->select_all();
		$this->load->view('jenis_dokumen/list_data', $data);
	}

	public function prosesTambah()
	{
		$this->form_validation->set_rules('nm_jenis_dokumen', 'nama jenis belum diisi', 'trim|required');
        //$this->form_validation->set_rules('nm_jenis', 'jenis', 'trim|required');

		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_jenis_dokumen->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data jenis Dokumen Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data jenis Dokumen Gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function update()
	{
		$data['userdata'] 	= $this->userdata;

		$id 				= trim($_POST['id']);
		$data['datajenisdokumen'] 	= $this->M_jenis_dokumen->select_by_id($id);

		echo show_my_modal('modals/modal_update_jenis_dokumen', 'update-jenis-dokumen', $data);
	}

	public function prosesUpdate()
	{
		$this->form_validation->set_rules('nm_jenis_dokumen', 'jenis belum diisi', 'trim|required');

		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_jenis_dokumen->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data jenis Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data jenis Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete()
	{
		$id = $_POST['id'];
		$result = $this->M_jenis_dokumen->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data jenis dokumen Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data jenis dokumen Gagal dihapus', '20px');
		}
	}

	public function detail()
	{
		$data['userdata'] 	= $this->userdata;

		$id 				= trim($_POST['id']);
		$data['jenis'] = $this->M_jenis->select_by_id($id);
		$data['jumlahjenis'] = $this->M_jenis->total_rows();
		$data['datajenis'] = $this->M_jenis->select_by_jenis($id);

		echo show_my_modal('modals/modal_detail_jenis', 'detail-jenis', $data, 'lg');
	}

	public function export()
	{
		error_reporting(E_ALL);

		include_once './assets/phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();

		$data = $this->M_jenis->select_all();

		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);

		$objPHPExcel->getActiveSheet()->SetCellValue('A1', "ID");
		$objPHPExcel->getActiveSheet()->SetCellValue('B1', "Nama jenis");

		$rowCount = 2;
		foreach ($data as $value) {
			$objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $value->id);
			$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $value->nama);
			$rowCount++;
		}

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$objWriter->save('./assets/excel/Data jenis.xlsx');

		$this->load->helper('download');
		force_download('./assets/excel/Data jenis.xlsx', NULL);
	}

	public function import()
	{
		$this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {
			$this->session->set_flashdata('msg', 'File harus diisi');
		} else {
			$config['upload_path'] = './assets/excel/';
			$config['allowed_types'] = 'xls|xlsx';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('excel')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = $this->upload->data();

				error_reporting(E_ALL);
				date_default_timezone_set('Asia/Jakarta');

				include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

				$inputFileName = './assets/excel/' . $data['file_name'];
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

				$index = 0;
				foreach ($sheetData as $key => $value) {
					if ($key != 1) {
						$check = $this->M_jenis->check_nama($value['B']);

						if ($check != 1) {
							$resultData[$index]['nama'] = ucwords($value['B']);
						}
					}
					$index++;
				}

				unlink('./assets/excel/' . $data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_jenis->insert_batch($resultData);
					if ($result > 0) {
						$this->session->set_flashdata('msg', show_succ_msg('Data jenis Berhasil diimport ke database'));
						redirect('jenis');
					}
				} else {
					$this->session->set_flashdata('msg', show_msg('Data jenis Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('jenis');
				}
			}
		}
	}
}

/* End of file jenis.php */
/* Location: ./application/controllers/jenis.php */
