<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends AUTH_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		//$this->load->model('M_pegawai');
		$this->load->helper(array('form', 'url'));

	}
	public function index()
	{
		$data['userdata'] 		= $this->userdata;
		$data['page'] 			= "Data User";
		$data['judul'] 			= "Data User";
		$data['deskripsi'] 		= "Manage Data User";
		$data['modal_tambah_user'] = show_my_modal('modals/modal_tambah_user', 'tambah-user', $data);
		$this->template->views('user/home', $data);
	}
	public function delete()
    {
        $id = $_POST['id'];

        $result = $this->M_user->delete($id);

        if ($result == TRUE) {

            echo show_succ_msg('Data Berhasil dihapus', '20px');
        } else {
            echo show_err_msg('Data Gagal dihapus', '20px');
        }
    }
	public function tampil()
	{
		$data['dataUser'] = $this->M_user->select_all();
		$this->load->view('user/list_data', $data);
	}
	public function prosesTambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');

		//if(empty($this->input->post('fupload'))){
		$config['upload_path'] = 'assets/foto_user/';
		$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
		$config['max_size'] = '10000'; // kb
		$this->load->library('upload', $config);
		$this->upload->do_upload('f');
		$hasil = $this->upload->data();
		var_dump($hasil);
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE && $hasil['file_name'] !== '') {

			$result = $this->M_user->insert_user_foto($data);

			if ($result > 0) {
				//var_dump($hasil);
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data User Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data User Gagal ditambahkan', '20px');
			}
		} elseif($this->form_validation->run() == TRUE && $hasil['file_name'] == ''){

			$result = $this->M_user->insert_user($data);

			if ($result > 0) {
				//var_dump($hasil);

				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data User Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data User Gagal ditambahkan', '20px');
			}

		}
		else{
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
		
	}
	function prosesTambah2()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$foto = "default.jpg";
		if (!empty($_FILES['f']['name'])) {
			//echo "submitted<br/>";
				$foto						= $_FILES['f']['name'];
				$_FILES['file']['name']     = $_FILES['f']['name'];
				$_FILES['file']['type']     = $_FILES['f']['type'];
				$_FILES['file']['tmp_name'] = $_FILES['f']['tmp_name'];
				$_FILES['file']['error']    = $_FILES['f']['error'];
				$_FILES['file']['size']     = $_FILES['f']['size'];

				// File upload configuration
				$uploadPath = 'assets/foto_user/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
				$config['max_size'] = '10000000'; // kb

				// Load and initialize upload library
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				// Upload file to server
				if ($this->upload->do_upload('file')) {
					// Uploaded file data
					$fileData = $this->upload->data();
					$uploadData['file_name'] = $fileData['file_name'];
					$uploadData['uploaded_on'] = date("Y-m-d H:i:s");
				}
				print_r($this->upload->display_errors());

			// if (!empty($uploadData)) {
			// 	// Insert files data into the database
			// 	//$insert = $this->file->insert($uploadData);
			// 	//$uploadfoto = 1;
			// 	// Upload status message
			// 	//$out['status'] = 'ok';
			// 	//$out['msg'] = show_succ_msg('Files uploaded successfully.', '20px');
			// 	// $statusMsg = 'Files uploaded successfully.';
			// 	// $this->session->set_flashdata('statusMsg',$statusMsg);
			// } else {
			// 	//$uploadfoto = 0;
			// 	//$out['status'] = 'error';
			// 	//$out['msg'] = show_err_msg('Files gagal diupload.', '20px');
			// }
			//echo json_encode($out);
			//return show_my_modal('modals/modal_upload_penunjang_rajal', '', $data, '');
		}
		$data = $this->input->post();
		//$arrfoto = array("foto"=>$foto);
		//array_push($data,$arrfoto);
		$data['foto'] = $foto;
		// echo json_encode($data);
		if ($this->form_validation->run() == TRUE) {

			$result = $this->M_user->insert_user_foto($data);
			if ($result == TRUE) {
				$out['status'] = 'ok';
				$out['msg'] = show_succ_msg('Data User Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = 'error';
				$out['msg'] = show_err_msg('Data User Gagal ditambahkan', '20px');
			}
			echo json_encode($out);
		}

	}
}
/* End of file User.php */
