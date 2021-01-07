<?php
  require "TrueWalletClass.php";
  $tw = new TrueWalletClass("0616619956", "jeerawatTH2016");
  
  print_r($tw->RequestLoginOTP());
  
  
?>
