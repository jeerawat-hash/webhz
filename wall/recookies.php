<?php
  require "TrueWalletClass.php"; 
  $tw = new TrueWalletClass("0616619956", "jeerawatTH2016");
  $tw->setAccessToken($access_token);
  $data = $tw->GetProfile();
  print($data["code"]);
 
?>
