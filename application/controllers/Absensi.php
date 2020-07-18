<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {
	function __construct(){
		parent::__construct();		
				$this->load->model('m_absensi');
                $this->load->helper('url');
	}

	public function index()
	{
		$data['query'] = $this->m_absensi->tampil_data();
		

		$this->load->view('header', $data);
		$this->load->view('karyawan_view', $data);
		$this->load->view('footer', $data);
	}

	function detail($id)
	{
		$data['detailabsen'] = $this->m_absensi->absenjoin($id);
		$this->load->view('detail_absen_view', $data);
	}
}
