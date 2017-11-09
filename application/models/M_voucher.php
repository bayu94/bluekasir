<?php


class M_voucher extends CI_Model
{
	public function getIDVoucher()
    {
        $q = $this->db->query("select MAX(RIGHT(voucher_kode,3)) as kd_max from master_voucher");
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
        return "VCR".$kd;
    }

	public function list_voucher()
	{
		$this->db->select('*');
		$this->db->from('master_voucher');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_voucher($data)
	{
		$this->db->insert('master_voucher',$data);
	}

	public function update_voucher($data_array, $id)
	{
		
		$this->db->update('master_voucher',$data_array, array('voucher_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('voucher_id',$id);
		$this->db->delete('master_voucher');
		
	}
	
}