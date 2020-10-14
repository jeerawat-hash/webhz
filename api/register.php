<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hazakura Server ลงทะเบียน</title>
	<meta charset="UTF-8">
	<meta name='viewport' 
     content='width=device-width, initial-scale=1.0, maximum-scale=1.0, 
     user-scalable=0' >

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://rhz.webclient.me/assets/Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-------- ---> 
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/Login/css/main.css">
<!--===============================================================================================-->
</head>

 
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(https://rhz.webclient.me/assets/Login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Hazakura Server ลงทะเบียน
					</span>
				</div>
				<form class="login100-form validate-form"> 
					<div class="wrap-input100 validate-input m-b-26" data-validate="กรุณาใส่ไอดี">
						<span class="label-input100">ไอดี</span>
						<input class="input100" type="text" name="username" id="username" placeholder="กรอกไอดี" autocomplete="off">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "กรุณาใส่รหัสผ่าน">
						<span class="label-input100">รหัสผ่าน</span>
						<input class="input100" type="password" name="pass" id="password" placeholder="กรอกรหัสผ่าน" autocomplete="off">
						<span class="focus-input100"></span>
					</div> 
					 
					<div  class="container-login100-form-btn">
						<button id="Submit" type="button" class="login100-form-btn">
							ลงทะเบียน
						</button>

						<div id="preload" class="spinner-border text-success" role="status">
						  <span class="sr-only">Loading...</span>
						</div>

					</div> 
				</form>
			</div>
		</div>
	</div>
  
<!--===============================================================================================-->
	<script src="https://rhz.webclient.me/assets/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="https://rhz.webclient.me/assets/Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="https://rhz.webclient.me/assets/Login/vendor/bootstrap/js/popper.js"></script>
	<script src="https://rhz.webclient.me/assets/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="https://rhz.webclient.me/assets/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="https://rhz.webclient.me/assets/Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="https://rhz.webclient.me/assets/Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="https://rhz.webclient.me/assets/Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://rhz.webclient.me/assets/Login/js/main.js"></script>


  
 
    <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
      <script>
 
        function runApp() {
          liff.getProfile().then(profile => {
 
      
            console.log(profile.displayName);
            console.log(profile.pictureUrl);
            console.log(profile.userId);
            var Line = profile.userId;


            

            $("#preload").hide();
			$("#Submit").show();
			 
			$("#Submit").on("click",function(){
			
				$("#Submit").hide();
				$("#preload").show();
				var User = $("#username").val();
            	var Pass = $("#password").val();
				 console.log(User);
				if (User == "") {
				swal("กรุณาระบุข้อมูลID !!","กรุณาระบุข้อมูลใหม่", "error");
				return false;
	            }
	            if (Pass == "") {
					swal("กรุณาระบุข้อมูลPassword !!","กรุณาระบุข้อมูลใหม่", "error");
					return false;
	            }

	            var obj = { Username: User, Password: Pass, LineID: Line };

	            var myJSON = JSON.stringify(obj);

				setTimeout(function(){ 
 
				   	$.post("register_api.php",myJSON,function(data,status,response){
				   		var obj = JSON.parse(data);
				   		//console.log( obj );

				   		if (obj.is_success == 0) {
				   			swal("ผิดพลาดรหัสซ้ำซ้อน !!","กรุณาระบุข้อมูลใหม่", "error");
				   			$("#Submit").show();
							$("#preload").hide();
							var User = $("#username").val("");
            				var Pass = $("#password").val("");
				   		}else{
				   			swal("บันทึกข้อมูลสำเร็จ !!","ระบบกำลังปิดหน้าลงทะเบียน....", "success");
				   			
				   			setTimeout(function(){ 

								liff.closeWindow();
								if ( liff.isInClient() == false ) {
		                            liff.logout();
		                            window.location.href = "https://rhz.webclient.me";
		                        }else{
		                            liff.closeWindow();
		                        }

							}, 1800);

				   		}

				   	});
  
				}, 3000);

			});







 
          }).catch(err => console.error(err));
        }
        liff.init({ liffId: "1655100623-pRNmqX2D" }, () => {
          if (liff.isLoggedIn()) {
            runApp();

          } else {
            liff.login();
          }
        }, err => console.error(err.code, error.message));
  </script>



</body>
</html>

