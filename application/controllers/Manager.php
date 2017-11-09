<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        // $this->load->model("M_manager");
        if (empty($this->session->userdata('kasir_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$this->load->view('Manager/Home');
    }
}