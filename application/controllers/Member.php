<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	 function __construct()
	 {
		parent::__construct(); 
	

	 }

	public function index()
	{
		
		//$this->load->view('pages/register');

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


