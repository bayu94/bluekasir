<?php


class M_kasir extends CI_Model
{

	public function list_kasir()
	{
		$this->db->select('*');
		$this->db->from('master_kasir');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_kasir($data)
	{
		$this->db->insert('master_kasir',$data);
	}

	public function update_kasir($data_array, $id)
	{
		
		$this->db->update('master_kasir',$data_array, array('kasir_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('kasir_id',$id);
		$this->db->delete('master_kasir');
		
	}
	
}