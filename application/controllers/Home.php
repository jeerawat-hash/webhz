<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 function __construct()
	 {
		parent::__construct(); 
	 	

	 }

	public function index()
	{
		
		//$this->load->view('pages/home');
		$this->load->view('pages/homenew');

	}
	public function rank()
	{

		$this->load->view('pages/ranking');


	}
	public function guide()
	{

		$this->load->view('pages/guide');


	}






}
