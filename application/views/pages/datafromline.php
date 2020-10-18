





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
 				
 				<label>ยอดพ้อยแลกเปลี่ยน : </label>
 				<font color="green"><label class="MoneyPoint">0</label> </font> พ้อย
 				 
			</div> 
			<div class="col-4"> 
 				
 				<label>ยอดเงินที่สามารถถอนได้ : </label>
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
			
			<div class="col-12"> 

				<table id="ChaTable" border="1" width="100%">
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
		

	</div>


 
		
 
	








  
<!--===============================================================================================-->
	<script src="https://rhz.webclient.me/assets/Login/vendor/jquery/jquery-3.2.1.min.js"></script> 
	<script src="https://rhz.webclient.me/assets/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://rhz.webclient.me/assets/Login/vendor/bootstrap/js/popper.js"></script>
 	


	<script type="text/javascript">
			
			/*
			document.addEventListener('contextmenu', event => event.preventDefault());

			setInterval(function(){
			  var startTime = performance.now(), check, diff;
			  for (check = 0; check < 1000; check++){
			    console.log(check);
			    console.clear();
			  }
			  diff = performance.now() - startTime;
			  if (diff > 200){
 
			    debugger;

			  }
			}, 500);
			*/ 
			setInterval(function(){ 

 				var StoreID = $("#StoreID").val();

 				if (StoreID != "") {
 
 					$.post("https://cac.webclient.me/api/getDataIsLogin.php",{
							UserNum : StoreID
						},function(data){
  	
  							//console.log(data);
							  
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
 
      
            console.log(profile.displayName);
            console.log(profile.pictureUrl);
            console.log(profile.userId);
            var Line = profile.userId;

            //swal("Success !!","ระบบกำลังปิดหน้าลงทะเบียน....", "success");
 			
            $.post("https://cac.webclient.me/api/getDataIDFromLineID.php",{
					LineID : Line
				},function(data){


					var Obj = JSON.parse(data);
					console.log(Obj);

					if (Obj.length == 0) {
						swal("ไม่พบข้อมูล","ไม่พบข้อมูล", "error");
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
 

            	$.post("https://cac.webclient.me/api/getDataIDFromLineID.php",{
					LineID : Line
					},function(data){


						var Obj = JSON.parse(data);
						console.log(Obj);

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
 
				$("#ChaTableContent").html("");

				$("#MoneyLable").text("0");
				$("#InvEmpty").text("");
				$("#InvUse").text("");

				$("#ChaID").html('<option value="0">----- เลือก ตัวละคร ที่ต้องการดูข้อมูล -----</option>');

				var IDRAN = $("#UserID option:selected").val(); 
				swal("Success !!","เรียกดูข้อมูลสำเร็จ", "success");


				if (IDRAN.trim() == 0) {
					swal("กรุณาเลือกID !!","กรุณาระบุข้อมูลใหม่", "error");
					return false;
				}

				$.post("https://cac.webclient.me/api/getDataChaFromUserNum.php",{
					UserNum : IDRAN
				},function(data){


					var Obj = JSON.parse(data);
					console.log(Obj);

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
 				//ChaNum
 				//////////////// clear inven
				var ChaID = $("#ChaID option:selected").val(); 
				///swal("Success !!","เรียกดูข้อมูลสำเร็จ", "success");


				if (ChaID.trim() == 0) {
					swal("กรุณาระบุเลือกตัวละคร !!","กรุณาระบุข้อมูลใหม่", "error");
					return false;
				}
 
				$.post("https://cac.webclient.me/api/getDataInvenFromUserNum.php",{
					ChaNum : ChaID
				},function(data){

					swal("Success !!","เรียกดูข้อมูลภายในช่องเก็บของสำเร็จ", "success");
					var Obj = JSON.parse(data);
					console.log(Obj);
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

						tablehtml += "<tr>"+
								      "<td>Row "+Obj.tab1.X[i]+" Col "+Obj.tab1.Y[i]+"</td>"+
								      "<td>"+Obj.tab1.ItemName[i]+" <font color='red'>ตีบวก </font>"+enhance+"</td>"+
								      "<td> <font color='red'>"+Obj.tab1.QTY[i]+"</font> ชิ้น</td>"+
								      "<td><button class='btn btn-success isSale' itemInfo='"+Obj.tab1.MEM[i]+"'>ฝากขาย</button></td>"+
								    "</tr> "; 
					}

					
					
					$("#ChaTableContent").html(tablehtml);
 
				}); 

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

