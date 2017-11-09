<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_voucher extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_voucher");
        if (empty($this->session->userdata('kasir_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_voucher->list_voucher();
    	$this->load->view('Data_voucher/List',$data);
    }

    public function form($id="")
    {
    	$data['kode_voucher'] = $this->M_voucher->getIDVoucher();
    	$data['list'] = "";
    	if ($id!="") 
    	{
    		$data['list'] = $this->db->query("SELECT * FROM master_voucher WHERE voucher_id='".$id."' ")->result_array();
    	}
    		$this->load->view('Data_voucher/Form',$data);
    }

    public function insert()
    {
    	$data['voucher_id'] = $this->input->post('voucher_id');
    	$data['voucher_kode'] = $this->input->post('voucher_kode');
    	$data['voucher_nominal'] = $this->input->post('voucher_nominal');
    	$data['status'] = "1";

    	if ($data['voucher_id'] !="") 
    	{
    		$this->M_voucher->update_voucher($data, $data['voucher_id']);
    	}else{
    		$this->M_voucher->insert_voucher($data);
    	}

    	redirect('Data_voucher');
    }

    public function delete($id)
	{

		$this->M_voucher->delete($id);

		redirect('Data_voucher');

	}
}