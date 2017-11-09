<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_room extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_room");
        if (empty($this->session->userdata('kasir_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_room->list_room();
    	$this->load->view('Data_room/List',$data);
    }

    public function form($id="")
    {
    	$data['list']="";
    	if ($id!="") 
    	{
    		$data['list'] = $this->db->query("SELECT * FROM master_room WHERE room_id='".$id."' ")->result_array();
    	}
    		$this->load->view('Data_room/Form',$data);
    }

    public function insert()
    {
    	$data['room_id'] = $this->input->post('room_id');
    	$data['room_name'] = $this->input->post('room_name');
    	$data['room_lantai'] = $this->input->post('room_lantai');
    	$data['status'] = '1';

    	if ($data['room_id'] !="") 
    	{
    		$this->M_room->update_room($data, $data['room_id']);
    	}else{
    		$this->M_room->insert_room($data);
    	}

    	redirect('Data_room');
    }

    public function delete($id)
	{

		$this->M_room->delete($id);

		redirect('Data_room');

	}
}