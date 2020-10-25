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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/news/ticker.css">
<!-------- ---> 
<!--  <script src="https://rhz.webclient.me/assets/news/ticker.js"></script> -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
 
 
<body>

	<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <a class="navbar-brand" href="#">ระบบจัดการสมาชิกและแลกเปลี่ยน</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="https://liff.line.me/1655100623-YNaPAD2N">ข้อมูลส่วนตัว</a>
      </li>

      <li class="nav-item">
        <a class="nav-link  " href="https://liff.line.me/1655100623-qN5gyNKE">ตลาดซื้อขาย</a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">เติมเงิน</a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">ถอนเงิน</a>
      </li>
 

    </ul> 
  </div>
</nav>

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

 
	<input type="text" readonly hidden id="StoreID">
 
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
				<select id="UserID" class="custom-select">

				<option value="0">----- เลือก ID ที่ต้องการดูข้อมูล -----</option>

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
				
				<button id="SelectInventory" class="btn btn-success">เรียกดูข้อมูลช่องเก็บของ</button>

			</div>

		</div>



		<div class="row">
			
			<div class="col-4"> 
 				
 				<label>ยอดเงินในเกม : </label>
 				<font color="red"><label id="MoneyLable">0</label> </font> เหรียญ
 				 
			</div>
			<div class="col-4"> 
 				
 				<label>ยอดเงินแลกเปลี่ยน : </label>
 				<font color="green"><label class="MoneyPoint">0</label> </font> พ้อย
 				 
			</div> 
			<div class="col-4"> 
 				
 				<label> <font color="red">ยอดเงินที่สามารถถอนได้</font> : </label>
 				<font color="green"><label class="MoneyPoint">0</label> </font> บาท
 				 
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


 
	
	<!-- Modal Sale -->
	<div class="modal fade" id="SaleItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>


	








  
