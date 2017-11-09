<?php


class M_room extends CI_Model
{

	public function list_room()
	{
		$this->db->select('*');
		$this->db->from('master_room');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_room($data)
	{
		$this->db->insert('master_room',$data);
	}

	public function update_room($data_array, $id)
	{
		
		$this->db->update('master_room',$data_array, array('room_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('room_id',$id);
		$this->db->delete('master_room');
		
	}
	
}