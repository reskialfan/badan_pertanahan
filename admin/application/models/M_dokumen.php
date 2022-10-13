<?php

defined('BASEPATH') or exit('No direct script access allowed');



class M_dokumen extends CI_Model

{


	public function x($cek)

	{

		$sql = "SELECT * FROM surat_keputusan where id_surat_keputusan='" . $cek . "' order by id_surat_keputusan desc";



		$data = $this->db->query($sql);

		echo $sql;



		return $data->result();
	}


	public function pencarian($cek)

	{


		// $sql = "select a.*,x.listinstansi from surat_keluar a 

		// left join (select group_concat(nm_instansi_tujuan_surat_keluar) as listinstansi,id_surat_keluar from instansi_tujuan_surat_keluar group by id_surat_keluar) x on x.id_surat_keluar=a.id_surat_keluar
		// left join jenis b on a.jenis_surat_keluar=b.id_jenis

		//  group by a.id_surat_keluar order by a.id_surat_keluar desc";

		$sql = "SELECT
		a.*,	b.*,
		x.listinstansi 
	FROM
		surat_keluar a
		LEFT JOIN ( SELECT group_concat( nm_instansi_tujuan_surat_keluar ) AS listinstansi, id_surat_keluar FROM instansi_tujuan_surat_keluar GROUP BY id_surat_keluar ) x ON x.id_surat_keluar = a.id_surat_keluar
		LEFT JOIN jenis b ON a.jenis_surat_keluar = b.id_jenis 
		where a.id_surat_keluar='" . $cek . "'

	GROUP BY
		a.id_surat_keluar 
	ORDER BY
		a.id_surat_keluar DESC";

		$data = $this->db->query($sql);



		return $data->result();
	}

	public function ubah_ruang($data)

	{

		// $sql = "udpate arsip_covid set WHERE id_arsip_covid='" . $id . "'";

		$sql = "UPDATE surat_dokumen SET id_ruang_detail='" . $data['id_ruang'] . "' WHERE id_surat_dokumen='" . $data['id_surat_keluar']  . "'";


		$this->db->query($sql);



		return $this->db->affected_rows();
	}

	public function select_ruangnya()

	{

		$sql = " SELECT * FROM tb_ruang_detail  where aktif='Y' order by nama_ruang_detail asc ";



		$data = $this->db->query($sql);



		return $data->result();
	}



	public function select_all()

	{


		$sql = "SELECT * from surat_dokumen sd join jenis_dokumen2 js on sd.jenis_suratdokumen=id_jenisdokumen2";

		$data = $this->db->query($sql);



		return $data->result();
	}

	public function select_all_pertahun($id)

	{
		if ($id == '' || $id == NULL) {
			$sql = "SELECT * from surat_dokumen sd join jenis_dokumen2 js on sd.jenis_suratdokumen=id_jenisdokumen2";
		} else {

			// $sql = "select * from surat_keluar where tgl_surat_keluar like '%{$id}%' order by id_surat_keluar desc";

			$sql = "SELECT * from surat_dokumen sd join jenis_dokumen2 js on sd.jenis_suratdokumen=id_jenisdokumen2 where YEAR(sd.tgl_suratdokumen) = " . $id . "";
		}

		$data = $this->db->query($sql);


		return $data->result();
	}

	public function select_perjenis($id)

	{

		// $sql = "select * from surat_keluar where id_surat_keluar = ".$id." order by id_surat_keluar desc";

		if ($id != '') {
			$sql = "SELECT * from surat_dokumen sd join jenis_dokumen2 js on sd.jenis_suratdokumen=js.id_jenisdokumen2 where sd.jenis_suratdokumen=" . $id . "";
		} else {
			$sql = "SELECT * from surat_dokumen sd join jenis_dokumen2 js on sd.jenis_suratdokumen=js.id_jenisdokumen2";
		}

		$data = $this->db->query($sql);



		$data = $this->db->query($sql);



		return $data->result();
	}



	public function select_tahun()

	{

		$sql = " SELECT * FROM tahun order by tahun desc ";



		$data = $this->db->query($sql);



		return $data->result();
	}

