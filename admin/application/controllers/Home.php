<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dokumen');
	}

	public function index()
	{
		// $data['jml_keputusan'] 	= $this->M_suratkeputusan->total_rows();
		// $data['jml_vital'] 		= $this->M_suratvital->total_rows();
		// $data['jml_suratkeluar'] 		= $this->M_suratkeluar->total_rows();
		// $data['jml_suratkerjasama'] 		= $this->M_suratkerjasama->total_rows();
		// $data['jml_arsipcovid'] 		= $this->M_arsipcovid->total_rows();

		$data['userdata'] 		= $this->userdata;


		$data['page'] 			= "home";
		$data['judul'] 			= "Beranda";
		$data['deskripsi'] 		= "Manage Data";
		$this->template->views('home', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */