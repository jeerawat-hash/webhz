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

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
 
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
</head>
 
 <style type="text/css">
 	.responsive {
  width: 100%;
  height: auto;
}/*
body {
  background: url('https://img.techpowerup.org/101021/NCapture1946.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}*/
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
        <a class="nav-link active " href="https://rhz.webclient.me/index.php/member/market">ตลาดซื้อขาย</a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="https://rhz.webclient.me/index.php/member/mgmt">ฝากขายไอเทม</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="https://rhz.webclient.me/index.php/member/topup">เติมเงิน</a>
      </li>

      <li hidden class="nav-item">
        <a class="nav-link " href="https://liff.line.me/1655100623-PK7LaMGz">ถอนเงิน</a>
      </li>
 

    </ul> 
	<form class="form-inline my-2 my-lg-0"> 

	<span class="navbar-text">
	<?php echo $UserName ;?>
	</span>
	<a class="btn btn-sm btn-outline-secondary" href="https://rhz.webclient.me/index.php/member/signout"  >ออกจากระบบ</a>

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
			
			<div class="col-6">
				 <LABEL>เรียกดูข้อมูล ID</LABEL>
			</div>
			<div class="col-6">
				 
			</div>

		</div>

		<div class="row">
			
			<div class="col-6">
				<select disabled id="UserID" class="custom-select">

				<option value="<?php echo $UserNum; ?>"><?php echo $UserName; ?></option>

				</select>
			</div>
			
			<div class="col-6">
				
				<button id="SelectOption" class="btn btn-primary">เลือก</button>
				<button id="ReloadPage" class="btn btn-danger">โหลดข้อมูลใหม่</button>

			</div>

		</div>
		<!---------------------------- ------>
 
		<div class="row">
			
			<div class="col-6">
				 <LABEL>ตัวละคร</LABEL>
			</div>
			<div class="col-6">
				 
			</div>

		</div>

		<div class="row">
			
			<div class="col-6">
				<select id="ChaID" class="custom-select">

				<option value="0">----- เลือก ตัวละคร ที่ต้องการดูข้อมูล -----</option>

				</select>
			</div>
			<div class="col-6">
				
				<button id="SelectCharBUY" class="btn btn-info">เลือกตัวละคร</button>

			</div>

		</div>



		<div class="row">
			 
			<div class="col-6"> 
 				
 				<label>ยอดพ้อยแลกเปลี่ยน : </label>
 				<font color="green"><label class="MoneyPoint">0</label> </font> พ้อย
 				 
			</div> 
			<div class="col-6"> 
 				
 				<label> <font color="red">ยอดเงินที่สามารถถอนได้</font> : </label>
 				<font color="green"><label class="MoneyPoint">0</label> </font> บาท
 				 
			</div> 

		</div>

 


		<div id="TableSale" class="row">
			
			<div class="col-12" class="table-responsive">

				<table id="TableSale" width="100%" class="table">
				  <thead>
				    <tr> 
				      <th >ตัวละคร</th>
				      <th >ชื่อ</th>
				      <th >ราคา</th> 
				      <th >ดำเนินการ</th> 
				    </tr>
				  </thead>
				  <tbody id="TableSaleContent">
				    
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
 	
 			<div class="container">
 				<div class="row">
 					<!--
 					<div  class="col-12">
 						<img hidden src="#" id="ImageURL" class="responsive img-responsive">
 					</div>
 					-->

 					<div  class="col-12">
 						 	
 						 	<table width="100%" class="table">
	 						 
	 						 <thead>
							    <tr> 
							      <th>เรท</th>
							      <th>ค่า</th> 
							    </tr>
							 </thead>

							  <tbody id="TableItemDetail">
							    	
							    	

							  </tbody>
							  
							</table>

 					</div>

 				</div>
 			</div>


	      </div>
	      <div class="modal-footer">   
	        <button type="button" class="btn btn-warning" data-dismiss="modal">ปิด</button>
	      </div>
	    </div>
	  </div>
	</div>
 
	






 

	<script type="text/javascript">
 
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
			}, 200); 
 		   
			setInterval(function(){ 

 				var StoreID = $("#StoreID").val();

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


 
    <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
      <script>
		  
		  $(function(){

 
            //swal("สำเร็จ !!","ระบบกำลังปิดหน้าลงทะเบียน....", "success");
 			/*
            setInterval(function(){ 
  
 					$.post("https://cac.webclient.me/api/getDataUserPointFromLine.php",{
							LineID : Line
						},function(data){
  	
  							//console.log(data);
  							var objectMoney = JSON.parse(data);
  							//console.log(objectMoney.Point);
							$(".MoneyPoint").text(objectMoney.Point);
					});
  

			}, 1000);
			*/






/*

            $.post("https://cac.webclient.me/api/getDataIDFromLineID.php",{
					LineID : Line
				},function(data){


					var Obj = JSON.parse(data);
					//console.log(Obj);

					if (Obj.length == 0) {
						swal("ไม่พบข้อมูล","ไม่พบข้อมูลหรือไอดีกำลังอยู่ในระบบ กรุณาออกจากเกมก่อนดำเนินการ", "error");
						return false;
					}

					for (var i = 0; i < Obj.UserName.length; i++) { 

						$("#UserID").append(new Option(Obj.UserName[i], Obj.UserNum[i]));

					}
 
			});
*/
 			

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



            });
*/


			//$("#SelectOption").on("click",function(){
			$( document ).ready(function(){
 				


 				$("#UserID").attr('disabled','disabled');


				$("#ChaTableContent").html("");

				$("#MoneyLable").text("0");
				$("#InvEmpty").text("");
				$("#InvUse").text("");

				$("#ChaID").html('<option value="0">----- เลือก ตัวละคร ที่ต้องการดูข้อมูล -----</option>');

				var IDRAN = $("#UserID option:selected").val(); 
				swal("สำเร็จ !!","เรียกดูข้อมูลสำเร็จ", "success");


				if (IDRAN.trim() == 0) {
					swal("กรุณาเลือก ID !!","กรุณาระบุข้อมูลใหม่", "error");
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



			//$("#SelectCharBUY").on("click",function(){
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
					swal("ผิดพลาด !!","กรุณาเลือกตัวละคร", "error");
					$("#ChaID").attr('disabled',false);
					return false;
				}
 
				$.post("https://cac.webclient.me/api/getDataInvenFromUserNum.php",{
					ChaNum : ChaID
				},function(data){

					swal("สำเร็จ !!","เลือกตัวละครสำเร็จ", "success");
					var Obj = JSON.parse(data);
					//console.log(Obj);
				  
					 
 
				}); 

			});





			///////////////////// getdata table ////////////////////////
			setInterval(function(){ 
			$.post("https://cac.webclient.me/api/getDataMarketSaleFromnotinLineID.php",{
					LineID : Line
					},function(data){

						$("#TableSaleContent").html("");
						//swal("สำเร็จ !!","เรียกดูข้อมูลช่องเก็บของตัวละครสำเร็จ", "success");
						var Obj = JSON.parse(data); 
   						//console.log(Obj);
   						var tablehtml = "";   
   						for (var i = 0; i < Obj.ChaName.length; i++) {
 							
 							var itemqty = "<font color='red'>1</font> ชิ้น";

 							if (Obj.ItemQTY[i] > 1) {
 								itemqty = "<font color='red'>"+Obj.ItemQTY[i]+"</font> ชิ้น"+" (<font color='red'>ขายทั้งหมด</font>)";
 							}

 							var Enhance = "";

 							if (Obj.Enhance[i] != 0) {
 								Enhance = "<font color='red'> +"+Obj.Enhance[i]+"</font>";
 							}

   							tablehtml += "<tr>"+
									      "<td>"+Obj.ChaName[i]+"</td>"+
									      "<td>"+Obj.ItemName[i]+" "+itemqty+" "+Enhance+"</td>"+
									      "<td> <font color='red'> "+Obj.Price[i]+" </font> พ้อย</td>"+
									      "<td><button class='btn btn-warning isCheck' ShopItemName='"+Obj.ItemName[i]+"' ShopMapID='"+Obj.ID[i]+"' ShopMapIDIMG='"+Obj.ImageURL[i]+"'>ดูข้อมูล</button> <button class='btn btn-success isBuyItem' ShopMapID='"+Obj.ID[i]+"'>ซื้อไอเทม</button></td>"+
									    "</tr> "; 


   						}
 
						
						$("#TableSaleContent").html(tablehtml); 

			}); 
			}, 500);
			///////////////////// getdata table ////////////////////////




			$("#TableSale").on("click",'.isBuyItem',function(){

				var ShopMap = $(this).attr("ShopMapID");  
			  	var ChaID = $("#ChaID option:selected").val(); 
				  
			  	if (ChaID.trim() == 0) {
					swal("ERROR !!","ไม่พบตัวละครที่ต้องการซื้อไอเทม", "error");
					$("#ChaID").attr('disabled',false);
					return false;
				}
				$("#ChaID").attr('disabled','disabled');
 
				//alert(ShopMap + ChaID + Line);

				var btnA = $("#TableSale").find(this); 

			 	btnA.text("กำลังทำรายการ....");
				btnA.attr("disabled", true);

				$.post("https://cac.webclient.me/api/addItemChaBuy.php",{
					ShopMapID : ShopMap,
					ChaNum : ChaID
					},function(data){
  	 
						if (data != 1) {
							swal("ERROR !!","มีบางอย่างผิดปกติ ตัวละครกำลังอยู่ในเกม,ไอเทมนี้ ถูกขายไปแล้ว,ช่องเก็บของตัวละครเต็ม,พ้อยไม่พอซื้อไอเทม !!!!", "error");

							btnA.text("ซื้อไอเทม");
							btnA.attr("disabled", false);

							return false;
						} 

						swal("สำเร็จ !!","ซื้อไอเทมสำเร็จโปรดตรวจสอบช่องเก็บของภายในตัวละคร", "success"); 
 
					}); 


  
			});



			$("#TableSale").on("click",'.isCheck',function(){

				var ShopMapIDIMG = $(this).attr("ShopMapIDIMG");   
				var ShopItemName = $(this).attr("ShopItemName");   
				var ShopMapID = $(this).attr("ShopMapID");   
 
				$("#SaleItemModal").find("#exampleModalLabel").text(ShopItemName); 



				$.post("https://cac.webclient.me/api/getDataItemDetailFromBuffer.php",{
					ShopMapID : ShopMapID 
					},function(data){
  	  					 
						//console.log(data);
						var obj = JSON.parse(data);
						console.log(obj);


						var html = "";


						html += "<tr>"+
										"<td>เสริมความแรง</td>"+
										"<td><font color='red'>+"+obj.DMG+"</font></td>"+
									"</tr>";

						html += "<tr>"+
										"<td>เสริมป้องกัน</td>"+
										"<td><font color='red'>+"+obj.DEF+"</font></td>"+
									"</tr>";

						html += "<tr>"+
										"<td>ไฟฟ้า</td>"+
										"<td><font color='red'>+"+obj.ELEC+"</font></td>"+
									"</tr>";

						html += "<tr>"+
										"<td>ไฟ</td>"+
										"<td><font color='red'>+"+obj.FIRE+"</font></td>"+
									"</tr>";

						html += "<tr>"+
										"<td>น้ำแข็ง</td>"+
										"<td><font color='red'>+"+obj.ICE+"</font></td>"+
									"</tr>";

						html += "<tr>"+
										"<td>พิษ</td>"+
										"<td><font color='red'>+"+obj.POISON+"</font></td>"+
									"</tr>";

						html += "<tr>"+
										"<td>เวทย์</td>"+
										"<td><font color='red'>+"+obj.WIND+"</font></td>"+
									"</tr>";



						if (obj.OptName1 != "NULL") {
							html += "<tr>"+
										"<td>"+obj.OptName1+"</td>"+
										"<td><font color='red'>"+obj.OptVal1+"</font></td>"+
									"</tr>";
						}
						if (obj.OptName2 != "NULL") {
							html += "<tr>"+
										"<td>"+obj.OptName2+"</td>"+
										"<td><font color='red'>"+obj.OptVal2+"</font></td>"+
									"</tr>";
						}
						if (obj.OptName3 != "NULL") {
							html += "<tr>"+
										"<td>"+obj.OptName3+"</td>"+
										"<td><font color='red'>"+obj.OptVal3+"</font></td>"+
									"</tr>";
						}
						if (obj.OptName4 != "NULL") {
							html += "<tr>"+
										"<td>"+obj.OptName4+"</td>"+
										"<td><font color='red'>"+obj.OptVal4+"</font></td>"+
									"</tr>";
						}



						$("#TableItemDetail").html(html);

 


						$("#SaleItemModal").modal("show");

					});


 

				









  
			});


 

		});
  </script>

  

 </body>

