<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	 function __construct()
	 {
		parent::__construct(); 
		$this->load->library("session");
		$this->load->helper('url');

		/*
		if ( $this->session->userdata("memberID") != "" ) {
				
			redirect("home");	

		}*/

	 }

	public function index()
	{
		
		//$this->load->view('pages/register');

		$UserNum = $this->session->userdata("UserNum");
		$UserName = $this->session->userdata("UserName");

		if($UserNum == ""){
			$UserNum = "null";
		}
		if($UserName == ""){
			$UserName = "null";
		}

		$sess["UserNum"] = $UserNum;
		$sess["UserName"] = $UserName;
 
		$this->load->view('pages/memberhome',$sess);

	}
	public function	validate()
	{  

			$sess = $this->session->userdata("UserNum");
			if($sess != ""){
				echo 1;
			}else{
				echo 0;
			}
 
	}
	public function	signin()
	{  

			//$userdata = array('UserNum' => $_POST["UserNum"]);
			$userdata = array('UserNum' => $_POST["UserNum"],'UserName' => $_POST["UserName"]);
			$this->session->set_userdata($userdata);
 
	}
	public function signout()
	{

		$this->session->sess_destroy();
		header( "location: https://rhz.webclient.me/index.php/member" );

	}
	public function itemmall()
	{
		//$this->load->view('template/header');
		$UserNum = $this->session->userdata("UserNum");
		$UserName = $this->session->userdata("UserName");

		if($UserNum == ""){
			$UserNum = "null";
		}
		if($UserName == ""){
			$UserName = "null";
		}

		$sess["UserNum"] = $UserNum;
		$sess["UserName"] = $UserName;

		$this->load->view('pages/itemmall',$sess);
		
	}
 	public function mgmt()
 	{
		 //$this->load->view('template/header');
		 
		 $UserNum = $this->session->userdata("UserNum");
		 $UserName = $this->session->userdata("UserName");
 
		 if($UserNum == ""){
			 $UserNum = "null";
		 }
		 if($UserName == ""){
			 $UserName = "null";
		 }
 
		 $sess["UserNum"] = $UserNum;
		 $sess["UserName"] = $UserName;

 		$this->load->view('pages/datafromline',$sess);
		 
 	}
 	 public function market()
 	{
		 //$this->load->view('template/header');
		 
		 $UserNum = $this->session->userdata("UserNum");
		 $UserName = $this->session->userdata("UserName");
 
		 if($UserNum == ""){
			 $UserNum = "null";
		 }
		 if($UserName == ""){
			 $UserName = "null";
		 }
 
		 $sess["UserNum"] = $UserNum;
		 $sess["UserName"] = $UserName;

 		$this->load->view('pages/datamarket',$sess);
		 
 	}
 	 public function topup()
 	{
		 //$this->load->view('template/header');
		 $UserNum = $this->session->userdata("UserNum");
		 $UserName = $this->session->userdata("UserName");
 
		 if($UserNum == ""){
			 $UserNum = "null";
		 }
		 if($UserName == ""){
			 $UserName = "null";
		 }
 
		 $sess["UserNum"] = $UserNum;
		 $sess["UserName"] = $UserName;

 		$this->load->view('pages/datatopup',$sess);
		 
 	}
 	 public function waitdraw()
 	{
		 //$this->load->view('template/header');
		 $UserNum = $this->session->userdata("UserNum");
		 $UserName = $this->session->userdata("UserName");
 
		 if($UserNum == ""){
			 $UserNum = "null";
		 }
		 if($UserName == ""){
			 $UserName = "null";
		 }
 
		 $sess["UserNum"] = $UserNum;
		 $sess["UserName"] = $UserName;

 		$this->load->view('pages/datawithdraw',$sess);
		 
	 }
	 public function addallItem()
	 {
		/*
		  INSERT INTO ShopPurchase (UserUID,ProductNum,PurPrice,PurFlag,PurDate)
			SELECT UserName ,
			(SELECT ProductNum FROM ShopItemMap WHERE ItemMain = 121 AND ItemSub = 8),'0','0',GETDATE() 
			FROM RanUser.dbo.UserInfo WHERE UserLoginState = 1
			*/


	 }





}


