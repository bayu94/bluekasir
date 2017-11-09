<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_transaksi");
        if (empty($this->session->userdata('kasir_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function form($id)
    {
    	$user = array();
		$room_name = $this->db->query("SELECT * FROM master_room WHERE room_id='".$id."' ")->result_array();
		$data['room']=$room_name;

		$pkt = array();
		$jenis_paket = $this->db->query("SELECT * FROM master_paket")->result_array();
		$data['paket']=$jenis_paket;

		$wp = array();
		$nama_wp = $this->db->query("SELECT * FROM master_wp")->result_array();
		$data['nama_terapis']=$nama_wp;


    	$data['room_id'] = $id;
    	$this->load->view('Transaksi/Form',$data);
    }
}