<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("karyawan",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'karyawan' => $email,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url('karyawan'));
 
		}else{
			echo "Email atau password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