	public function select_laporan($id, $id1, $id2)

	{
		if ($id == 0 && $id2 == 0) {
			$sql = " SELECT * from surat_dokumen sd join jenis_dokumen2 js on sd.jenis_suratdokumen=id_jenisdokumen2 join kelurahan kel on kel.id_kelurahan=sd.kelurahan ";
		} elseif ($id == 0) {
			$sql = " SELECT * from surat_dokumen sd join jenis_dokumen2 js on sd.jenis_suratdokumen=id_jenisdokumen2 join kelurahan kel on kel.id_kelurahan=sd.kelurahan  where kel.kelurahan='" . $id2 . "' ";
		} elseif ($id2 == 0) {
			$sql = " SELECT * from surat_dokumen sd join jenis_dokumen2 js on sd.jenis_suratdokumen=id_jenisdokumen2 join kelurahan kel on kel.id_kelurahan=sd.kelurahan  where sd.jenis_suratdokumen='" . $id . "' ";
		} else {
			$sql = " SELECT * from surat_dokumen sd join jenis_dokumen2 js on sd.jenis_suratdokumen=id_jenisdokumen2 join kelurahan kel on kel.id_kelurahan=sd.kelurahan  where sd.jenis_suratdokumen='" . $id . "' and sd.kelurahan='" . $id2 . "' ";
		}

		$data = $this->db->query($sql);



		return $data->result();
	}

	public function select_ruang_detail()

	{

		$sql = " SELECT * FROM tb_ruang_detail order by nama_ruang_detail desc ";



		$data = $this->db->query($sql);



		return $data->result();
	}
	function get_kelurahan($id)
	{
		$hasil = $this->db->query("SELECT * FROM kelurahan WHERE id_kecamatan='$id'");
		return $hasil->result();
	}

	public function select_jenis()

	{

		$sql = " SELECT * FROM jenis_dokumen2 order by 	id_jenisdokumen2 asc ";



		$data = $this->db->query($sql);



		return $data->result();
	}

	public function select_kecamatan()

	{

		$sql = " SELECT * FROM kecamatan order by	nama_kecamatan asc ";



		$data = $this->db->query($sql);



		return $data->result();
	}

	public function select_kelurahan()

	{

		$sql = " SELECT * FROM kelurahan order by nama_kelurahan asc ";



		$data = $this->db->query($sql);



		return $data->result();
	}



	public function select_sifat()

	{

		$sql = " SELECT * FROM sifat_surat order by nm_sifat_surat asc ";



		$data = $this->db->query($sql);



		return $data->result();
	}



	public function select_by_id($id)

	{

		$sql = "SELECT * from surat_dokumen sd join jenis_dokumen2 js on sd.jenis_suratdokumen=js.id_jenisdokumen2 where sd.id_surat_dokumen = '{$id}'";



		$data = $this->db->query($sql);



		return $data->row();
	}

	public function select_instansi_by_id($id)

	{

		$sql = "SELECT * from instansi_tujuan_surat_keluar where id_surat_keluar = '{$id}'";



		$data = $this->db->query($sql);



		return $data->result();
	}

	public function select_kepada_by_id($id)

	{

		$sql = "SELECT * from kepada_surat_keluar where id_surat_keluar = '{$id}'";



		$data = $this->db->query($sql);



		return $data->result();
	}

	public function select_file_by_id($id)

	{

		$sql = "SELECT * from file_surat_dokumen where id_surat_dokumen = '{$id}'";



		$data = $this->db->query($sql);



		return $data->result();
	}



	public function update($data)

	{

		$sql = "UPDATE surat_keluar SET no_dokumen_surat_arsip_suratkeluar='" . $data['no_dokumen_surat_arsip_suratkeluar'] . "', tgl_dokumen_surat_arsip_suratkeluar='" . $data['tgl_dokumen_surat_arsip_suratkeluar'] . "', id_jenis_dokumen_vi='" . $data['id_jenis_dokumen_vi'] . "', tgl_berlaku_arsip_suratkeluar='" . $data['tgl_berlaku_arsip_suratkeluar'] . "', tgl_berakhir_arsip_suratkeluar='" . $data['tgl_berakhir_arsip_suratkeluar'] . "' WHERE id_surat_arsip_suratkeluar='" . $data['id_surat_arsip_suratkeluar'] . "'";



		$this->db->query($sql);



		return $this->db->affected_rows();
	}

