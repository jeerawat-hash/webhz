
<?php 


use Maythiwat\walleTransfer; 
$transfer = new walleTransfer();

// Login with Email & Password
$token = $transfer->GetToken('p.jeerawat.th@live.com', 'jeerawatTH2019');
echo $token;
// Login with Phone & PIN
$token = $transfer->GetToken('0616619956', 'jeerawatTH2019', 'phone');
echo $token;

// Logout
echo  $transfer->Logout($token);






 ?>






<?php

namespace Maythiwat;
class walleTransfer {
    public function Request($method = 'GET', $url, $header = false, $data = false) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'okhttp/3.8.0');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if ($header) curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        if ($data) curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        return curl_exec($ch);
    }
    public function GetToken($user, $pass, $type = 'email') {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/signin";
        $header = array("Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json");
        $data = array("username"=>$user, "password"=>sha1($user.$pass), "type"=>$type);
        return @json_decode($this->Request('POST', $url, $header, json_encode($data)), true)['data']['accessToken'];
    }
    
    public function Logout($token) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/signout/{$token}";
        $header = array("Host: mobile-api-gateway.truemoney.com");
        return @json_decode($this->Request('GET', $url, $header, false), true);
    }
	
	public function transaction_draft($token, $mobile, $amount) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/transfer/draft-transaction/{$token}";
        $data = array("amount"=>$amount, "mobileNumber"=>$mobile);
		$data = json_encode($data);
        $header = array("Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json");
        return @json_decode($this->Request('POST', $url, $header, $data), true)['data']['draftTransactionID'];		
    }
	
	public function transaction_otp_send($token, $transaction_id, $personalMessage="") {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/transfer/draft-transaction/{$transaction_id}/send-otp/{$token}";
        $data = array("personalMessage"=>$personalMessage);
		$data = json_encode($data);
        $header = array("Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json");
        return @json_decode($this->Request('PUT', $url, $header, $data), true);
    }
	
	public function transaction_transfer($token, $mobile, $transaction_id, $otpString, $otpRefCode) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/transfer/transaction/{$transaction_id}/{$token}";
        $data = array("mobileNumber"=>$mobile, "otpString"=>$otpString, "otpRefCode"=>$otpRefCode);
		$data = json_encode($data);
        $header = array("Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json");
        return @json_decode($this->Request('POST', $url, $header, $data), true);
    }	
	
	public function transaction_transfer_status($token, $transaction_id) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/transfer/transaction/{$transaction_id}/status/{$token}";
        $header = array("Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json");
        return @json_decode($this->Request('POST', $url, $header), true);
    }
	
	public function transaction_transfer_summery($token, $transaction_id) {
        $url = "https://mobile-api-gateway.truemoney.com/mobile-api-gateway/api/v1/transfer/transaction/{$transaction_id}/{$token}";
        $header = array("Host: mobile-api-gateway.truemoney.com", "Content-Type: application/json");
        return @json_decode($this->Request('POST', $url, $header), true);
    }	
	
}
?>
