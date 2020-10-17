<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	 function __construct()
	 {
		parent::__construct(); 
	 	

	 }

	public function index()
	{
		
		$this->load->view('pages/register');

	}
 	public function getDataCharFromLineID()
 	{
 		
 		$this->load->view('pages/datafromline');
				
 
 	}





}


