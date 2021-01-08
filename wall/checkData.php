<?php
  require "TrueWalletClass.php";
  $tw = new TrueWalletClass("0616619956", "jeerawatTH2016");

  $tw->setAccessToken("766a68c1-a9ea-4983-b37d-8508e23c5741");
  $data = $tw->GetTransaction();

  
  //print_r($data);
  
    $ReportCode = $_GET["code"];
 
    
  foreach ($data["data"]["activities"] as $transfer) {
    
    $values = $tw->GetTransactionReport($transfer["report_id"]);
    //print_r($values);

    if( trim($values["data"]["section4"]["column2"]["cell1"]["value"]) == $ReportCode ){

        echo "รายการใหม่ ".$values["data"]["ref1"]." จำนวน "." ".$values["data"]["amount"]." ".$values["data"]["section4"]["column2"]["cell1"]["value"]."<br>"; 

    }

    //echo "รายการใหม่ ".$values["data"]["ref1"]." จำนวน "." ".$values["data"]["amount"]." ".$values["data"]["section4"]["column2"]["cell1"]["value"]."<br>"; 
    
  }

  
  
?>
