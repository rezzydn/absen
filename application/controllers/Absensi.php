<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {
	function __construct(){
		parent::__construct();		
				$this->load->model('m_absensi');
				$this->load->helper('url');
				$this->load->helper('date');
				$this->db->order_by('id_absen', 'desc');
	}

	public function index()
	{
		$data['query'] = $this->m_absensi->tampil_data();
		

		$this->load->view('header', $data);
		$this->load->view('karyawan_view', $data);
		$this->load->view('footer', $data);
	}

	public function absen_masuk() {
		$karyawan_id = $this->input->post('karyawan_id');

		$this->m_absensi->absen_masuk();
	}

	public function absen_pulang() {
		$this->m_absensi->absen_pulang($id_absen);
	}

}
