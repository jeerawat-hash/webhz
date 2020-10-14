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
 	public function SendRegister($param)
 	{
 
				$value = array( "ID" => trim($param),
							 	"Password" => "vvvv",
							 	"LineID" => "dsadsadas" );
				//API URL
				$url = "http://103.82.249.205:1234/api/register.php";

				//create a new cURL resource
				$ch = curl_init($url);

				//setup request to send json via POST
				//$data = $array;

				$payload = json_encode($value);

				//attach encoded JSON string to the POST fields
				curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

				//set the content type to application/json
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

				//return response instead of outputting
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

				//execute the POST request
				 $result = curl_exec($ch); 

				//close cURL resource
				curl_close($ch);
 
				//echo $result;
				print_r($result);



 	}





}


