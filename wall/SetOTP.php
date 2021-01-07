<?php
  require "TrueWalletClass.php";
  $tw = new TrueWalletClass("0616619956", "jeerawatTH2016");
   
  print_r($tw->SubmitLoginOTP($_GET["otp"], "0616619956", $_GET["ref"]));
  
  $tw->setAccessToken($access_token);
  $data = $tw->GetTransaction();


  print_r($access_token)."<br>";
  print_r($data)."<br>";

  /*
  foreach ($data["data"]["activities"] as $transfer) {
    $values = $tw->GetTransactionReport($transfer["report_id"]);
    print_r($values);
  }
  */

  
  
?>
