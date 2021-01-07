<?php 
include "./TrueWallet.php";

$wallet = new TrueWallet('p.jeerawat.th@live.com','jeerawatTH2016');
$token = json_decode($wallet->GetToken(),true)['data']['accessToken'];
$profile = $wallet->Profile($token);
//$topup = $wallet->Topup('เลขบบัตรทรูมั่นนี่',$token);

echo $token;
echo $profile;

 ?>