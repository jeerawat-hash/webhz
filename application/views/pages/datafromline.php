<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hazakura Server จัดการตัวละคร</title>
	<meta charset="UTF-8">
	<meta name='viewport' 
     content='width=device-width, initial-scale=1.0, maximum-scale=1.0, 
     user-scalable=0' >

<!--===============================================================================================-->	
	<link rel="Shortcut Icon" href="https://shop.ran-origin.com/favicon.ico" type="image/x-icon" /> 
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/news/ticker.css">
<!-------- ---> 
<!--  <script src="https://rhz.webclient.me/assets/news/ticker.js"></script> -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
	<script src="https://rhz.webclient.me/assets/Login/vendor/jquery/jquery-3.2.1.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://rhz.webclient.me/assets/Login/vendor/bootstrap/js/popper.js"></script>



</head>

<style type="text/css">
  
  body {
  background: url('https://www.wallpaperup.com/uploads/wallpapers/2015/03/20/641752/f3665753b2003cb766707090965ae050.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
} 
 </style>
 
<body>

	<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <a class="navbar-brand" href="https://rhz.webclient.me/index.php/member">หน้าแรก</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

	<li class="nav-item ">
        <a class="nav-link" href="https://rhz.webclient.me/index.php/member/itemmall">ไอเทมช็อป</a>
      </li>
 
      <li class="nav-item">
        <a class="nav-link  " href="https://rhz.webclient.me/index.php/member/market">ตลาดซื้อขาย</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="https://rhz.webclient.me/index.php/member/mgmt">ฝากขายไอเทม</a>
      </li>

      <li hidden class="nav-item">
        <a class="nav-link " href="https://rhz.webclient.me/index.php/member/topup">เติมเงิน</a>
      </li>

      <li hidden class="nav-item">
        <a class="nav-link " href="https://liff.line.me/1655100623-PK7LaMGz">ถอนเงิน</a>
      </li>
 

    </ul> 
	<form class="form-inline my-2 my-lg-0"> 

	<span class="navbar-text">
	 
	</span>
    <a class="btn btn-lg btn-warning" href="https://rhz.webclient.me/index.php/member/signout"  >ออกจากระบบ</a>

	</form>
  </div>
</nav>

<!--
<div class="ticker-container">
  <div class="ticker-caption">
    <p>ข่าวสาร</p>
  </div>
  <ul>
    <div>
      <li><span>ข่าวสารแจ้งเตือน &ndash; <a href="#">เพิ่มเติม</a></span></li>
    </div> 
  </ul>
</div>
-->







<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
    





 
	<input type="text" readonly hidden id="StoreID" value="<?php echo $UserNum; ?>">
 
	<div class="container">

	<div class="row">
        <div class="col-12"> 

        <div class="jumbotron text-center" style="margin-bottom:0 ; color:white;  background-size: cover; background-image: url('https://www.cheathappens.com/img/walls/o_ranonline_1_6.jpg');" >
        <h1>ฝากขายไอเทมตลาดกลาง</h1>
        <p></p> 
        </div> 
        </div>

	</div>


	<!--
		<div class="row">
			
			<div class="col-6">
				 <LABEL>เรียกดูข้อมูล ID</LABEL>
			</div>
			<div class="col-6">
				 
			</div>

		</div>
	-->
		<div hidden class="row">
			
			<div class="col-12">
				<select disabled id="UserID" class="custom-select">

				<option value="<?php echo $UserNum; ?>"><?php echo $UserName; ?></option>

				</select>
			</div>
		<!--
			<div class="col-6">
				
				<button id="SelectOption" class="btn btn-primary">เลือก</button>
				<button id="ReloadPage" class="btn btn-danger">โหลดข้อมูลใหม่</button>

			</div>
		-->
		</div>
		<!---------------------------- ------>
 
		<div class="row">
			
			<div class="col-6">
				 <LABEL>เลือกตัวละคร</LABEL>
			</div>
			<div class="col-6">
				 
			</div>

		</div>

		<div class="row">
			
			<div class="col-12">
				<select id="ChaID" class="custom-select">

				<option value="0">----- เลือก ตัวละคร ที่ต้องการดูข้อมูล -----</option>

				</select>
			</div>
			<!--
			<div class="col-6">
				
				<button id="SelectInventory" class="btn btn-success">เรียกดูข้อมูลช่องเก็บของ</button>

			</div>
			-->
		</div>



		<div class="row">
			
			<div class="col-4"> 
 				
 				<label>ยอดเงินในเกม : </label>
 				<font color="red"><label id="MoneyLable">0</label> </font> เหรียญ
 				 
			</div>
			<div class="col-4"> 
 				
 				<label>ยอดพ้อยแลกเปลี่ยน : </label>
 				<font color="green"><label class="MoneyPoint">0</label> </font> พ้อย
 				 
			</div> 
			<div hidden class="col-4"> 
 				
 				<label > <font color="red">ยอดเงินที่สามารถถอนได้</font> : </label>
 				<font  color="green"><label class="MoneyPoint">0</label> </font> บาท
 				 
			</div> 

		</div>

		<div class="row">
			
			<div class="col-6"> 
 				
 				<label>ช่องเก็บของว่าง : </label>
 				<font color="green"><label id="InvEmpty"></label> </font> ช่อง
 				
 
			</div> 
			<div class="col-6"> 
 				
 				<label>ใช้งานช่อง : </label>
 				<font color="red"><label id="InvUse"></label> </font> ช่อง 
 				
 
			</div> 

		</div>

		<div class="row">
			
			<div class="col-6"> 
 				 
 
				<button id="TableInventoryBTN" class="btn btn-info">ช่องเก็บของตัวละคร</button>

			</div> 
			<div class="col-6"> 
 				 
				<button id="TableInvSaleBTN" class="btn btn-warning">ไอเทมฝากขาย</button>

 
			</div> 

		</div>

		<div id="TableInventory" class="row">
			
			<div class="col-12" class="table-responsive">

				<table id="ChaTable" width="100%" class="table">
				  <thead>
				    <tr>
				      <th >ตำแหน่ง</th>
				      <th >ชื่อ</th>
				      <th >จำนวน</th>
				      <th >ดำเนินการ</th> 
				    </tr>
				  </thead>
				  <tbody id="ChaTableContent">
				    
				  </tbody>
				  
				</table>



			</div> 

		</div>


		<div id="TableInvSale" class="row">
			
			<div class="col-12" class="table-responsive">

				<table id="ChaInvSaleTable" width="100%" class="table">
				  <thead>
				    <tr> 
				      <th >ตัวละคร</th>
				      <th >ชื่อ</th>
				      <th >ราคา</th> 
				      <th >ดำเนินการ</th> 
				    </tr>
				  </thead>
				  <tbody id="TableInvSaleContent">
				    
				  </tbody>
				  
				</table>



			</div> 

		</div>
		

	</div>

	</div>
  </div>
</div>

 
	
	<!-- Modal Sale -->
	<div class="modal fade" id="SaleItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	       <font color="red"><h5 class="modal-title" id="exampleModalLabel">Modal title</h5></font> 
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
 

				<input type="text" hidden readonly name="ChaNum" id="ChaNum">	
				<input type="text" hidden readonly name="ItemMEM" id="ItemMEM">	
				<input type="text" hidden readonly name="ItemCode" id="ItemCode">	
				<input type="text" hidden readonly name="Enhance" id="Enhance">	
				<input type="text" hidden readonly name="ItemQty" id="ItemQty"> 
	      		
	      		<div class="container">
	      			<div class="row">
	      				<div hidden class="col-12">
	      					  <div class="custom-file">
							    <input accept='image/*' type="file" class="custom-file-input" id="ItemIMG">
							    <label id="ItemIMGLB" class="custom-file-label" for="customFile">เลือกภาพ</label>
							  </div>

	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-12">
	      						
	      					<div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text">฿</span>
							  </div>
							  <input type="text" id="Price" pattern="^([0-9]?[0-9]?[0-9]?|)$"  class="form-control" aria-label="Amount (to the nearest baththai)">
							  <div class="input-group-append">
							    <span class="input-group-text">พ้อย</span>
							  </div>
							</div>


	      				</div>

	      			</div>
	      		</div>

	      </div>
	      <div class="modal-footer"> 
	      	<div class="spinner-border text-success " id="preload" role="status">
			  <span class="sr-only">Loading...</span>
			</div>
	        <button type="button" class="btn btn-success" id="SendData">บันทึก</button>
	        <button type="button" class="btn btn-warning" data-dismiss="modal">ปิด</button>
	      </div>
	    </div>
	  </div>
	</div>


	








  
<!--===============================================================================================-->



	<script type="text/javascript">
		$(".custom-file-input").on("change", function() {
		  var fileName = $(this).val().split("\\").pop();
		  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});
/*
			document.addEventListener('contextmenu', event => event.preventDefault());

			setInterval(function(){
			  var startTime = performance.now(), check, diff;
			  for (check = 0; check < 1000; check++){
			    //console.log(check);
			    console.clear();
			  }
			  diff = performance.now() - startTime;
			  if (diff > 200){
 
			    debugger;

			  }
			}, 200); */
 		 
			setInterval(function(){ 

 				var StoreID = $("#StoreID").val();

				 if(StoreID == "null"){

				swal("Alert","กรุณาเข้าสู่ระบบก่อนใช้งาน", "warning");
				location.href = 'https://rhz.webclient.me/index.php/member/signout';

				}

 				if (StoreID != "") {
 
 					$.post("https://cac.webclient.me/api/getDataIsLogin.php",{
							UserNum : StoreID
						},function(data){
  	
  							////console.log(data);
							  
							  	if (data == 1) {
                    
									swal("Alert","ตรวจพบการ Login ภายในเกมกรุณาออกจากเกมก่อนใช้งานระบบ", "warning");
									
									setTimeout(function(){ 
										
										location.href = 'https://rhz.webclient.me/index.php/member/signout';
									
									}, 3000);

									

								} 
 
  
					});



 				}
 

			}, 500);



	</script>


  
      <script>
 
		$(function(){

/* /// line 
            setInterval(function(){ 
  
 					$.post("https://cac.webclient.me/api/getDataUserPointFromLine.php",{
							LineID : Line
						},function(data){
  	
  							//console.log(data);
  							var objectMoney = JSON.parse(data);
  							//console.log(objectMoney);
							$(".MoneyPoint").text(objectMoney.Point);
							
					});
  

			}, 1000);
*/	 /// line 

			setInterval(function(){ 

			var IDRAN = $("#UserID option:selected").val(); 
				$.post("https://cac.webclient.me/api/getDataUserPointFromUserNum.php",{
						UserNum : IDRAN
					},function(data){

						//console.log(data);
						var objectMoney = JSON.parse(data);
						//console.log(objectMoney.Point);
						$(".MoneyPoint").text(objectMoney.Point);
				});


			}, 1000);




            //swal("สำเร็จ !!","ระบบกำลังปิดหน้าลงทะเบียน....", "success");
 			/*
            $.post("https://cac.webclient.me/api/getDataIDFromLineID.php",{
					LineID : Line
				},function(data){


					var Obj = JSON.parse(data);
					//console.log(Obj);

					if (Obj.length == 0) {
						swal("ไม่พบข้อมูล","ไม่พบข้อมูลหรือตัวละครกำลังอยู่ในเกม", "error");
						return false;
					}

					for (var i = 0; i < Obj.UserName.length; i++) { 

						$("#UserID").append(new Option(Obj.UserName[i], Obj.UserNum[i]));

					}
 
			});
*/
            ////////
			$("#TableInvSale").hide();
			///////



			$("#TableInventoryBTN").on("click",function(){

				$("#TableInvSale").hide();
				$("#TableInventory").show();
				$("#ChaTableContent").html("");

				var IDRAN = $("#UserID option:selected").val(); 
				var ChaID = $("#ChaID option:selected").val(); 

				/*
				if (IDRAN.trim() == 0) {
					swal("กรุณาเลือกID !!","กรุณาระบุข้อมูลใหม่", "error");
					$("#UserID").attr('disabled',false);
					return false;
				}*/
				if (ChaID.trim() == 0) {
					swal("กรุณาเลือกตัวละคร !!","กรุณาระบุข้อมูลใหม่", "error");
					//$("#UserID").attr('disabled',false);
					return false;
				}

 				
					$.post("https://cac.webclient.me/api/getDataInvenFromUserNum.php",{
					ChaNum : ChaID
					},function(data){
						$("#ChaTableContent").html("");
						//swal("สำเร็จ !!","เรียกดูข้อมูลช่องเก็บของตัวละครสำเร็จ", "success");
						var Obj = JSON.parse(data); 

						$("#MoneyLable").text(Obj.gold);
						$("#InvEmpty").text(Obj.tab1.INVEMPTY);
						$("#InvUse").text(Obj.tab1.INVUSE);
	 					 
						var tablehtml = "";  
						for (var i = 0; i < Obj.tab1.ItemID.length; i++) { 

							var enhance = 0;

							if (Obj.tab1.DMG_GRADE[i] == 0) {
								enhance = Obj.tab1.DEF_GRADE[i];
							}else
							if (Obj.tab1.DEF_GRADE[i] == 0) {
								enhance = Obj.tab1.DMG_GRADE[i];
							}

							var ItemQTY = 1;

							if (Obj.tab1.QTY[i] == 0) {
								ItemQTY = 1;
							}else{
								ItemQTY = Obj.tab1.QTY[i];
							}

							tablehtml += "<tr>"+
									      "<td>Row "+Obj.tab1.X[i]+" Col "+Obj.tab1.Y[i]+"</td>"+
									      "<td>"+Obj.tab1.ItemName[i]+" <font color='red'>ตีบวก </font>"+enhance+"</td>"+
									      "<td> <font color='red'>"+ItemQTY+"</font> ชิ้น</td>"+
									      "<td><button class='btn btn-success isSale' itemName='"+Obj.tab1.ItemName[i]+" ตีบวก "+enhance+"' itemqty='"+ItemQTY+"' enhance='"+enhance+"' ItemID='"+Obj.tab1.ItemID[i]+"' itemInfo='"+Obj.tab1.MEM[i]+"'>ฝากขาย </button>   </td>"+
									    "</tr> "; 
						}

						
						
						$("#ChaTableContent").html(tablehtml);

						//$("#ChaID").attr('disabled','disabled');
						 
	 
					}); 






			});





 



			$("#TableInvSaleBTN").on("click",function(){

 				
				$("#TableInvSaleContent").html("");
				$("#TableInvSale").show();
				$("#TableInventory").hide();
  
				var IDRAN = $("#UserID option:selected").val(); 
				
/////////////////////////////////////////////////////////////////////////////////////////////

				$.post("https://cac.webclient.me/api/getDataSaleFromUserNum.php",{
					UserNum : IDRAN
					},function(data){

						$("#TableInvSaleContent").html("");
						//swal("สำเร็จ !!","เรียกดูข้อมูลช่องเก็บของตัวละครสำเร็จ", "success");
						var Obj = JSON.parse(data); 
   						//console.log(Obj);
   						var tablehtml = "";   
   						for (var i = 0; i < Obj.ChaName.length; i++) {
 
   							tablehtml += "<tr>"+
									      "<td>"+Obj.ChaName[i]+"</td>"+
									      "<td>"+Obj.ItemName[i]+"</td>"+
									      "<td><font color='red'>"+Obj.Price[i]+"</font> พ้อย</td>"+
									      "<td><button class='btn btn-danger isReInv' ChaNum='"+Obj.ChaNum[i]+"' ShopMapID='"+Obj.ID[i]+"'>เรียกคืนไอเทม</button></td>"+
									    "</tr> "; 


   						}
 
						
						$("#TableInvSaleContent").html(tablehtml);
 
	 
					}); 
/////////////////////////////////////////////////////////////////////////////////////////////
			});



			$("#TableInvSale").on("click",'.isReInv',function(){

				var ShopMap = $(this).attr("ShopMapID");  
			 	
				var btnA = $("#TableInvSale").find(this); 

			 	btnA.text("กำลังดำเนินการ....");
				btnA.attr("disabled", true);

				var IDRAN = $("#UserID option:selected").val(); 


				$.post("https://cac.webclient.me/api/addReInvItem.php",{
					ShopMapID : ShopMap
					},function(data){
  	 
						if (data != 1) {
							swal("ERROR !!","มีบางอย่างผิดปกติ ตัวละครกำลังอยู่ในเกม ,ไอเทมนี้ ถูกขายไปแล้ว หรือ ช่องเก็บของเต็ม !!!!", "error");

							btnA.text("เรียกคืนไอเทม");
							btnA.attr("disabled", false);

							return false;
						}



						swal("สำเร็จ !!","นำไอเทมกลับสู่ตัวละครสำเร็จ", "success"); 
						$.post("https://cac.webclient.me/api/getDataSaleFromUserNum.php",{
							UserNum : IDRAN
							},function(data){

								$("#TableInvSaleContent").html("");
								//swal("สำเร็จ !!","เรียกดูข้อมูลช่องเก็บของตัวละครสำเร็จ", "success");
								var Obj = JSON.parse(data); 
		   						 
		   						var tablehtml = "";   
		   						for (var i = 0; i < Obj.ChaName.length; i++) {
		 
		   							tablehtml += "<tr>"+
											      "<td>"+Obj.ChaName[i]+"</td>"+
											      "<td>"+Obj.ItemName[i]+"</td>"+
											      "<td><font color='red'>"+Obj.Price[i]+"</font> พ้อย</td>"+
											      "<td><button class='btn btn-danger isReInv' ChaNum='"+Obj.ChaNum[i]+"' ShopMapID='"+Obj.ID[i]+"'>เรียกคืนไอเทม</button></td>"+
											    "</tr> "; 
 
		   						}
		 
								
								$("#TableInvSaleContent").html(tablehtml);
		 
			 
							});






					}); 








			});






			/*
            $("#ReloadPage").on("click",function(){

				$("#UserID").html('<option value="0">----- เลือก ID ที่ต้องการดูข้อมูล -----</option>');
				$("#ChaID").html('<option value="0">----- เลือก ตัวละคร ที่ต้องการดูข้อมูล -----</option>');
				$("#ChaTableContent").html(""); 
				$("#MoneyLable").text("0");
				$("#InvEmpty").text("");
				$("#InvUse").text("");
				$("#UserID").attr('disabled',false);
				$("#ChaID").attr('disabled',false);
 

            	$.post("https://cac.webclient.me/api/getDataIDFromLineID.php",{
					LineID : Line
					},function(data){


						var Obj = JSON.parse(data);
						//console.log(Obj);

						if (Obj.length == 0) {
							swal("ไม่พบข้อมูล","ไม่พบข้อมูล", "error");
							return false;
						}

						for (var i = 0; i < Obj.UserName.length; i++) { 

							$("#UserID").append(new Option(Obj.UserName[i], Obj.UserNum[i]));

						}
						swal("ReloadPage","โหลดค่าใหม่สำเร็จ", "info");

	 
				});



            });*/



			//$("#SelectOption").on("click",function(){
			$( document ).ready(function(){
 				


 				$("#UserID").attr('disabled','disabled');


				$("#ChaTableContent").html("");

				$("#MoneyLable").text("0");
				$("#InvEmpty").text("");
				$("#InvUse").text("");

				$("#ChaID").html('<option value="0">----- เลือก ตัวละคร ที่ต้องการดูข้อมูล -----</option>');

				var IDRAN = $("#UserID option:selected").val(); 
				//swal("สำเร็จ !!","เรียกดูข้อมูลสำเร็จ", "success");


				if (IDRAN.trim() == 0) {
					swal("กรุณาเลือกID !!","กรุณาระบุข้อมูลใหม่", "error");
					$("#UserID").attr('disabled',false);
					return false;
				}

				$.post("https://cac.webclient.me/api/getDataChaFromUserNum.php",{
					UserNum : IDRAN
				},function(data){


					var Obj = JSON.parse(data);
					//console.log(Obj);

					if (Obj.length == 0) {
						swal("ไม่พบตัวละคร","ไม่พบตัวละคร", "error");
						return false;
					}

					//$("#StoreID").val(IDRAN);

					for (var i = 0; i < Obj.UserNum.length; i++) { 

						$("#ChaID").append(new Option(Obj.ChaName[i], Obj.ChaNum[i]));

					}

					
 
				});
  
			});





			//$("#SelectInventory").on("click",function(){
			$("#ChaID").on("change",function(){
 
 				//////////////// clear inven
				$("#ChaTableContent").html(""); 
				$("#MoneyLable").text("0");
				$("#InvEmpty").text("");
				$("#InvUse").text("");
				//$("#ChaID").attr('disabled','disabled');
 				//ChaNum
 				//////////////// clear inven
				var ChaID = $("#ChaID option:selected").val(); 
				///swal("สำเร็จ !!","เรียกดูข้อมูลสำเร็จ", "success");


				if (ChaID.trim() == 0) {
					swal("กรุณาระบุเลือกตัวละคร !!","กรุณาระบุข้อมูลใหม่", "error");
					$("#ChaID").attr('disabled',false);
					return false;
				}
 
				$.post("https://cac.webclient.me/api/getDataInvenFromUserNum.php",{
					ChaNum : ChaID
				},function(data){

					swal("สำเร็จ !!","เรียกดูข้อมูลภายในช่องเก็บของสำเร็จ", "success");
					var Obj = JSON.parse(data);
					//console.log(Obj);
					$("#MoneyLable").text(Obj.gold);
					$("#InvEmpty").text(Obj.tab1.INVEMPTY);
					$("#InvUse").text(Obj.tab1.INVUSE);
 					

					var tablehtml = ""; 

					for (var i = 0; i < Obj.tab1.ItemID.length; i++) { 

						var enhance = 0;

						if (Obj.tab1.DMG_GRADE[i] == 0) {
							enhance = Obj.tab1.DEF_GRADE[i];
						}else
						if (Obj.tab1.DEF_GRADE[i] == 0) {
							enhance = Obj.tab1.DMG_GRADE[i];
						}

						var ItemQTY = 1;

							if (Obj.tab1.QTY[i] == 0) {
								ItemQTY = 1;
							}else{
								ItemQTY = Obj.tab1.QTY[i];
							}


						tablehtml += "<tr>"+
								      "<td>Row "+Obj.tab1.X[i]+" Col "+Obj.tab1.Y[i]+"</td>"+
								      "<td>"+Obj.tab1.ItemName[i]+" <font color='red'>ตีบวก </font>"+enhance+"</td>"+
								      "<td> <font color='red'>"+ItemQTY+"</font> ชิ้น</td>"+
								      "<td><button class='btn btn-success isSale' itemName='"+Obj.tab1.ItemName[i]+" ตีบวก "+enhance+"' itemqty='"+ItemQTY+"' enhance='"+enhance+"' ItemID='"+Obj.tab1.ItemID[i]+"' itemInfo='"+Obj.tab1.MEM[i]+"'>ฝากขาย</button></td>"+
								    "</tr> "; 
					}

					
					
					$("#ChaTableContent").html(tablehtml);
 
				}); 

			});

 







			$('#SaleItemModal').find("#SendData").on("click",function(){


				$('#SaleItemModal').find("#SendData").hide();
				$('#SaleItemModal').find("#preload").show();




				setTimeout(function(){ 

							var ChaID = $('#SaleItemModal').find("#ChaNum").val();
							var itemInfo = $('#SaleItemModal').find("#ItemMEM").val();
							var ItemIDa = $('#SaleItemModal').find("#ItemCode").val();
							var enhance = $('#SaleItemModal').find("#Enhance").val();
							var Itemqty = $('#SaleItemModal').find("#ItemQty").val();
							var Price = $('#SaleItemModal').find("#Price").val();

							if (Price <= 0) {
								swal("ผิดพลาด !!","กรุณาระบุยอดพ้อยที่ต้องการขาย", "error");
								return false;
							}

							var data = new FormData();          
					        var ItemIMG = $('#ItemIMG').prop('files')[0]; 

					        data.append('ItemIMG', ItemIMG);  
					        data.append('ChaNum', ChaID);  
					        data.append('ItemMEM', itemInfo);  
					        data.append('ItemCode', ItemIDa);  
					        data.append('Enhance', enhance);  
					        data.append('ItemQty', Itemqty);  
					        data.append('Price', Price);  


					        $.ajax({
					        	url:"https://cac.webclient.me/api/addItemToShop.php",
					        	type:"POST",
					        	data:data,
					        	contentType : false,
					        	cache : false,
					        	processData : false,
					        	success : function(data){
 
					        		//console.log(data);
					        		
					        		$.post("https://cac.webclient.me/api/getDataInvenFromUserNum.php",{
									ChaNum : ChaID
									},function(data){
 
										$('#SaleItemModal').find("#SendData").show();
										$('#SaleItemModal').find("#preload").hide();

										$('#SaleItemModal').modal("hide");
 
										swal("สำเร็จ !!","ดำเนินการเพิ่มไอเทมเข้าตลาดสำเร็จ", "success");
										var Obj = JSON.parse(data); 

										$("#MoneyLable").text(Obj.gold);
										$("#InvEmpty").text(Obj.tab1.INVEMPTY);
										$("#InvUse").text(Obj.tab1.INVUSE);
					 					 
										var tablehtml = "";  
										for (var i = 0; i < Obj.tab1.ItemID.length; i++) { 

											var enhance = 0;

											if (Obj.tab1.DMG_GRADE[i] == 0) {
												enhance = Obj.tab1.DEF_GRADE[i];
											}else
											if (Obj.tab1.DEF_GRADE[i] == 0) {
												enhance = Obj.tab1.DMG_GRADE[i];
											}
											var ItemQTY = 1;

											if (Obj.tab1.QTY[i] == 0) {
												ItemQTY = 1;
											}else{
												ItemQTY = Obj.tab1.QTY[i];
											}

											tablehtml += "<tr>"+
													      "<td>Row "+Obj.tab1.X[i]+" Col "+Obj.tab1.Y[i]+"</td>"+
													      "<td>"+Obj.tab1.ItemName[i]+" <font color='red'>ตีบวก </font>"+enhance+"</td>"+
													      "<td> <font color='red'>"+ItemQTY+"</font> ชิ้น</td>"+
													      "<td><button class='btn btn-success isSale' itemName='"+Obj.tab1.ItemName[i]+" ตีบวก "+enhance+"' itemqty='"+ItemQTY+"' enhance='"+enhance+"' ItemID='"+Obj.tab1.ItemID[i]+"' itemInfo='"+Obj.tab1.MEM[i]+"'>ฝากขาย</button></td>"+
													    "</tr> "; 
										}

										
										
										$("#ChaTableContent").html(tablehtml);
					 
									}); 

					 

					        	},
					        	error : function(){


					        	}
					        });
 
 
				}, 1000);

  
			});


			$("#ChaTable").on("click",".isSale",function(){

				//swal("click","----", "info");

				$("#SaleItemModal").find("#ItemIMG").val("");
				$("#SaleItemModal").find("#Price").val("0");
				$("#SaleItemModal").find("#ItemIMGLB").text("เลือกภาพ");
		 
				var itemInfo = $(this).attr("itemInfo");
				var IDRAN = $("#UserID option:selected").val(); 
				var ChaID = $("#ChaID option:selected").val(); 
				var ItemIDa = $(this).attr("ItemID");
				var enhance = $(this).attr("enhance");
				var itemNameA = $(this).attr("itemName");
				//alert(IDRAN+" "+ChaID+" "+itemInfo);
				var Itemqty = $(this).attr("itemqty");
				
				$('#SaleItemModal').modal({backdrop: 'static', keyboard: false});

				$('#SaleItemModal').find("#exampleModalLabel").text(itemNameA);

				$('#SaleItemModal').find("#ChaNum").val(ChaID);
				$('#SaleItemModal').find("#ItemMEM").val(itemInfo);
				$('#SaleItemModal').find("#ItemCode").val(ItemIDa);
				$('#SaleItemModal').find("#Enhance").val(enhance);
				$('#SaleItemModal').find("#ItemQty").val(Itemqty);

				$('#SaleItemModal').find("#preload").hide();
 	 
				$("#SaleItemModal").modal("show");
   

			});
 

		});
              
  </script>

  

 </body>

