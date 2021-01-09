<?php
  require "TrueWalletClass.php"; 
  $tw = new TrueWalletClass("0616619956", "jeerawatTH2016");
  $tw->setAccessToken("e78c33a0-0bb3-4045-99da-4adbb73e6341");
  $data = $tw->GetProfile();
  print($data["code"]);
 
?>