	public function updateisi($data)

	{

		// $exp = explode('-', $data['tgl_suratdokumen']);

		// if (count($exp) == 3) {

		// 	$date = $exp[2] . '-' . $exp[1] . '-' . $exp[0];
		// }
		// $illegalChar = array("'", "?", "!", ":", ";", "-", "+", "<", ">", "%", "~", "€", "$", "[", "]", "{", "}", "@", "&", "#", "*");

		// $judul = str_replace($illegalChar, "", $data['judul']);

		$sql = "UPDATE surat_dokumen SET 
		no_surat_dokumen='" . $data['no_surat_dokumen'] . "', 
		jenis_suratdokumen='" . $data['jenis_suratdokumen'] . "', 
		nama_pemilik='" . $data['nama_pemilik'] . "', 
		luas_lahan='" . $data['luas_lahan'] . "', 
		luas_bangunan='" . $data['luas_bangunan'] . "',
		batas_sisi_barat ='" . $data['batas_sisi_barat'] . "',
		batas_sisi_utara ='" . $data['batas_sisi_utara'] . "',
		batas_sisi_timur ='" . $data['batas_sisi_timur'] . "',
		batas_sisi_selatan ='" . $data['batas_sisi_selatan'] . "',
		kelurahan ='" . $data['kelurahan'] . "'
		WHERE id_surat_dokumen='" . $data['id_surat_dokumen'] . "'";



		$this->db->query($sql);



		return $this->db->affected_rows();
	}

	public function update_foto($data)

	{

		$sql = "UPDATE surat_arsip_suratkeluar SET no_dokumen_surat_arsip_suratkeluar='" . $data['no_dokumen_surat_arsip_suratkeluar'] . "', tgl_dokumen_surat_arsip_suratkeluar='" . $data['tgl_dokumen_surat_arsip_suratkeluar'] . "', id_jenis_dokumen_vi='" . $data['id_jenis_dokumen_vi'] . "', tgl_berlaku_arsip_suratkeluar='" . $data['tgl_berlaku_arsip_suratkeluar'] . "', tgl_berakhir_arsip_suratkeluar='" . $data['tgl_berakhir_arsip_suratkeluar'] . "', file_surat_arsip_suratkeluar='" . $data['file_surat_arsip_suratkeluar'] . "' WHERE id_surat_arsip_suratkeluar='" . $data['id_surat_arsip_suratkeluar'] . "'";



		$this->db->query($sql);



		return $this->db->affected_rows();
	}



	public function delete($id)

