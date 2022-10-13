<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Suratdokumen extends AUTH_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_dokumen');
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $data['userdata']         = $this->userdata;
        $data['page']             = "List Dokumen";
        $data['judul']             = "Data Dokumen";
        $data['deskripsi']         = "Kelola Dokumen";
        $data['dataJenis'] = $this->M_dokumen->select_jenis();
        $data['dataKecamatan'] = $this->M_dokumen->select_kecamatan();
        $data['modal_tambah_surat_dokumen'] = show_my_modal_lg('modals/modal_tambah_surat_dokumen', 'tambah-Suratdokumen', $data);
        $this->template->views('suratdokumen/home', $data);
    }
    public function kelurahan(){
        $id=$this->input->post('id');
        $data=$this->M_dokumen->get_kelurahan($id);
        echo json_encode($data);
    }

    public function lihat()
    {
        $data['userdata']         = $this->userdata;
        $data['page']             = "Data Surat Keluar";
        $data['judul']             = "Data Surat Keluar";
        $data['deskripsi']         = "Kelola Data Surat Keluar";

        $data['dataTahun'] = $this->M_dokumen->select_tahun();
        $data['dataJenis'] = $this->M_dokumen->select_jenis();
        $data['dataSifat'] = $this->M_dokumen->select_sifat();


        $data['modal_tambah_surat_keluar'] = show_my_modal_lg('modals/modal_tambah_surat_keluar', 'tambah-suratdokumen', $data);
        $cek = $this->uri->segment('3');
        // echo "$cek";
        $data['pencarian'] = $this->M_dokumen->pencarian($cek);
        $data['ruangnya']     = $this->M_dokumen->select_ruangnya();

        $this->template->views('suratdokumen/home', $data);
    }
    public function tampil()
    {
        $data['datasuratdokumen'] = $this->M_dokumen->select_all();

        $this->load->view('suratdokumen/list_data', $data);
    }
    public function tampildatainstansi()
    {
        $data['datainstansi'] = $this->M_dokumen->select_instansi_update();
        $this->load->view('suratdokumen/list_data_instansi', $data);
    }
    public function tampilpertahun($id)
    {
        // $id                             = trim($_POST['tahun']);
        $data['datasuratdokumen']     = $this->M_dokumen->select_all_pertahun($id);
        $data['ruangnya']     = $this->M_dokumen->select_ruangnya();
        $this->load->view('suratdokumen/list_data', $data);
    }
    public function ubah_ruang()
    {
        // $id = $_POST['id'];
        $data = $this->input->post();
        $result = $this->M_dokumen->ubah_ruang($data);
        if ($result > 0) {

            echo show_succ_msg('Informasi Keberadaan Dokumen Berhasil Diperbarui', '20px');
        } else {
            echo show_err_msg('Data Gagal Disimpan Hubungi Admin', '20px');
        }
    }
    public function tampilperjenis($id)
    {
        $data['datasuratdokumen']     = $this->M_dokumen->select_perjenis($id);
        $this->load->view('suratdokumen/list_data', $data);
    }
    function prosesTambah2()
    {
        $this->form_validation->set_rules('no_surat_dokumen', 'no belum diisi', 'trim|required');

        $data = $this->input->post();
        //$data2 = $this->input->input_stream('f',FALSE);
        //var_dump($data2);
        $jumlah_file = count($_FILES['f']['name']) - 1;
        $data['jumlah_file'] = $jumlah_file;
        //echo "jumlah file:" . $jumlah_file . "<br/>";
        $new_name = "kosong";
        for ($i = 0; $i <= $jumlah_file; $i++) {
            // for($i=0;$i<=0;$i++){
            if (!empty($_FILES['f']['name'][$i])) {
                //echo "submitted<br/>";
                //print_r($_FILES['f']);
                $foto                       = $_FILES['f']['name'][$i];
                $_FILES['file']['name']     = $_FILES['f']['name'][$i];
                $_FILES['file']['type']     = $_FILES['f']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['f']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['f']['error'][$i];
                $_FILES['file']['size']     = $_FILES['f']['size'][$i];

                // File upload configuration
                $uploadPath = 'assets/file_surat_dokumen/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '5000'; // kb
                $new_name = '-' . time() . '-' . $_FILES['f']['name'][$i];
                $config['file_name'] = $new_name;

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

                $data['nm_file_surat_dokumen'][$i] = $new_name;
                //$u = $data['nm_file_surat_keluar'][$i];
                // $o = str_replace(" ","_",$data['nm_file_surat_keluar'][$i]);

                // print_r($this->upload->display_errors());
            } else {
                echo "file kosong";
            }
        }
        if ($this->form_validation->run() == TRUE && empty($this->upload->display_errors())) {

            $result = $this->M_dokumen->insert_surat_dokumen($data);
            if ($result == TRUE) {
                $out['status'] = 'ok';
                $out['msg'] = show_succ_msg('Data  Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = 'error';
                $out['msg'] = show_err_msg('Data  Gagal ditambahkan', '20px');
            }
        } else {
            $out['status'] = 'error';
            $out['msg'] = show_err_msg('Data  Gagal ditambahkan silahkan coba lagi, error : / ' . $this->upload->display_errors(), '20px');
            // $out['msg'] = show_err_msg(validation_errors());

        }
        echo json_encode($out);
    }
    function prosesTambahUpdateInstansi()
    {
        $this->form_validation->set_rules('instansi[]', 'Instansi Surat keluar belum diisi', 'trim|required');

        $data = $this->input->post();

        if ($this->form_validation->run() == TRUE) {
            //echo "sukses";
            $result = $this->M_dokumen->insert_surat_keluar_updateinstansi($data);
            if ($result == TRUE) {
                $out['status'] = 'ok';
                $out['msg'] = show_succ_msg('Data Instansi Berhasil diubah', '20px');
            } else {
                $out['status'] = 'error';
                $out['msg'] = show_err_msg('Data Instansi keluar Gagal diubah', '20px');
            }
            echo json_encode($out);
        } else {
            echo "gagal";
        }
    }
    function prosesTambahUpdateKepada()
    {
        $this->form_validation->set_rules('nm_kepada[]', 'Kepada Surat keluar belum diisi', 'trim|required');

        $data = $this->input->post();

        if ($this->form_validation->run() == TRUE) {
            //echo "sukses";
            $result = $this->M_dokumen->insert_surat_keluar_updatekepada($data);
            if ($result == TRUE) {
                $out['status'] = 'ok';
                $out['msg'] = show_succ_msg('Data Kepada Berhasil diubah', '20px');
            } else {
                $out['status'] = 'error';
                $out['msg'] = show_err_msg('Data Kepada Gagal diubah', '20px');
            }
            echo json_encode($out);
        } else {
            echo "gagal";
        }
    }
    public function modal_laporan()
    {
        $data['page']             = "Umum";
        $data['judul']             = " umum";
        $data['deskripsi']         = "Manage Data ";
        $data['dataJenis'] = $this->M_dokumen->select_jenis();
        $data['dataKecamatan'] = $this->M_dokumen->select_kecamatan();
        $data['dataKelurahan'] = $this->M_dokumen->select_kelurahan();


        echo show_my_modal('modals/modal_laporan', 'laporan-modal', $data);
    }
    public function laporan($id, $id1, $id2)
	{
		$data['userdata'] 		= $this->userdata;
		// $id = $this->input->post('rowid');
		// $id1 = $this->input->post('rowid1');
		// $id2 = $this->input->post('rowid2');
		// $id3 = $this->input->post('rowid3');
		// $id4 = $this->input->post('rowid4');
		// $id5 = $this->input->post('rowid5');


        $data['dataJenis'] = $this->M_dokumen->select_jenis();
        $data['dataKecamatan'] = $this->M_dokumen->select_kecamatan();
        $data['dataKelurahan'] = $this->M_dokumen->select_kelurahan();

        $data['datadokumen'] = $this->M_dokumen->select_laporan($id, $id1, $id2);

		$this->load->view('suratdokumen/cetak_dokumen', $data);
	}
    function prosesTambahupdatefile()
    {

        $data = $this->input->post();
        //$data2 = $this->input->input_stream('f',FALSE);
        //var_dump($data2);
        $jumlah_file = count($_FILES['f']['name']) - 1;
        $data['jumlah_file'] = $jumlah_file;
        //echo "jumlah file:" . $jumlah_file . "<br/>";
        $new_name = "kosong";
        for ($i = 0; $i <= $jumlah_file; $i++) {
            // for($i=0;$i<=0;$i++){
            if (!empty($_FILES['f']['name'][$i])) {
                //echo "submitted<br/>";
                //print_r($_FILES['f']);
                $foto                       = $_FILES['f']['name'][$i];
                $_FILES['file']['name']     = $_FILES['f']['name'][$i];
                $_FILES['file']['type']     = $_FILES['f']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['f']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['f']['error'][$i];
                $_FILES['file']['size']     = $_FILES['f']['size'][$i];

                // File upload configuration
                $uploadPath = 'assets/file_surat_dokumen/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '16000'; // kb
                $new_name = '-' . time() . '-' . $_FILES['f']['name'][$i];
                $config['file_name'] = $new_name;

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

                $data['nm_file_surat_dokumen'][$i] = $new_name;
                //$u = $data['nm_file_surat_keluar'][$i];
                // $o = str_replace(" ","_",$data['nm_file_surat_keluar'][$i]);

                // print_r($this->upload->display_errors());
            } else {
                echo "file kosong";
            }
        }


        if (empty($this->upload->display_errors())) {
            $result = $this->M_dokumen->insert_surat_keluar_updatefile($data);
            if ($result == TRUE) {
                $out['status'] = 'ok';
                $out['msg'] = show_succ_msg('Data File  Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = 'error';
                $out['msg'] = show_err_msg('Data File keluar Gagal ditambahkan', '20px');
            }
        } else {
            $out['status'] = 'error';
            $out['msg'] = show_err_msg('file gagal ditambahkan silahkan coba lagi, error : / ' . $this->upload->display_errors(), '20px');
        }
        echo json_encode($out);
    }
    public function delete()
    {
        $id = $_POST['id'];
        $query_nama_file =  $this->M_dokumen->select_file_by_id($id);
        foreach ($query_nama_file as $query_nama_filerow) {
            if ($id !== 'kosong') {
                $path_to_file = "./assets/file_surat_dokumen/$query_nama_filerow->nm_file_surat_dokumen";
                unlink($path_to_file);
            }
        }

        $result = $this->M_dokumen->delete($id);

        if ($result == TRUE) {

            echo show_succ_msg('Data Berhasil dihapus', '20px');
        } else {
            echo show_err_msg('Data Gagal dihapus', '20px');
        }
    }
    public function deleteinstansi()
    {
        $id = $_POST['id'];
        //$id1 = $_POST['id1'];
        //$path_to_file = "./assets/file_surat_vital/$id1";

        // if ($id1 !== 'kosong') {
        //     unlink($path_to_file);
        // }

        $result = $this->M_dokumen->deleteinstansi($id);

        if ($result == TRUE) {

            $out['status'] = 'ok';
            $out['msg'] = show_succ_msg('Data instansi Berhasil dihapus', '20px');
        } else {
            //echo show_err_msg('Data Gagal dihapus', '20px');
            $out['status'] = 'error';
            $out['msg'] = show_err_msg('Data instansi gagal Berhasil dihapus', '20px');
        }
        echo json_encode($out);
    }
    public function deletefileone()
    {
        $id = $_POST['id'];
        $id1 = $_POST['id1'];
        $path_to_file = "./assets/file_surat_dokumen/$id1";

        if ($id1 !== 'kosong') {
            unlink($path_to_file);
        }

        $result = $this->M_dokumen->deletefileoneaja($id);

        if ($result == TRUE) {

            $out['status'] = 'ok';
            $out['msg'] = show_succ_msg('Data file Berhasil dihapus', '20px');
        } else {
            //echo show_err_msg('Data Gagal dihapus', '20px');
            $out['status'] = 'error';
            $out['msg'] = show_err_msg('Data file gagal Berhasil dihapus', '20px');
        }
        echo json_encode($out);
    }
    public function deletekepada()
    {
        $id = $_POST['id'];
        //$id1 = $_POST['id1'];
        //$path_to_file = "./assets/file_surat_vital/$id1";

        // if ($id1 !== 'kosong') {
        //     unlink($path_to_file);
        // }

        $result = $this->M_dokumen->deletekepada($id);

        if ($result == TRUE) {

            $out['status'] = 'ok';
            $out['msg'] = show_succ_msg('Data kepada Berhasil dihapus', '20px');
        } else {
            //echo show_err_msg('Data Gagal dihapus', '20px');
            $out['status'] = 'error';
            $out['msg'] = show_err_msg('Data kepada Berhasil dihapus', '20px');
        }
        echo json_encode($out);
    }
    public function update()
    {
        $data['userdata']               = $this->userdata;
        $id                             = trim($_POST['id']);
        $data['datasifat'] = $this->M_dokumen->select_jenis();
        $data['datafile'] = $this->M_dokumen->select_file_by_id($id);
        $data['dataKecamatan'] = $this->M_dokumen->select_kecamatan();
        $data['dataKelurahan'] = $this->M_dokumen->select_kelurahan();


        $data['datasuratdokumen']     = $this->M_dokumen->select_by_id($id);

        echo show_my_modal_lg('modals/modal_update_suratdokumen', 'update-suratdokumen', $data);
    }



    public function file()
    {
        $data['userdata']               = $this->userdata;
        $id                             = trim($_POST['id']);
        $data['dataJenis'] = $this->M_dokumen->select_jenis();
        $data['datafile'] = $this->M_dokumen->select_file_by_id($id);
        $data['datasuratdokumen']     = $this->M_dokumen->select_by_id($id);

        echo show_my_modal_lg('modals/modal_lihat_filesuratdokumen', 'lihat-suratdokumen', $data);
    }

    public function prosesupdateisi()
    {
        $this->form_validation->set_rules('id_surat_dokumen', 'id tidak ada', 'trim|required');


        $data     = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_dokumen->updateisi($data);

            if ($result > 0) {
                $out['status'] = 'ok';
                $out['msg'] = show_succ_msg('Data Dokumen Berhasil diupdate', '20px');
            } else {
                $out['status'] = 'error';
                $out['msg'] = show_succ_msg('Data Dokumen  Gagal diupdate', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }
        echo json_encode($out);
    }

    public function prosesUpdate()
    {
        $this->form_validation->set_rules('no_surat_keluar', 'nomor surat keluar blm di isi ', 'trim|required');
        $this->form_validation->set_rules('sifat_surat_keluar', 'sifat surat blm di isi ', 'trim|required');
        $this->form_validation->set_rules('jenis_surat_keluar', 'jenis surat blm di isi ', 'trim|required');
        $this->form_validation->set_rules('perihal_surat_keluar', 'perihal blm di isi ', 'trim|required');
        $this->form_validation->set_rules('tgl_surat_keluar', 'tgl surat blm di isi ', 'trim|required');

        $new_name = "kosong";
        if (!empty($_FILES['f']['name'])) {
            //echo "submitted<br/>";
            $foto                       = $_FILES['f']['name'];
            $_FILES['file']['name']     = $_FILES['f']['name'];
            $_FILES['file']['type']     = $_FILES['f']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['f']['tmp_name'];
            $_FILES['file']['error']    = $_FILES['f']['error'];
            $_FILES['file']['size']     = $_FILES['f']['size'];

            // File upload configuration
            $uploadPath = 'assets/file_surat_vital/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
            $config['max_size'] = '8000'; // kb
            $new_name = $_POST['tgl_dokumen_surat_arsip_vital'] . '-' . time() . '-' . $_FILES["f"]['name'];
            $config['file_name'] = $new_name;

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

            if ($this->input->post('ff') == 'kosong') {
                //var_dump('tidak ada file di unlink');
            } else {
                $id1 = $this->input->post('ff');
                $path_to_file = "./assets/file_surat_vital/$id1";
                unlink($path_to_file);
                //var_dump($path_to_file);
            }

            print_r($this->upload->display_errors());

            $data     = $this->input->post();
            $data['file_surat_arsip_vital'] = $new_name;

            if ($this->form_validation->run() == TRUE) {
                $result = $this->M_suratvital->update_foto($data);

                if ($result > 0) {
                    $out['status'] = 'ok';
                    $out['msg'] = show_succ_msg('Data surat vital dan file Berhasil diupdate', '20px');
                } else {
                    $out['status'] = 'error';
                    $out['msg'] = show_succ_msg('Data surat vital dan file Gagal diupdate', '20px');
                }
            } else {
                $out['status'] = 'form';
                $out['msg'] = show_err_msg(validation_errors());
            }
        } else {
            $data     = $this->input->post();
            if ($this->form_validation->run() == TRUE) {
                $result = $this->M_suratvital->update($data);

                if ($result > 0) {
                    $out['status'] = 'ok';
                    $out['msg'] = show_succ_msg('Data surat vital Berhasil diupdate', '20px');
                } else {
                    $out['status'] = 'error';
                    $out['msg'] = show_succ_msg('Data surat vital Gagal diupdate', '20px');
                }
            } else {
                $out['status'] = 'form';
                $out['msg'] = show_err_msg(validation_errors());
            }
        }


        echo json_encode($out);
    }
}
/* End of file User.php */
