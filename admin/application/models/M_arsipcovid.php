<?php

defined('BASEPATH') or exit('No direct script access allowed');



class M_arsipcovid extends CI_Model

{

	public function select_all_surat_keputusan()

	{

		$sql = "SELECT * FROM surat_keputusan order by id_surat_keputusan desc";



		$data = $this->db->query($sql);



		return $data->result();
	}
	public function ubah_ruang($data)

	{

		// $sql = "udpate arsip_covid set WHERE id_arsip_covid='" . $id . "'";

		$sql = "UPDATE arsip_covid SET id_ruang='" . $data['id_ruang'] . "' WHERE id_arsip_covid='" . $data['id_arsip_covid']  . "'";


		$this->db->query($sql);



		return $this->db->affected_rows();
	}
	public function select_ruangnya()

	{

		$sql = " SELECT * FROM tb_ruang  where aktif='Y' order by nama_ruang desc ";



		$data = $this->db->query($sql);



		return $data->result();
	}


	public function select_all()

	{

		$sql = " select * from arsip_covid a join jenis b on a.jenis_surat=b.id_jenis order by a.id_arsip_covid desc";



		$data = $this->db->query($sql);



		return $data->result();
	}

	public function pencarian($cek)

	{

		$sql = " select * from arsip_covid a join jenis b on a.jenis_surat=b.id_jenis where a.id_arsip_covid='" . $cek . "'order by a.id_arsip_covid desc";



		$data = $this->db->query($sql);



		return $data->result();
	}

	public function select_all_pertahun($id)

	{

		//$sql = " SELECT * FROM surat_keputusan where tgl_surat_keputusan like '%{$id}%' order by id_surat_keputusan desc ";
		$sql = " select * from arsip_covid a join jenis b on a.jenis_surat=b.id_jenis where a.tgl_dokumen_covid like '%{$id}%' order by a.id_arsip_covid desc";



		$data = $this->db->query($sql);



		return $data->result();
	}



	public function select_tahun()

	{

		$sql = " SELECT * FROM tahun order by tahun desc ";



		$data = $this->db->query($sql);



		return $data->result();
	}



	public function select_by_id($id)

	{

		//$sql = "SELECT * from surat_keputusan where id_surat_keputusan = '{$id}'";

		$sql = " SELECT * from arsip_covid a join jenis b on a.jenis_surat=b.id_jenis where a.id_arsip_covid = '{$id}' order by a.id_arsip_covid desc";

		//echo $sql;

		$data = $this->db->query($sql);



		return $data->row();
	}



	// public function select_by_posisi($id)

	// {

	// 	$sql = "SELECT COUNT(*) AS jml FROM surat_keputusan WHERE id_posisi = {$id}";



	// 	$data = $this->db->query($sql);



	// 	return $data->row();

	// }



	// public function select_by_kota($id)

	// {

	// 	$sql = "SELECT COUNT(*) AS jml FROM surat_keputusan WHERE id_kota = {$id}";



	// 	$data = $this->db->query($sql);



	// 	return $data->row();

	// }



	public function update($data)

	{

		$exp = explode('-', $data['tgl_dokumen_covid']);

		if (count($exp) == 3) {

			$date = $exp[2] . '-' . $exp[1] . '-' . $exp[0];
		}
		$illegalChar = array("'", "?", "!", ":", ";", "-", "+", "<", ">", "%", "~", "€", "$", "[", "]", "{", "}", "@", "&", "#", "*");

		$perihal = str_replace($illegalChar, "", $data['perihal_covid']);

		$sql = "UPDATE arsip_covid SET no_dokumen_covid='" . $data['no_dokumen_covid'] . "', perihal_covid='" . $perihal . "', tgl_dokumen_covid='" . $date . "', jenis_surat='" . $data['jenis_surat'] . "' WHERE id_arsip_covid='" . $data['id_arsip_covid'] . "'";



		$this->db->query($sql);



		return $this->db->affected_rows();
	}

	public function update_foto($data)

	{

		$sql = "UPDATE surat_keputusan SET nomor_surat_keputusan='" . $data['nomor_surat_keputusan'] . "', perihal_surat_keputusan='" . $data['perihal_surat_keputusan'] . "', tgl_surat_keputusan='" . $data['tgl_surat_keputusan'] . "', file_surat_keputusan='" . $data['file_surat_keputusan'] . "' WHERE id_surat_keputusan='" . $data['id_surat_keputusan'] . "'";



		$this->db->query($sql);



		return $this->db->affected_rows();
	}



	public function delete($id)

