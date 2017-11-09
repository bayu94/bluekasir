<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kasir extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_kasir");
        if (empty($this->session->userdata('kasir_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_kasir->list_kasir();
    	$this->load->view('Data_kasir/List',$data);
    }

    public function form($id="")
    {
    	$data['list']="";
    	if ($id!="") 
    	{
    		$data['list'] = $this->db->query("SELECT * FROM master_kasir WHERE kasir_id='".$id."' ")->result_array();
    	}
    		$this->load->view('Data_kasir/Form',$data);
    }

    public function insert()
    {
    	$data['kasir_id'] = $this->input->post('kasir_id');
    	$data['kasir_nama'] = $this->input->post('kasir_nama');
    	$data['kasir_username'] = $this->input->post('kasir_username');
    	$data['kasir_password'] = $this->input->post('kasir_password');
    	$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
    	$data['kasir_email'] = $this->input->post('kasir_email');
    	$data['kasir_level'] = '2';

    	if ($data['kasir_id'] !="") 
    	{
    		$this->M_kasir->update_kasir($data, $data['kasir_id']);
    	}else{
    		$this->M_kasir->insert_kasir($data);
    	}

    	redirect('Data_kasir');
    }


    public function delete($id)
	{

		$this->M_kasir->delete($id);

		redirect('Data_kasir');

	}
}