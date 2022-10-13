<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kota extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('kelurahan');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM kelurahan WHERE id_kelurahan = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_pegawai($id) {
		$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kelurahan.nama AS kelurahan, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kelurahan, kelamin, posisi WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kelurahan = kelurahan.id AND pegawai.id_kelurahan={$id}";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data) {
		$sql = "INSERT INTO kelurahan VALUES('','" .$data['id_kecamatan'] ."','" .$data['nama_kelurahan'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function select_kecamatan()

	{

		$sql = " SELECT * FROM kecamatan order by	nama_kecamatan asc ";



		$data = $this->db->query($sql);



		return $data->result();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('kelurahan', $data);
		
		return $this->db->affected_rows();
	} 

	public function update($data) {
		$sql = "UPDATE kelurahan SET nama_kelurahan='" .$data['nama_kelurahan'] ."', id_kecamatan='" .$data['id_kecamatan'] ."' WHERE id_kelurahan='" .$data['id_kelurahan'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM kelurahan WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama', $nama);
		$data = $this->db->get('kelurahan');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('kelurahan');

		return $data->num_rows();
	}
}

/* End of file M_kelurahan.php */
/* Location: ./application/models/M_kelurahan.php */