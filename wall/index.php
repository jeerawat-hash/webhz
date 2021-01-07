<?php
ob_start();
session_start();
header("Content-type: text/html; charset=utf-8");
set_time_limit(0);
$datenow=date("Y-m-d");
$transaction_leng=14;
include 'common.php';
include 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="KeyWords" content="True money,ทรูมันนี่ ,ตัดบัตรทรู ,auto truemoney" />
<META content="Copyright (c) 2010 thaighost.net All Rights Reserved. Tmtopup.thaighost.net V.1" name=copyright>
<meta name="robots" content="all" />
<meta content='index, follow, all' name='robots'/>
<META Name="Googlebot" Content="index,follow">
<meta name="revisit-after" content="1 days">
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<center>
	<h1>ระบบแจ้งโอนผ่าน True money Wallet อัตโนมัติ</h1>
<font size="2">
<?php
if($_POST[send]){
	if(strlen($_POST[transactionid])<10){
		echo "<script>alert('กรุณากรอก เลขที่อ้างอิง ให้ครบ!');location='';</script>";
	}else{
	$returnserver=tmtopupconnect($tmapi_user,$tmpapi_assword,$truewall_email,$truepassword,my_ip(),$_POST[session],$_POST[transactionid],"yes",$_POST[ref1]);
	}
	if(substr($returnserver,0,2)=="ok"){
		$money_total=substr($returnserver,2); //จำนวนเงินที่ได้รับ
		//-------------------------------------------------กรบวนการเซ็คสำเร็จ สามารถนำไปพัฒนาต่อ อัพเดทยอดบนฐานข้อมูลลูกค้า
		//โดยมี $money_total เป็นค่ายอดเงิน , $_POST[ref1] เป็นตัวอ้างอิง id ลูกค้าที่แจ้งเข้ามา

		echo "<p><h4 style='color:green'>เรียบร้อย</h4></p>
		<p>จำนวนเงิน คือ $money_total บาท</p>
		<p>ขอบคุณที่ใช้บริการครับ !</p>";
		//-------------------------------------------------------------------------------------------
	}else{
		$error=$returnserver;//ค่าผิดพลาด ที่ส่งกลับมา
		
		//-------------------------------------------------------------------------------------------
		echo "<p><h4>ไม่สำเร็จ </h4></p>
		<p>$error</p>
		<p><a href=''>[กลับไปลองอีกครั้ง]</a> </p>";
		//-------------------------------------------------------------------------------------------
	}
} else{
	$capchar_session=capchar(my_ip(),$tmapi_user);
	$returnserver=tmtopupconnect($tmapi_user,$tmpapi_assword,"","","","","","","");
	if($returnserver=="ready"){
?>
<script>
co=0;
function loading(){
	co=co+1;
	switch(co)
	{
		case 1:
		char_load="โปรดรอสักครู่ ครับ |";
		break;
		case 2:
		char_load="โปรดรอสักครู่ ครับ /";
		break;
		case 3:
		char_load="โปรดรอสักครู่ ครับ -";
		break;
		case 4:
		char_load="โปรดรอสักครู่ ครับ \\";
		co=0;
		break;
	}
	document.getElementById("loadvip").innerHTML=char_load;
	setTimeout("loading()", 100);
}	

</script>


	<hr>
	<div align="left">
	<form method="POST" name="tmtopup">
		<INPUT TYPE="hidden" NAME="send" value="ok">
		<INPUT TYPE="hidden" NAME="session" value="<?=$capchar_session?>">
		<table align="center" cellpadding="0" cellspacing="0">
			<tr bgcolor="#F4F2F7"><td colspan="2" align="center"><img src="http://tmwallet.thaighost.net/images/support.jpg"></td></tr>
			<tr bgcolor="#ff9900"><td align="center"><h2>Step 1</h2></td><td align="center"><p><b>โอน - เติมยอดเข้า บัญชี True Money Wallet</b></p><h2><?php echo $truewall_phone; ?></h2>
			<p>แล้วนำเลขอ้างอิงที่ได้รับ มาใส่ใน step2</p></td></tr>
			
			<tr bgcolor="#009966"><td rowspan="2" align="center" bgcolor="#009966"><h2>Step 2</h2></td>
			<td align="center"><br><INPUT TYPE="text" NAME="ref1" placeholder="Ref1 Username" value="<?php echo $_GET[ref1]; ?>" style="width:95%;height:30px;font-size:20px"></td></tr>

			<tr bgcolor="#009966"><td align="center"><br><input name="transactionid" value="" maxlength="<?php echo $transaction_leng; ?>" placeholder="เลขที่อ้างอิง" style="width:95%;height:30px;font-size:20px">
			<div><a href="http://tmwallet.thaighost.net/images/transactionid.jpg" target="_transactionid">ตัวอย่างการดู เลขที่อ้างอิง</a></div></font>
			
			<tr bgcolor="#ff0000"><td colspan="2" align="center"><BR><div id="loadvip"></div>
			<input type="submit" value="แจ้งโอน" name="send" onClick="this.disabled=1;this.value='รอสักครู่กำลังตรวจสอบเลขบัตร...';document.forms[0].submit();loading()" style="height:30px;font-size:20px"></td></tr>
		</table>
	</form>
	</div>
<?php 
	}else if($returnserver=="noready"){
		echo "<p><img src='busy.png'></p><p><b>กำลังมีผู้ทำรายการอยู่ โปรดรอประมาณ 20 วินาที</b> </p>
		<p><a href=''>คลิกเพื่อลองใหม่อีกครั้ง</a></p>";
	}else if($returnserver=="not_connect"){
		echo "<p><img src='notcon.png'></p><p><b>ไม่สามารถติดต่อ Server True Money ได้ โปรดรอสักครู่..</b> </p>
		<p><a href=''>คลิกเพื่อลองใหม่อีกครั้ง</a></p>";
	}else if($returnserver=="block_ip"){
		echo "<p><img src='block_ip.png'></p><p><b>ถูก block ip ชั่วคราว เนื่องจากทำรายการไม่ถูกต้อง เกิน 6 ครั้ง</b> </p>
		<p><a href=''>คลิกเพื่อลองใหม่อีกครั้ง</a></p>";
	}else{
		echo "<p>ยังไม่พร้อมใช้งาน โปรดติดต่อผู้ดูแลระบบ</p>";
	}
}
?>
<hr>
</body>
</html>
