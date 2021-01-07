<?php
	ini_set('display_errors', 1);
	include_once('manager/TrueWallet.php');
	$wallet = new TrueWallet(); 

	$a = $wallet->GetToken("p.jeerawat.th@live.com","jeerawatTH2016","email");
	 

	echo $a;





?>