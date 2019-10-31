<?php
defined('BASEPATH') Or exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Pegawai_model');
		$this->load->model('wisata');
		$this->load->library('form_validation');
		//$this->load->helper('url');
		//$this->load->library('input');
			if($this->session->userdata('logged_in')){
			$session_data =$this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
		}else{
			redirect('login','refresh');
		}
	}
	
	public function index(){
		
		$this->load->view('home');}
		// $this->load->view('b/index', $data, FALSE);}

}
