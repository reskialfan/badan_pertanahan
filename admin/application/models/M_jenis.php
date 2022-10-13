<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('jenis');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM jenis WHERE id_jenis = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_jenis($id) {
		$sql = " SELECT surat.id_surat AS id_surat, surat.judul_surat AS judul_surat, jenis.nm_jenis as nm_jenis FROM surat, jenis WHERE  surat.id_jenis = jenis.id_jenis AND surat.id_jenis={$id}";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data) {
		$sql = "INSERT INTO jenis VALUES('','" .$data['nm_jenis'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('jenis', $data);
		
		return $this->db->affected_rows();
	} 

	public function update($data) {
		$sql = "UPDATE jenis SET nm_jenis='" .$data['nm_jenis'] ."' WHERE id_jenis='" .$data['id_jenis'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM jenis WHERE id_jenis='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama', $nama);
		$data = $this->db->get('jenis');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('jenis');

		return $data->num_rows();
	}
}

/* End of file M_jenis.php */
/* Location: ./application/models/M_jenis.php */