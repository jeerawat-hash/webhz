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

      <li class="nav-item">
        <a class="nav-link  " href="https://rhz.webclient.me/index.php/member/topup">เติมเงิน</a>
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
 
<input type="text" readonly hidden id="StoreID" value="<?php echo $UserNum; ?>">

<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">

    <?php

    echo $UserNum."    ".$UserName;


    ?>



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
                        <label for="recipient-name" class="col-form-label">UserID</label>
                        <input type="text" class="form-control" id="username">
                    </div>

                </div>
                <div class="col-6" >
                
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>

                </div>
            </div>
         
        </div>

      </div>
      <div class="modal-footer"> 
      
        <div class="spinner-border text-primary" role="status" id="Preload">
        <span class="sr-only">Loading...</span>
        </div>

        <button type="button" class="btn btn-primary" id="Save">เข้าสู่ระบบ</button>
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

 

            $.get("https://rhz.webclient.me/index.php/member/validate",function(data){

                if(data == "0"){
                    $('#LoginModal').modal({backdrop: 'static', keyboard: false});
                }else{
                    //// is logon

                   

                    //// is logon
                }


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

