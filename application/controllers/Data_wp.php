<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Data_wp extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_wp");
        if (empty($this->session->userdata('kasir_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_wp->list_wp();
    	$this->load->view('Data_wp/List',$data);
    }

    public function form($id="")
    {
    	$data['list']="";
    	if ($id!="") 
    	{
    		$data['list'] = $this->db->query("SELECT * FROM master_wp WHERE wp_id='".$id."' ")->result_array();
    	}
    		$this->load->view('Data_wp/Form',$data);
    }

    public function insert()
    {
    	$data['wp_id'] = $this->input->post('wp_id');
    	$data['wp_nama'] = $this->input->post('wp_nama');

    	if ($data['wp_id']!="") 
    	{
    		$this->M_wp->update_wp($data, $data['wp_id']);
    	}else{
    		$this->M_wp->insert_wp($data);
    	}

    	redirect('Data_wp');
    }

    public function delete($id)
    {
    	$this->M_wp->delete($id);
    	redirect('Data_wp');
    }

}