<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	public function tampil_data()
	{
		$data = $this->db->get('Pegawai');
		return $data;
	}

	public function edit_data($where,$table)
	{
		$data = $this->db->get_where($table,$where);		
		return $data;
	}

	public function input_data($data){
		$this->db->insert('Pegawai', $data);
	}
 
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}
