<?php


class M_paket extends CI_Model
{
	
	public function list_paket()
	{
		$this->db->select('*');
		$this->db->from('master_paket');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_paket($data)
	{
		$this->db->insert('master_paket',$data);
	}

	public function update_paket($data_array, $id)
	{
		
		$this->db->update('master_paket',$data_array, array('paket_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('paket_id',$id);
		$this->db->delete('master_paket');
		
	}
	
}