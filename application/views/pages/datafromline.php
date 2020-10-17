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
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

</head>

 
<body>

 
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
				<select id="UserID">

				<option value="0">----- เลือก ID ที่ต้องการดูข้อมูล -----</option>

				</select>
			</div>
			<div class="col-6">
				
				<button id="SelectOption" class="btn btn-primary">เลือก</button>

			</div>

		</div>

		

	</div>

	








  
<!--===============================================================================================-->
	<script src="https://rhz.webclient.me/assets/Login/vendor/jquery/jquery-3.2.1.min.js"></script> 
	<script src="https://rhz.webclient.me/assets/Login/vendor/bootstrap/js/bootstrap.min.js"></script>



	<script type="text/javascript">
		
		$(function(){

			swal("Success !!","ระบบกำลังปิดหน้าลงทะเบียน....", "success");
			$('UserID').selectpicker();


		});


	</script>


  

 </body>

