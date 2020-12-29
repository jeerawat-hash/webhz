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
	<a class="navbar-brand" href="https://rhz.webclient.me/index.php/member">จัดการตัวละคร</a>
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

      <li hidden class="nav-item">
        <a class="nav-link  " href="https://rhz.webclient.me/index.php/member/topup">เติมเงิน</a>
      </li>

      <li hidden class="nav-item">
        <a class="nav-link " href="https://liff.line.me/1655100623-PK7LaMGz">ถอนเงิน</a>
      </li>
 

    </ul> 

    <form class="form-inline my-2 my-lg-0"> 

        <span class="navbar-text">
         
        </span>
        <a class="btn btn-lg btn-warning" href="https://rhz.webclient.me/index.php/member/signout"  >ออกจากระบบ</a>
    
    </form>

  </div>
</nav>
 
<input type="text" readonly hidden id="StoreID" value="<?php echo $UserNum; ?>">







<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">


    <div class="row">
        <div class="col-12"> 

        <div class="jumbotron text-center" style="margin-bottom:0 ; color:white;  background-size: cover; background-image: url('https://rhz.webclient.me/assets/Login/images/bg-01.jpg');">
        <h1 id="Welcome">ยินดีต้อนรับ <?php echo $UserName; ?></h1>
        <p id="Welcome2">เข้าสู่ระบบจัดการตัวละคร Hazakura GameServer</p> 
        </div> 
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-3 text-center"> 

        <a href="#" class="btn btn-success active" role="button" id="exchangepoint" aria-pressed="true">แลกพ้อยเวลาออนไลน์</a>
  
        </div>

        <div class="col-3 text-center"> 

        <a href="#" class="btn btn-dark" role="button" id="redeemPkitem" aria-pressed="true">แลกไอเทมจากแต้มPK</a>

        </div>

        <div class="col-3 text-center"> 
          
        <a href="#" class="btn btn-danger active" role="button" id="fixchar" aria-pressed="true">แก้ตัวละครค้าง</a>

        </div>

        <div class="col-3 text-center"> 
          
        <a href="#" class="btn btn-primary active" role="button" id="changepassword" aria-pressed="true">เปลี่ยนรหัสผ่าน</a>

        </div>

    </div>
    <br>
    <div class="row" id="Charinfo">
 
 
    </div>
 
	</div>
  </div>
</div>

 



<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">


    <div class="row">
        <div class="col-12"> 

        <div class="jumbotron text-center" style="margin-bottom:0 ; color:white;  background-size: cover; background-image: url('https://www.wallpaperup.com/uploads/wallpapers/2015/03/20/641745/c4f825b2e617ea446f5d5058574ee733.jpg');">
        <h1>ไอเทมแนะนำวันนี้</h1>
        <p>ได้รับส่วนลดพิเศษ30%</p> 
        </div> 
        </div>

    </div>
    <br>
    <div id="RecommendItem" class="row">
 
 


    </div>
 
	</div>
  </div>
</div>








