<?php
defined('BASEPATH') or exit('No direct script access allowed');
class TestReski extends AUTH_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_test');
    }
    public function index()
    {
        $data['id_surat_keluar'] = '';
        $data['no_surat_keluar'] = '1';
        $data['sifat_surat_keluar'] = '2';
        $data['jenis_surat_keluar'] = '3';
        $data['instansi_tujuan_keluar'] = '4';
        $data['kepada_surat_keluar'] = '5';
        $data['perihal_surat_keluar'] = '6';
        $data['tgl_surat_keluar'] = '2019-09-11';
        $data['file_surat_keluar'] = '7';
        echo $this->M_test->add($data);
    }
}
