<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_daftar');
		$this->load->helper('url');
 
	}

	public function index()
	{
		$this->load->view('daftar_view');
	}

	function aksi_daftar(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
 
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $password
			);
		$this->m_daftar->input_data($data,'karyawan');
		redirect('login');
	}
}