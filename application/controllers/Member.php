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
	public function summery()
	{

		$this->load->view('pages/register_suc');

	}







}
