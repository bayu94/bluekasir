<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Kasir extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_halaman_kasir");
        if (empty($this->session->userdata('kasir_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_halaman_kasir->list_room();
    	$this->load->view('Kasir/Home',$data);
    }
}