	{

		$this->db->trans_start();

		$sql = "DELETE FROM surat_dokumen WHERE id_surat_dokumen='" . $id . "'";

		$this->db->query($sql);

		$sql3 = "DELETE FROM file_surat_dokumen WHERE id_surat_dokumen='" . $id . "'";

		$this->db->query($sql3);

		//return $this->db->affected_rows();

		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	public function deleteinstansi($id)

	{

		$this->db->trans_start();

		$sql = "DELETE FROM instansi_tujuan_surat_keluar WHERE id_instansi_tujuan_surat_keluar='" . $id . "'";

		$this->db->query($sql);

		//return $this->db->affected_rows();

		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	public function deletefileoneaja($id)

	{

		$this->db->trans_start();

		$sql = "DELETE FROM file_surat_dokumen WHERE id_file_surat_dokumen='" . $id . "'";

		$this->db->query($sql);

		//return $this->db->affected_rows();

		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	public function deletekepada($id)

	{

		$this->db->trans_start();

		$sql = "DELETE FROM kepada_surat_keluar WHERE id_kepada_surat_keluar='" . $id . "'";

		$this->db->query($sql);

		//return $this->db->affected_rows();

		$this->db->trans_complete();

		return $this->db->trans_status();
	}



	public function insert_surat_dokumen($data)

	{


		$sql = "INSERT INTO surat_dokumen VALUES('','" . $data['no_surat_dokumen'] . "','" . $data['jenis_suratdokumen'] . "','" . $data['nama_pemilik'] . "','" . $data['luas_lahan'] . "','" . $data['luas_bangunan'] . "','" . $data['batas_sisi_barat'] . "','" . $data['batas_sisi_utara'] . "', '" . $data['batas_sisi_timur'] . "', '" . $data['batas_sisi_selatan'] . "', '" . $data['kelurahan'] . "')";
		// $sql = strip_tags($sql);

		$this->db->query($sql);

		// memanggil last insert id autoincrement
		$id_suratkeluar = $this->db->insert_id();

		$this->db->trans_start();

		$jumlah_file = $data['jumlah_file'];

		for ($i = 0; $i <= $jumlah_file; $i++) {

			// $o = str_replace(" ", "_", $data['nm_file_surat_keluar'][$i]);
			// perbaikan bug reski 03/03/2021
			$stringnya = "" . $data['nm_file_surat_dokumen'][$i] . "";
			$hasil1 = substr($stringnya, 0, -4);
			$hasil2 = str_replace(" ", "_", $hasil1);
			$hasil3 = str_replace(".", "_", $hasil2);
			$pdf = "pdf";
			$o = "$hasil3.$pdf";
			//perbaikan bug reski

			$sql = "INSERT INTO file_surat_dokumen VALUES('','" . $o . "','" . $id_suratkeluar . "')";

			$this->db->query($sql);
		}

		$this->db->trans_complete();

		//return $this->db->affected_rows();

		//return 1;

		return $this->db->trans_status();
	}

	public function insert_surat_keluar_updateinstansi($data)

	{

		$this->db->trans_start();



		$sql = "DELETE FROM instansi_tujuan_surat_keluar WHERE id_surat_keluar='" . $data['id_surat_keluar'] . "'";

		$this->db->query($sql);



		$jumlah_instansi = count($data['instansi']) - 1;

		for ($i = 0; $i <= $jumlah_instansi; $i++) {

			$sql = "INSERT INTO instansi_tujuan_surat_keluar VALUES('','" . $data['instansi'][$i] . "','" . $data['id_surat_keluar'] . "')";

			$this->db->query($sql);
		}

		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	public function insert_surat_keluar_updatekepada($data)

	{

		$this->db->trans_start();

		$sql = "DELETE FROM kepada_surat_keluar WHERE id_surat_keluar='" . $data['id_surat_keluar'] . "'";

		$this->db->query($sql);



		$jumlah_kepada = count($data['nm_kepada']) - 1;

		for ($i = 0; $i <= $jumlah_kepada; $i++) {

			$sql = "INSERT INTO kepada_surat_keluar VALUES('','" . $data['nm_kepada'][$i] . "','" . $data['id_surat_keluar'] . "')";

			$this->db->query($sql);
		}

		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	public function insert_surat_keluar_updatefile($data)

	{

		//var_dump($data);

		$this->db->trans_start();

		// $sql = "DELETE FROM kepada_surat_keluar WHERE id_surat_keluar='" . $data['id_surat_keluar'] . "'";

		// $this->db->query($sql);



		$jumlah_file = $data['jumlah_file'];

		for ($i = 0; $i <= $jumlah_file; $i++) {

			// $o = str_replace(" ", "_", $data['nm_file_surat_keluar'][$i]);
			// perbaikan bug reski 03/03/2021
			$stringnya = "" . $data['nm_file_surat_dokumen'][$i] . "";
			$hasil1 = substr($stringnya, 0, -4);
			$hasil2 = str_replace(" ", "_", $hasil1);
			$hasil3 = str_replace(".", "_", $hasil2);
			$pdf = "pdf";
			$o = "$hasil3.$pdf";
			//perbaikan bug reski
			$sql = "INSERT INTO file_surat_dokumen VALUES('','" . $o . "','" . $data['id_surat_dokumen'] . "')";

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

		$data = $this->db->get('surat_keluar');



		return $data->num_rows();
	}
}



/* End of file M_pegawai.php */

/* Location: ./application/models/M_pegawai.php */
