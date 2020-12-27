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