<!--===============================================================================================-->



	<script type="text/javascript">
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
			}, 200); 
 		 */
			setInterval(function(){ 

 				var StoreID = $("#StoreID").val();

 				if (StoreID != "") {
 
 					$.post("https://cac.webclient.me/api/getDataIsLogin.php",{
							UserNum : StoreID
						},function(data){
  	
  							////console.log(data);
							  
							if (data == 1) {
								
								swal("Login is Ready","Login is Ready", "error");

								location.href = 'https://rhz.webclient.me/index.php/member/mgmt';

							} 
 
  
					});



 				}
 

			}, 500);

	</script>


 
    <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
      <script>
 
        function runApp() {
          liff.getProfile().then(profile => {
 
      
            //console.log(profile.displayName);
            //console.log(profile.pictureUrl);
            //console.log(profile.userId);
            var Line = profile.userId;











            //swal("สำเร็จ !!","ระบบกำลังปิดหน้าลงทะเบียน....", "success");
 			
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
 
			});

            ////////
			$("#TableInvSale").hide();
			///////



			$("#TableInventoryBTN").on("click",function(){

				$("#TableInvSale").hide();
				$("#TableInventory").show();
				$("#ChaTableContent").html("");

				var IDRAN = $("#UserID option:selected").val(); 
				var ChaID = $("#ChaID option:selected").val(); 


				if (IDRAN.trim() == 0) {
					swal("กรุณาเลือกID !!","กรุณาระบุข้อมูลใหม่", "error");
					$("#UserID").attr('disabled',false);
					return false;
				}
				if (ChaID.trim() == 0) {
					swal("กรุณาเลือกตัวละคร !!","กรุณาระบุข้อมูลใหม่", "error");
					$("#UserID").attr('disabled',false);
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
									      "<td><button class='btn btn-success isSale' itemqty='"+ItemQTY+"' enhance='"+enhance+"' ItemID='"+Obj.tab1.ItemID[i]+"' itemInfo='"+Obj.tab1.MEM[i]+"'>ฝากขาย </button>   </td>"+
									    "</tr> "; 
						}

						
						
						$("#ChaTableContent").html(tablehtml);

						$("#ChaID").attr('disabled','disabled');
						 
	 
					}); 






			});





 



			$("#TableInvSaleBTN").on("click",function(){

 				
				$("#TableInvSaleContent").html("");
				$("#TableInvSale").show();
				$("#TableInventory").hide();
  
 
/////////////////////////////////////////////////////////////////////////////////////////////
				$.post("https://cac.webclient.me/api/getDataSaleFromLineID.php",{
					LineID : Line
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
									      "<td>"+Obj.Price[i]+"</td>"+
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
						$.post("https://cac.webclient.me/api/getDataSaleFromLineID.php",{
							LineID : Line
							},function(data){

								$("#TableInvSaleContent").html("");
								//swal("สำเร็จ !!","เรียกดูข้อมูลช่องเก็บของตัวละครสำเร็จ", "success");
								var Obj = JSON.parse(data); 
		   						 
		   						var tablehtml = "";   
		   						for (var i = 0; i < Obj.ChaName.length; i++) {
		 
		   							tablehtml += "<tr>"+
											      "<td>"+Obj.ChaName[i]+"</td>"+
											      "<td>"+Obj.ItemName[i]+"</td>"+
											      "<td>"+Obj.Price[i]+"</td>"+
											      "<td><button class='btn btn-danger isReInv' ChaNum='"+Obj.ChaNum[i]+"' ShopMapID='"+Obj.ID[i]+"'>เรียกคืนไอเทม</button></td>"+
											    "</tr> "; 
 
		   						}
		 
								
								$("#TableInvSaleContent").html(tablehtml);
		 
			 
							});






					}); 








			});







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



			$("#SelectOption").on("click",function(){
 				


 				$("#UserID").attr('disabled','disabled');


				$("#ChaTableContent").html("");

				$("#MoneyLable").text("0");
				$("#InvEmpty").text("");
				$("#InvUse").text("");

				$("#ChaID").html('<option value="0">----- เลือก ตัวละคร ที่ต้องการดูข้อมูล -----</option>');

				var IDRAN = $("#UserID option:selected").val(); 
				swal("สำเร็จ !!","เรียกดูข้อมูลสำเร็จ", "success");


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

					$("#StoreID").val(IDRAN);

					for (var i = 0; i < Obj.UserNum.length; i++) { 

						$("#ChaID").append(new Option(Obj.ChaName[i], Obj.ChaNum[i]));

					}

					
 
				});
  
			});





			$("#SelectInventory").on("click",function(){
 
 				//////////////// clear inven
				$("#ChaTableContent").html(""); 
				$("#MoneyLable").text("0");
				$("#InvEmpty").text("");
				$("#InvUse").text("");
				$("#ChaID").attr('disabled','disabled');
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
								      "<td><button class='btn btn-success isSale' itemqty='"+ItemQTY+"' enhance='"+enhance+"' ItemID='"+Obj.tab1.ItemID[i]+"' itemInfo='"+Obj.tab1.MEM[i]+"'>ฝากขาย</button></td>"+
								    "</tr> "; 
					}

					
					
					$("#ChaTableContent").html(tablehtml);
 
				}); 

			});




			$("#ChaTable").on("click",".isSale",function(){

				//swal("click","----", "info");

				var itemInfo = $(this).attr("itemInfo");
				var IDRAN = $("#UserID option:selected").val(); 
				var ChaID = $("#ChaID option:selected").val(); 
				var ItemIDa = $(this).attr("ItemID");
				var enhance = $(this).attr("enhance");

				//alert(IDRAN+" "+ChaID+" "+itemInfo);
				var Itemqty = $(this).attr("itemqty");
				
				$('#SaleItemModal').modal({backdrop: 'static', keyboard: false});

				$("#SaleItemModal").modal("show");
  
				//$("#ChaTable").find(this).text("กำลังดำเนินการ....");
				//$("#ChaTable").find(this).attr("disabled", true);

 	
				/*			 
				$.post("https://cac.webclient.me/api/addItemToShop.php",{
					ChaNum : ChaID,
					ItemMEM : itemInfo,
					ItemCode : ItemIDa,
					Enhance : enhance,
					ItemQty : Itemqty
				},function(data){


					//console.log(data);
					var objs = JSON.parse(data);
					//console.log(objs);

					$.post("https://cac.webclient.me/api/getDataInvenFromUserNum.php",{
					ChaNum : ChaID
					},function(data){
						//$("#ChaTableContent").html("");
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
									      "<td><button class='btn btn-success isSale' itemqty='"+ItemQTY+"' enhance='"+enhance+"' ItemID='"+Obj.tab1.ItemID[i]+"' itemInfo='"+Obj.tab1.MEM[i]+"'>ฝากขาย</button></td>"+
									    "</tr> "; 
						}

						
						
						$("#ChaTableContent").html(tablehtml);
	 
					}); 

 
					
 
				}); */


			});



             

 
          }).catch(err => console.error(err));
        }
        liff.init({ liffId: "1655100623-YNaPAD2N" }, () => {
          if (liff.isLoggedIn()) {
            runApp();

          } else {
            liff.login();
          }
        }, err => console.error(err.code, error.message));
  </script>

  

 </body>

