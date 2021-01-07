<?php 
	include './manager/TrueWallet.php';
	$wallet = new TrueWallet(); 

	$a = $wallet->GetToken("p.jeerawat.th@live.com","jeerawatTH2016","email");
	 

	echo $a;
	var_dump($a);





?>