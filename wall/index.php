<?php
  require "TrueWalletClass.php";
  $tw = new TrueWalletClass("0616619956", "jeerawatTH2016");

  $tw->setAccessToken("e78c33a0-0bb3-4045-99da-4adbb73e6341");
  $data = $tw->GetTransaction();

  
  //print_r($data);
  
  foreach ($data["data"]["activities"] as $transfer) {
    
    $values = $tw->GetTransactionReport($transfer["report_id"]);
    //print_r($values);
    echo "รายการใหม่ ".$values["data"]["ref1"]." จำนวน "." ".$values["data"]["amount"]." ".$values["data"]["section4"]["column2"]["cell1"]["value"]."<br>"; 
    

  }

  
  
?>
