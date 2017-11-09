<?php


class M_halaman_kasir extends CI_Model
{
	
	public function list_room()
	{
		$this->db->select('*');
		$this->db->from('master_room');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	
	
}