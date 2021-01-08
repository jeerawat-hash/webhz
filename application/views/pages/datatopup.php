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

	  <li class="nav-item ">
        <a class="nav-link" href="https://rhz.webclient.me/index.php/member/mgmt">ฝากขายไอเทม</a>
      </li>

      <li  class="nav-item">
        <a class="nav-link active " href="https://rhz.webclient.me/index.php/member/topup">เติมเงิน</a>
      </li>

      <li hidden class="nav-item">
        <a class="nav-link " href="https://liff.line.me/1655100623-PK7LaMGz">ถอนเงิน</a>
      </li>
 

    </ul> 
  </div>
</nav>


<input type="text" readonly hidden id="StoreID" value="<?php echo $UserNum; ?>">


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


  
	<div class="container">


 

		<div class="row">
			 
			<div class="col-6"> 
 				
 				<label><h2>ทำรายการเติมเงิน :</h2></label> 

			</div>   
			<div class="col-6"> 
 				 

				<button id="TopUPModalBTn" class="btn btn-success" style="width: 100%;">เติมเงิน</button>
 

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

 


		<div id="TableTopup" class="row">
			
			<div class="col-12" class="table-responsive">

				<table id="TableSale" width="100%" class="table">
				  <thead>
				    <tr> 
				      <th >ลำดับ</th>
				      <th >หลักฐาน</th>
				      <th >ยอด</th> 
				      <th >สถานะ</th> 
				    </tr>
				  </thead>
				  <tbody id="TableTopupContent">
				    
				  </tbody>
				  
				</table>



			</div> 

		</div>
		

	</div>

	</div>
  </div>
</div>
 
	
		<!-- Modal Sale -->
	<div class="modal fade" id="TopUPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
 					

 					<div  class="col-6">
 						 	  
 							<div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text">ยอดเงิน</span>
							  </div>
							  <input type="text" id="Point" pattern="^([0-9]?[0-9]?[0-9]?|)$"  class="form-control" aria-label="Amount (to the nearest baththai)">
							  <div class="input-group-append">
							    <span class="input-group-text">พ้อย</span>
							  </div>
							</div>
 

 					</div>
 					<div  class="col-6">
 						 	  

 							<div class="custom-file">
							    <input accept='image/*' type="file" class="custom-file-input" id="SlipIMG">
							    <label id="ItemIMGLB" class="custom-file-label" for="customFile">เลือกภาพ</label>
							  </div>
 

 					</div>




 				</div>
 			</div>


	      </div>
	      <div class="modal-footer">   
	      	<div class="spinner-border text-success " id="preload" role="status">
			  <span class="sr-only">Loading...</span>
			</div>
	      	 <button type="button" class="btn btn-success" id="SendData" >ส่งข้อมูล</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
	      </div>
	    </div>
	  </div>
	</div>
 
	






 

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
			}, 200); 
  	*/

	</script>

 

  
      <script>
		
		$(function(){

 
      
            //console.log(profile.displayName);
            //console.log(profile.pictureUrl);
            //console.log(profile.userId);
            //var Line = profile.userId;

            //console.log(Line);
            //swal("สำเร็จ !!","ระบบกำลังปิดหน้าลงทะเบียน....", "success");
 			
			setInterval(function(){ 

			var IDRAN = $("#StoreID").val();
			$.post("https://cac.webclient.me/api/getDataUserPointFromUserNum.php",{
				UserNum : IDRAN
				},function(data){

					//console.log(data);
					var objectMoney = JSON.parse(data);
					//console.log(objectMoney.Point);
				$(".MoneyPoint").text(objectMoney.Point);
			});


			}, 1000);

  
 

            $("#TopUPModalBTn").on("click",function(){


				$("#TopUPModal").find("#exampleModalLabel").text("ยันยันข้อมูลเติมเงิน");
				$("#TopUPModal").find("#preload").hide();
				$("#TopUPModal").find("#SlipIMG").val("");
				$("#TopUPModal").find("#ItemIMGLB").text("เลือกภาพ");
				$("#TopUPModal").find("#Point").val("0");
            	$("#TopUPModal").modal("show");
 
				  
            });

 





		});
 
  </script>

  

 </body>

