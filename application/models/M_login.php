<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_login extends CI_Model
{
	function cek ($username, $password)
	{
		$this->db->where('kasir_username', $username);
		$this->db->where('kasir_password', $password);
		return $this->db->get('master_kasir');	
	}
}