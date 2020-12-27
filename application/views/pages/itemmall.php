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
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<!-------- ---> 
<!--  <script src="https://rhz.webclient.me/assets/news/ticker.js"></script> -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
	<script src="https://rhz.webclient.me/assets/Login/vendor/jquery/jquery-3.2.1.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://rhz.webclient.me/assets/Login/vendor/bootstrap/js/popper.js"></script>

    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    

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

	<li class="nav-item active">
        <a class="nav-link" href="https://rhz.webclient.me/index.php/member/itemmall">ไอเทมช็อป</a>
      </li>
 
      <li class="nav-item">
        <a class="nav-link  " href="https://rhz.webclient.me/index.php/member/market">ตลาดซื้อขาย</a>
      </li>

      <li class="nav-item ">
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

<input type="text" readonly hidden id="StoreID" value="<?php echo $UserNum; ?>">
 



<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">


    <div class="row">
        <div class="col-12"> 

        <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>ไอเทมแนะนำวันนี้</h1>
        <p>ได้รับส่วนลดพิเศษ30%</p> 
        </div> 
        </div>

    </div>
    <br>
    <div class="row">
 
        <div class="col-4 mb-3"> 
                <div class="card ">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div> 
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>

        <div class="col-4 mb-3"> 
                <div class="card ">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div> 
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>

        <div class="col-4 mb-3"> 
                <div class="card ">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1769fb197eb%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1769fb197eb%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1875%22%20y%3D%2296.24375%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div> 
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div> 
        </div>
 
 
    </div>
 
	</div>
  </div>
</div>





<div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">

    <div class="row">

        <div class="col-3">
        
        
        <div class="list-group">
            <a href="#" id="menucosh" class="list-group-item list-group-item-action">เครื่องแต่งกาย</a>
            <a href="#" id="menuweapon" class="list-group-item list-group-item-action">อาวุธ</a>
            <a href="#" id="menuaccess" class="list-group-item list-group-item-action">สร้อย</a>
            <a href="#" id="menucard" class="list-group-item list-group-item-action">บัตรต่างๆ</a>
            <a href="#" id="menuother" class="list-group-item list-group-item-action ">อื่นๆ</a>
        </div>
 

        </div>
        <div class="col-9">
        
            <table class="table">
            <thead>
                <tr>
                    <th>หมวด</th>
                    <th>ชื่อ</th>
                    <th>ดำเนินการ</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>000000</td>
                    <td>ดาบเทพ</td>
                    <td><button type="button" class="btn btn-warning">ซื้อ/ข้อมูล</button></td> 
                </tr>
                 
            </tbody> 
        </table>
    



        
        </div>
    
    </div>





    </div>
    </div>
</div>












  
<!--===============================================================================================-->
    <script>

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

    <script type="text/javascript">
        $(function(){

            
            
            $("#menucosh").on("click",function(event){
                event.preventDefault();
                $(".list-group-item").removeClass("active");
                $(this).addClass("active");






            });
            $("#menuweapon").on("click",function(event){
                event.preventDefault();
                $(".list-group-item").removeClass("active");
                $(this).addClass("active");







            });
            $("#menuaccess").on("click",function(event){
                event.preventDefault();
                $(".list-group-item").removeClass("active");
                $(this).addClass("active");








            });
            $("#menucard").on("click",function(event){
                event.preventDefault();
                $(".list-group-item").removeClass("active");
                $(this).addClass("active");







            });
            $("#menuother").on("click",function(event){
                event.preventDefault();
                $(".list-group-item").removeClass("active");
                $(this).addClass("active");









            });




        });

    </script>

	<script type="text/javascript">

    //$('#example').DataTable();

    ///////////////////////////////

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
 		  



	</script>


  
  

 </body>

