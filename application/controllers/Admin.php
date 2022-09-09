<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_registrasi');

	}

	public function index()
	{
		$this->load->view('login_admin');
	}
	function fungsi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("akun_admin",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "admin"
				);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda berhasil login</p>
                </div>');  
			redirect(base_url("dashboard_admin"));
		}else{
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Gagal</h4>
                    <p>Silahkan coba lagi</p>
                </div>'); 
            redirect(base_url("admin")); 
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
	function registrasi_akun(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$data = array(
			'username' => $username,
			'email' => $email,
			'password' => $password
			);
		$this->m_registrasi->tambah_akun($data,'akun_admin');
		$this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda berhasil daftar silahkan login</p>
                </div>');
		redirect('admin');

	}
}
