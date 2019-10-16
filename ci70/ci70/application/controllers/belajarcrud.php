<?php 
 
class Belajarcrud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
        $this->load->helper('url');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data['pegawai'] = $this->m_login->tampil_data()->result();
		$this->load->view('v_masuk',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$NIP = $this->input->post('NIP');
		$nama = $this->input->post('nama');
		$golongan = $this->input->post('golongan');

 
		$data = array(
			'NIP' => $NIP,
			'nama' => $nama,
			'golongan' => $golongan
			);
		$this->m_login->input_data($data,'pegawai');
		redirect('belajarcrud/index');
	}


	function hapus($NIP){
		$where = array('NIP' => $NIP);
		$this->m_login->hapus_data($where,'pegawai');
		redirect('belajarcrud/index');
	}

	function edit($NIP){
	$where = array('NIP' => $NIP);
	$data['pegawai'] = $this->m_login->edit_data($where,'pegawai')->result();
	$this->load->view('v_edit',$data);
	}

	function update(){
		$NIP = $this->input->post('NIP');
		$nama = $this->input->post('nama');
		$golongan = $this->input->post('golongan');

		$data = array(
			'NIP' => $NIP,
			'nama' => $nama,
			'golongan' => $golongan
		);
 
	$where = array(
		'NIP' => $NIP
	);
 
	$this->m_login->update_data($where,$data,'pegawai');
	redirect('belajarcrud/index');
		}
 
}