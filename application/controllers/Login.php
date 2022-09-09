<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_registrasi');

	}

	public function index()
	{
		$this->load->view('form_login');
	}
	function fungsi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("akun_login",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda berhasil login</p>
                </div>');  
			redirect(base_url("home"));
		}else{
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Gagal</h4>
                    <p>Silahkan coba lagi</p>
                </div>'); 
            redirect(base_url("login")); 
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
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
		$this->m_registrasi->tambah_akun($data,'akun_login');
		$this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda berhasil daftar silahkan login</p>
                </div>');
		redirect('login');

	}
}