	{

		$sql = "DELETE FROM arsip_covid WHERE id_arsip_covid='" . $id . "'";



		$this->db->query($sql);



		return $this->db->affected_rows();
	}

	public function deletefileoneaja($id)

	{

		$this->db->trans_start();

		$sql = "DELETE FROM file_covid WHERE id_file_covid='" . $id . "'";

		$this->db->query($sql);

		//return $this->db->affected_rows();

		$this->db->trans_complete();

		return $this->db->trans_status();
	}



	public function insert_arsip_covid($data)

	{

		$exp = explode('-', $data['tgl_dokumen_covid']);

		if (count($exp) == 3) {

			$date = $exp[2] . '-' . $exp[1] . '-' . $exp[0];
		}
		$id_arsip = "" . NULL . "";
		$illegalChar = array("'", "?", "!", ":", ";", "-", "+", "<", ">", "%", "~", "€", "$", "[", "]", "{", "}", "@", "&", "#", "*");

		$perihal = str_replace($illegalChar, "", $data['perihal_covid']);
		$sql = "INSERT INTO arsip_covid VALUES('','" . $data['no_dokumen_covid'] . "','" . $perihal . "','" . $date . "','" . $data['jenis_surat'] . "','" . $this->session->userdata('kode') . "',NULL)";

		$this->db->query($sql);

		$id_arsip_covid = $this->db->insert_id();

		$this->db->trans_start();

		$jumlah_file = $data['jumlah_file'];

		for ($i = 0; $i <= $jumlah_file; $i++) {

			// $o = str_replace(" ", "_", $data['nm_file_arsip_covid'][$i]);
			// perbaikan bug reski 03/03/2021
			$stringnya = "" . $data['nm_file_arsip_covid'][$i] . "";
			$hasil1 = substr($stringnya, 0, -4);
			$hasil2 = str_replace(" ", "_", $hasil1);
			$hasil3 = str_replace(".", "_", $hasil2);
			$pdf = "pdf";
			$o = "$hasil3.$pdf";
			//perbaikan bug reski

			$sql = "INSERT INTO file_covid VALUES('','" . $o . "','" . $id_arsip_covid . "')";

			$this->db->query($sql);
		}
		$this->db->trans_complete();

		return $this->db->trans_status();
	}


	public function insert_user($data)

	{

		//$id = md5(DATE('ymdhms').rand());

		$pass = md5($data['password']);

		$sql = "INSERT INTO admin VALUES('','" . $data['username'] . "','" . $pass . "','" . $data['nama'] . "','tidak ada foto')";



		$this->db->query($sql);



		return $this->db->affected_rows();
	}

	public function select_jenis()

	{

		$sql = " SELECT * FROM jenis order by nm_jenis asc ";



		$data = $this->db->query($sql);



		return $data->result();
	}



	// public function insert_batch($data)

	// {

	// 	$this->db->insert_batch('surat_keputusan', $data);



	// 	return $this->db->affected_rows();

	// }



	// public function check_nama($nama)

	// {

	// 	$this->db->where('nama', $nama);

	// 	$data = $this->db->get('surat_keputusan');



	// 	return $data->num_rows();

	// }



	public function total_rows()

	{

		$data = $this->db->get('arsip_covid');



		return $data->num_rows();
	}

	public function insert_arsip_covid_updatefile($data)

	{

		//var_dump($data);

		$this->db->trans_start();

		// $sql = "DELETE FROM kepada_surat_keluar WHERE id_surat_keluar='" . $data['id_surat_keluar'] . "'";

		// $this->db->query($sql);



		$jumlah_file = $data['jumlah_file'];



		for ($i = 0; $i <= $jumlah_file; $i++) {



			// $o = str_replace(" ", "_", $data['nm_file_covid'][$i]);
			// perbaikan bug reski 03/03/2021
			$stringnya = "" . $data['nm_file_covid'][$i] . "";
			$hasil1 = substr($stringnya, 0, -4);
			$hasil2 = str_replace(" ", "_", $hasil1);
			$hasil3 = str_replace(".", "_", $hasil2);
			$pdf = "pdf";
			$o = "$hasil3.$pdf";
			//perbaikan bug reski

			$sql = "INSERT INTO file_covid VALUES('','" . $o . "','" . $data['id_arsip_covid'] . "')";

			$this->db->query($sql);
		}

		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	public function select_file_by_id($id)

	{

		$sql = "SELECT * from file_covid where id_arsip_covid = '{$id}' order by id_file_covid desc";



		$data = $this->db->query($sql);



		return $data->result();
	}
}



/* End of file M_pegawai.php */

/* Location: ./application/models/M_pegawai.php */
