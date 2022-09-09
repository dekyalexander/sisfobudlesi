<?php

class M_registrasi extends CI_Model
{
	
	function tambah_akun($data,$table)
	{
		$this->db->insert($table,$data);
	}
}