<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">กรุณาเข้าสู่ระบบ</h5>  
        </button>
      </div>
      <div class="modal-body"> 

        <div class="container">
            <div class="row">
                <div class="col-6" >

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">ไอดี</label>
                        <input type="text" class="form-control" id="username" autocomplete="off">
                    </div>

                </div>
                <div class="col-6" >
                
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="password" autocomplete="off">
                    </div>

                </div>
            </div>
         
        </div>

      </div>
      <div class="modal-footer"> 
      
        <div class="spinner-border text-primary" role="status" id="Preload">
        <span class="sr-only">Loading...</span>
        </div>

        <button type="button" class="btn btn-warning" id="Register">สมัครไอดี</button>
        <button type="button" class="btn btn-primary" id="Save">เข้าสู่ระบบ</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">สมัครไอดี</h5>  
        </button>
      </div>
      <div class="modal-body"> 

        <div class="container">

            <div class="row">
                <div class="col-6" > 
                    <div class="form-group"> 
                        ไอดีเข้าใช้งาน :
                    </div> 
                </div>
                <div class="col-6" > 
                    <div class="form-group"> 
                        <input type="text" class="form-control" id="UserName" autocomplete="off">
                    </div> 
                </div>
            </div>

            <div class="row">
                <div class="col-6" > 
                    <div class="form-group"> 
                        รหัสผ่าน :
                    </div> 
                </div>
                <div class="col-6" > 
                    <div class="form-group"> 
                        <input type="Password" class="form-control" id="Password1" autocomplete="off">
                    </div> 
                </div>
            </div>
            
            <div class="row">
                <div class="col-6" > 
                    <div class="form-group"> 
                        ยืนยันรหัสผ่าน :
                    </div> 
                </div>
                <div class="col-6" > 
                    <div class="form-group"> 
                        <input type="Password" class="form-control" id="Password2" autocomplete="off">
                    </div> 
                </div>
            </div>

            <div class="row">
                <div class="col-6" > 
                    <div class="form-group"> 
                        รหัสลบตัวละคร :
                    </div> 
                </div>
                <div class="col-6" > 
                    <div class="form-group"> 
                        <input type="text" class="form-control" id="PassDel" autocomplete="off">
                    </div> 
                </div>
            </div>
          


        </div>

      </div>
      <div class="modal-footer"> 
      
        <div class="spinner-border text-primary" role="status" id="Preload">
        <span class="sr-only">Loading...</span>
        </div> 
        <button type="button" class="btn btn-primary" id="Save">บันทึก</button>
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
      
      setInterval(function(){ 

        var StoreID = $("#StoreID").val();

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
  
    <script>
        $(function(){
          
          var StoreID = $("#StoreID").val();

          if(StoreID == "null"){

            $("#Welcome").hide();
            $("#Welcome2").text("ระบบจัดการตัวละคร Hazakura GameServer");
            

          }


          $.post("https://cac.webclient.me/api/getDataUserInfo.php",{
            UserNum : StoreID
          },function(data){

            var obj = JSON.parse(data);
            console.log(obj);

            var html = "";
            
            for (var i = 0; i < obj.ChaName.length; i++) {
              
              html += '<div class="col-4 mb-3">'+
                      '<div class="card ">'+
                          '<img class="card-img-top" width="286" height="180" src="'+obj.Class[i]+'" alt="Card image cap">'+
                          '<div class="card-body">'+
                          '<h5 class="card-title">'+obj.ChaName[i]+'</h5>'+
                          '<p class="card-text">เลเวล : <font color="green" id="level">'+obj.ChaLevel[i]+'</font>  PlayerKILL : <font color="red" id="pk">'+obj.ChaKills[i]+'</font> คน </p> '+  
                          '</div> '+
                          '<div class="card-footer">'+
                          '<small class="text-muted">ยอดเงิน : <font color="red" id="money">'+obj.ChaMoney[i]+'</font> เหรียญ</small>'+
                          '</div>'+
                      '</div> '+
                    '</div>';
            
            }
            
            $("#Charinfo").html(html);


          });






          $.get("https://cac.webclient.me/api/getDataItemShopRecomment.php",function(data){


          var obj = JSON.parse(data);
          console.log(obj);

          var html = "";

          for (var i = 0; i < obj.ProductNum.length; i++) {
                  
                  html += '<div class="col-4 mb-3">'+
                          '<div class="card ">'+
                              '<img class="card-img-top" width="286" height="180" src="'+obj.ItemIco[i]+'" alt="Card image cap">'+
                                '<div class="card-body">'+
                                '<h5 class="card-title"><a href="https://rhz.webclient.me/index.php/member/itemmall">'+obj.ItemName[i]+'</a></h5>'+
                                '<p class="card-text">'+obj.ItemComment[i]+'</p>'+
                                '</div>'+ 
                                '<div class="card-footer">'+
                                '<small class="text-muted">ราคา  <font>'+obj.ItemPrice[i]+'</font> พ้อย</small>'+
                                '</div>'+
                            '</div>'+ 
                          '</div>';
                
              }



          $("#RecommendItem").html(html);

          });





            $("#exchangepoint").on("click",function(event){
                event.preventDefault(); 

 


            });
 

            $("#redeemPkitem").on("click",function(event){
                event.preventDefault(); 

 



            });
 
            $("#fixchar").on("click",function(event){
                event.preventDefault(); 

 

            });


            $("#changepassword").on("click",function(event){
                event.preventDefault(); 

 

            });





 

            $.get("https://rhz.webclient.me/index.php/member/validate",function(data){

                if(data == "0"){
                    $('#LoginModal').modal({backdrop: 'static', keyboard: false});
                }else{
                    //// is logon

                   

                    //// is logon
                }


            });



            $("#LoginModal").find("#Register").on("click",function(){

                $("#LoginModal").modal("hide");
                
                $("#RegisterModal").modal({backdrop: 'static', keyboard: false});
                $("#RegisterModal").find("#Preload").hide();

            });
            $("#LoginModal").find("#Save").on("click",function(){

                $(this).hide();




            
            });



            $("#LoginModal").find("#Preload").hide();
            $("#LoginModal").find("#Save").on("click",function(){

                $(this).hide();
                var UserName = $("#LoginModal").find("#username").val();
                var Password = $("#LoginModal").find("#password").val();
                if(UserName == ""){
                    swal("alert","กรุณาระบุ UserID", "error");
                    $("#LoginModal").find("#Preload").hide();
                    $("#LoginModal").find("#Save").show();
                    return false;
                }
                if(Password == ""){
                    swal("alert","กรุณาระบุ Password", "error");
                    $("#LoginModal").find("#Preload").hide();
                    $("#LoginModal").find("#Save").show();
                    return false;
                }
                $("#LoginModal").find("#Preload").show();

            
                $.post("https://cac.webclient.me/api/validateDataUserID.php",{
                    UserName : UserName,
                    Password : Password
                },function(data){

                    if(data == 0){

                        swal("alert","ข้อมูลผิดพลาด...", "error");
                        $("#LoginModal").find("#Preload").hide();
                        $("#LoginModal").find("#Save").show();
                        return false;

                    }else{

                        
                        var obj = JSON.parse(data);
                        console.log(obj);

                        $.post("https://rhz.webclient.me/index.php/member/signin",{
                            UserNum : obj.UserNum[0],
                            UserName : obj.UserName[0]
                        },function(data){
                            //// is logon

                            location.href = "https://rhz.webclient.me/index.php/member";

                            //// is logon
                        });
                        
                        //$("#LoginModal").find("#Preload").hide();
                        //$("#LoginModal").find("#Save").show();
  
                    }


                });


            });

        });
    </script>

 

  

  

 </body>

