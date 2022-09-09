<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('m_berita');
    }
    //fungsi menampilkan artikel pada halaman berita user
	function index()
	{
		$x['data'] = $this->m_berita->tampil_berita();
		$this->load->view('berita',$x);
	}
	
}
