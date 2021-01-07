<?php
  require "TrueWalletClass.php"; 
  $tw = new TrueWalletClass($phone, $password);
  $tw->setAccessToken($access_token);
  $data = $tw->GetProfile();
  print($data["code"]);
 
?>
