<?php 

	
	///// Controller
    $pull = file_get_contents("php://input");
    ///// Controller

    ///// Model
	$data = json_decode($pull,true);

 
				$value = array( "ID" => $data["Username"],
							 	"Password" => $data["Password"],
							 	"LineID" => $data["LineID"] );
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

				echo $result; 


 ?>