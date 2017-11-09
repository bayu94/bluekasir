<?php


class M_barang extends CI_Model
{
	public function getIDBarang()
    {
        $q = $this->db->query("select MAX(RIGHT(barang_id,3)) as kd_max from master_barang");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "B".$kd;
    }

	public function list_barang()
	{
		$this->db->select('*');
		$this->db->from('master_barang');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_barang($data)
	{
		$this->db->insert('master_barang',$data);
	}

	public function update_barang($data_array, $id)
	{
		
		$this->db->update('master_barang',$data_array, array('barang_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('barang_id',$id);
		$this->db->delete('master_barang');
		
	}
	
}