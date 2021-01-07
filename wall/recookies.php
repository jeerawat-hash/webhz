<?php
  require "TrueWalletClass.php"; 
  $tw = new TrueWalletClass("0616619956", "jeerawatTH2016");
  $tw->setAccessToken("766a68c1-a9ea-4983-b37d-8508e23c5741");
  $data = $tw->GetProfile();
  print($data["code"]);
 
?>
