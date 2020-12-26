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
 /*
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

	<li class="nav-item active">
        <a class="nav-link" href="https://rhz.webclient.me/index.php/member/itemmall">ไอเทมช็อป</a>
      </li>
 
      <li class="nav-item">
        <a class="nav-link  " href="https://liff.line.me/1655100623-qN5gyNKE">ตลาดซื้อขาย</a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="https://liff.line.me/1655100623-YNaPAD2N">ฝากขายไอเทม</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="https://liff.line.me/1655100623-4LqV1zJ2">เติมเงิน</a>
      </li>

      <li hidden class="nav-item">
        <a class="nav-link " href="https://liff.line.me/1655100623-PK7LaMGz">ถอนเงิน</a>
      </li>
 

    </ul> 
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
    

    <div class="row">
        <div class="col-4"> 
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <center>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </center>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>
        <div class="col-4"> 
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <center>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </center>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>
        <div class="col-4"> 
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <center>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </center>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>
        <div class="col-4"> 
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <center>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </center>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>
        <div class="col-4"> 
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <center>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </center>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>
        <div class="col-4"> 
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <center>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </center>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>
        <div class="col-4"> 
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <center>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </center>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>
        <div class="col-4"> 
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <center>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </center>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>
        <div class="col-4"> 
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <center>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </center>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>
        <div class="col-4"> 
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <center>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </center>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>
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

  			//console.log(Line);

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






            //swal("สำเร็จ !!","ระบบกำลังปิดหน้าลงทะเบียน....", "success");
 			
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
									      "<td><button class='btn btn-success isSale' itemName='"+Obj.tab1.ItemName[i]+" ตีบวก "+enhance+"' itemqty='"+ItemQTY+"' enhance='"+enhance+"' ItemID='"+Obj.tab1.ItemID[i]+"' itemInfo='"+Obj.tab1.MEM[i]+"'>ฝากขาย </button>   </td>"+
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
											      "<td><font color='red'>"+Obj.Price[i]+"</font> พ้อย</td>"+
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

