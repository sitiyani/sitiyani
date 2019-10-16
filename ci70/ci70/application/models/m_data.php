<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Controller {
	//Tampil
	public function tampil_data()
	{
		$data = $this ->db-> get("Pegawai");
		return $data;
	}

	//Tugas
	//Tambah
	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	//Hapus
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	//Update
	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
