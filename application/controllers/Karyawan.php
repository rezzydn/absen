<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	function __construct(){
		parent::__construct();		
				$this->load->model('m_karyawan');
				$this->load->helper('url');
				
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$data['query'] = $this->m_karyawan->tampil_data();
		
		$this->load->view('header', $data);
		$this->load->view('karyawan_view', $data);
		$this->load->view('footer', $data);
	}
}
