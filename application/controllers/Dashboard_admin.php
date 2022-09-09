<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "admin"){
			redirect(base_url("admin"));
		}
	}
	public function index()
	{
		$this->load->view('view_admin');
	}
}
