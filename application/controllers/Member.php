<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	 function __construct()
	 {
		parent::__construct(); 
		$this->load->library("session");
		/*
		if ( $this->session->userdata("memberID") != "" ) {
				
			redirect("home");	

		}*/

	 }

	public function index()
	{
		
		//$this->load->view('pages/register');
		
		echo  $this->session->userdata("UserNum");
			 
	}
	public function	signin()
	{  

			//$userdata = array('UserNum' => $_POST["UserNum"]);
			$userdata = array('UserNum' => 6,'UserName' => "jeerawat1");
			$this->session->set_userdata($userdata);
   
	}
	public function signout()
	{

		$this->session->sess_destroy();

	}
	public function itemmall()
	{
		//$this->load->view('template/header');
		$this->load->view('pages/itemmall');
		
	}
 	public function mgmt()
 	{
 		//$this->load->view('template/header');
 		$this->load->view('pages/datafromline');
		 
 	}
 	 public function market()
 	{
 		//$this->load->view('template/header');
 		$this->load->view('pages/datamarket');
		 
 	}
 	 public function topup()
 	{
 		//$this->load->view('template/header');
 		$this->load->view('pages/datatopup');
		 
 	}
 	 public function waitdraw()
 	{
 		//$this->load->view('template/header');
 		$this->load->view('pages/datawithdraw');
		 
 	}





}


