<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Data_barang extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_barang");
        if (empty($this->session->userdata('kasir_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_barang->list_barang();
    	$this->load->view('Data_barang/List',$data);
    }

    public function form($id="")
    {
    	$data['kode_barang'] = $this->M_barang->getIDBarang();
    	$data['list']="";
    	if ($id!="") 
    	{
    		$data['list'] = $this->db->query("SELECT * FROM master_barang WHERE barang_id='".$id."' ")->result_array();
    	}
    		$this->load->view('Data_barang/Form',$data);
    }

    public function insert()
    {
    	$data['barang_id'] = $this->input->post('barang_id');
    	$data['barang_name'] = $this->input->post('barang_name');
    	$data['barang_harga_jual'] = $this->input->post('barang_harga_jual');
    	$data['barang_harga_beli'] = $this->input->post('barang_harga_beli');
    	$data['type'] = '1';

    	$this->M_barang->insert_barang($data);
    	// if ($data['type'] !="2") 
    	// {
    	// 	$this->M_barang->update_barang($data, $data['barang_id']);
    	// }else{
    	// 	$this->M_barang->insert_barang($data);
    	// }

    		redirect('Data_barang');
			// var_dump($this->db->last_query()); 
			
    }

    public function delete($id)
	{

		$this->M_barang->delete($id);

		redirect('Data_barang');

	}
}