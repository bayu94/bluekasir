<?php


class M_wp extends CI_Model
{
	
	public function list_wp()
	{
		$this->db->select('*');
		$this->db->from('master_wp');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_wp($data)
	{
		$this->db->insert('master_wp',$data);
	}

	public function update_wp($data_array, $id)
	{
		
		$this->db->update('master_wp',$data_array, array('wp_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('wp_id',$id);
		$this->db->delete('master_wp');
		
	}
	
}