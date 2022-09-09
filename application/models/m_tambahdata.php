<?php

class M_tambahdata extends CI_Model
{

	function daftar_baru($data,$table)
	{
		$this->db->insert($table,$data);
	}

}