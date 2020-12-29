<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hazakura Server Ep7 Classic ยินดีต้อนรับ</title>
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
  background: url('https://rhz.webclient.me/assets/bg/bg.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
} 
 
 </style>
 
<body>  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand" href="https://rhz.webclient.me">
        <img src="https://rhz.webclient.me/assets/bg/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Hazakura - Ran Online Ep7 Classic
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul  class="navbar-nav mr-auto"> 
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://rhz.webclient.me/index.php/member">สมัครไอดี</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " target="_blank" href="https://rhz.webclient.me/index.php/member/itemmall">ไอเทมช็อป</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " target="_blank" href="https://rhz.webclient.me/index.php/member">จัดการตัวละคร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://rhz.webclient.me/index.php/home/rank">อันดับผู้เล่น</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">อันดับกิล</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">กิจกรรมพิเศษ</a>
                </li>
            </ul>
            <ul class="navbar-nav"> 
                <li class="nav-item">
                    <a class="nav-link "  href="https://rhz.webclient.me/index.php/home/guide">แนะนำการเล่น</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-success my-2 my-sm-0 " href="#" target="_blank">ดาว์โหลดเกมส์</a> 
                </li>
            </ul>
        </div>
    </nav>




    <div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">

    <div class="row">
        <div class="col-12"> 

        <div class="jumbotron text-center" style="margin-bottom:0 ; color:white;  background-size: cover; background-image: url('https://www.wallpaperup.com/uploads/wallpapers/2015/03/20/641745/c4f825b2e617ea446f5d5058574ee733.jpg');">
        <h1>อันดับผู้เล่น</h1>
        <p></p> 
        </div> 
        </div>

    </div>
  
    <div class="row">

        <div class="col-3">
        
        
        <div class="list-group">
            <a href="#" id="menutoprich" class="list-group-item list-group-item-action">TOP 50 รวยที่สุด</a>
            <a href="#" id="menutoppkill" class="list-group-item list-group-item-action">TOP 50 ฆ่าผู้เล่นเยอะที่สุด</a>
            <a href="#" id="menutopgametime" class="list-group-item list-group-item-action">TOP 50 มีเวลาออนไลน์มากที่สุด</a>
            <a href="#" id="menutopfirstp" class="list-group-item list-group-item-action">TOP 50 เลเวลตันเร็วที่สุด</a> 
        </div>
 

        </div>
        <div class="col-9">
        
            <table class="table" id="TableTop">
            <thead>
                <tr> 
                    <th >ชื่อ</th>
                    <th >อาชีพ</th>
                    <th >โรงเรียน</th> 
                </tr>
            </thead>
            <tbody id="TableTopDetail" >
            
                <tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td> 
                </tr>
 
            </tbody> 
        </table>
    



        
        </div>
    
    </div>





    </div>
    </div>
</div>






  
  <script>
    $(function(){


      $("#menutoprich").on("click",function(event){
                
                event.preventDefault();
                $(".list-group-item").removeClass("active");
                $(this).addClass("active");

      });

      $("#menutoppkill").on("click",function(event){
                
                event.preventDefault();
                $(".list-group-item").removeClass("active");
                $(this).addClass("active");

      });

      $("#menutopgametime").on("click",function(event){
                
                event.preventDefault();
                $(".list-group-item").removeClass("active");
                $(this).addClass("active");

      });

      $("#menutopfirstp").on("click",function(event){
                
                event.preventDefault();
                $(".list-group-item").removeClass("active");
                $(this).addClass("active");

      });



                

    });
  </script>



 


  
  

 </body>

