<meta http-equiv="refresh" content="60">


<?php
  require "TrueWalletClass.php"; 
  $tw = new TrueWalletClass("0616619956", "jeerawatTH2016");
  $tw->setAccessToken("2ca5e691-92c3-4b5e-8f5a-41ea2d542544");
  $data = $tw->GetProfile();
  print($data["code"]);
 
?>
