<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_paket extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_paket");
        if (empty($this->session->userdata('kasir_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_paket->list_paket();
    	$this->load->view('Data_paket/List',$data);
    }


    public function form($id="")
    {
    	$data['list']="";
    	if ($id!="") 
    	{
    		$data['list'] = $this->db->query("SELECT * FROM master_paket WHERE paket_id='".$id."' ")->result_array();
    	}
    		$this->load->view('Data_paket/Form',$data);
    }

    public function insert()
    {
    	$data['paket_id'] = $this->input->post('paket_id');
    	$data['paket_name'] = $this->input->post('paket_name');
    	$data['paket_price'] = $this->input->post('paket_price');

    	if ($data['paket_id'] !="") 
    	{
    		$this->M_paket->update_paket($data, $data['paket_id']);
    	}else{
    		$this->M_paket->insert_paket($data);
    	}

    	redirect('Data_paket');
    }

    public function delete($id)
    {
    	$this->M_paket->delete($id);

		redirect('Data_paket');

    }
}