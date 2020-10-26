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
}
 </style>
 
<body>

	<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <a class="navbar-brand" href="#">ระบบจัดการสมาชิกและแลกเปลี่ยน</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item ">
        <a class="nav-link" href="https://liff.line.me/1655100623-YNaPAD2N">ข้อมูลส่วนตัว</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active " href="https://liff.line.me/1655100623-qN5gyNKE">ตลาดซื้อขาย</a>
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
 					<div class="col-12">
 						<img src="#" id="ImageURL" class="responsive img-responsive">
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
			/*
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

								location.href = 'https://rhz.webclient.me/index.php/member/market';

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

            console.log(Line);
            //swal("สำเร็จ !!","ระบบกำลังปิดหน้าลงทะเบียน....", "success");
 			
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

					$("#StoreID").val(IDRAN);

					for (var i = 0; i < Obj.UserNum.length; i++) { 

						$("#ChaID").append(new Option(Obj.ChaName[i], Obj.ChaNum[i]));

					}

					
 
				});
  
			});



			$("#SelectCharBUY").on("click",function(){
 
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
   						console.log(Obj);
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
									      "<td><button class='btn btn-warning isCheck' ShopItemName='"+Obj.ItemName[i]+"' ShopMapIDIMG='"+Obj.ImageURL[i]+"'>ดูข้อมูล</button> <button class='btn btn-success isBuyItem' ShopMapID='"+Obj.ID[i]+"'>ซื้อไอเทม</button></td>"+
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

				$("#SaleItemModal").find("#exampleModalLabel").text(ShopItemName);
				$("#SaleItemModal").find("#ImageURL").attr("src",ShopMapIDIMG);

				$("#SaleItemModal").modal("show");



  
			});
























             

 
          }).catch(err => console.error(err));
        }
        liff.init({ liffId: "1655100623-qN5gyNKE" }, () => {
          if (liff.isLoggedIn()) {
            runApp();

          } else {
            liff.login();
          }
        }, err => console.error(err.code, error.message));
  </script>

  

 </body>

