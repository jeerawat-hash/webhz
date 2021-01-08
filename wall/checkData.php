<?php
  require "TrueWalletClass.php";
  $tw = new TrueWalletClass("0616619956", "jeerawatTH2016");

  $tw->setAccessToken("766a68c1-a9ea-4983-b37d-8508e23c5741");
  $data = $tw->GetTransaction();

  
  //print_r($data);
  
    $ReportCode = $_GET["code"];
    
    $Status = array();
    $Status["Status"] = "0";

  foreach ($data["data"]["activities"] as $transfer) {
    
    $values = $tw->GetTransactionReport($transfer["report_id"]); 

    if( trim($values["data"]["section4"]["column2"]["cell1"]["value"]) == $ReportCode ){
 
        $Status["Status"] = "1";
        $Status["From"] = $values["data"]["ref1"];
        $Status["Amount"] = $values["data"]["amount"];
        $Status["TransID"] = $values["data"]["section4"]["column2"]["cell1"]["value"];
         
        //echo "รายการใหม่ ".$values["data"]["ref1"]." จำนวน "." ".$values["data"]["amount"]." ".$values["data"]["section4"]["column2"]["cell1"]["value"]."<br>"; 

    }
 
  }

  
  
?>
