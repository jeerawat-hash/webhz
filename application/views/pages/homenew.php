 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8 " />  
 <link rel="Shortcut Icon" href="https://shop.ran-origin.com/favicon.ico" type="image/x-icon" /> 

<title>RanOnline - Hazakura ยินดีต้อนรับ</title>
<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/ccr/css/style.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>


</script>
<script> 
$(document).ready(function(){

            
    setInterval(function(){ 
        $.post("https://cac.webclient.me/api/getdatastatusservers.php",function(data){
     
                var obj = JSON.parse(data);
                
                var html = "";

                for (var i = 0; i < obj.TOPRank.Class.length; i++) {
                     
                    html += '<div style="margin-top:-60px; float:left;"> '+
                    '<p style="float:left; margin-top:46px; margin-left:10px; font-size:16px; width:100px; text-align:center;">'+
                    ''+obj.TOPRank.Name[i]+'</p>'+
                    '<p style="float:left; margin-top:46px; margin-left:10px; font-size:16px; width:75px text-align:center;;">'+obj.TOPRank.Class[i]+'</p>'+
                    '<p style="float:left; margin-top:46px; margin-left:10px; font-size:15px; width:110px; text-align:center;">[<font style="color: #8DFF33">'+obj.TOPRank.Weapon[i]+'</font>]</p>'+
                    '</div> ';

                }
     

                var field0 = '<font style="color: #E03720">Offline</font>';
                if (obj.Field0 == "Online") {
                    field0 = '<font style="color: #74E020">Online</font>';
                }
                var field1 = '<font style="color: #E03720">Offline</font>';
                if (obj.Field1 == "Online") {
                    field1 = '<font style="color: #74E020">Online</font>';
                }
                var Login = '<font style="color: #E03720">Offline</font>';
                if (obj.Login == "Online") {
                    Login = '<font style="color: #1321DC">ผู้เล่นขณะนี้ '+obj.ChaOnline+' คน</font>';
                }


                $("#TxtStatusCH0").html(field0);
                $("#TxtStatusCH1").html(field1);
                $("#TxtStatusLogin").html(Login);

      
                $("#RankingID").html(html);

     

        });
    }, 10000);





    $.post("https://cac.webclient.me/api/getdatastatusservers.php",function(data){
     
                var obj = JSON.parse(data);
           
                var html = "";

                for (var i = 0; i < obj.TOPRank.Class.length; i++) {
                     
                    html += '<div style="margin-top:-60px; float:left;"> '+
                    '<p style="float:left; margin-top:46px; margin-left:10px; font-size:16px; width:100px; text-align:center;">'+
                    ''+obj.TOPRank.Name[i]+'</p>'+
                    '<p style="float:left; margin-top:46px; margin-left:10px; font-size:16px; width:75px text-align:center;;">'+obj.TOPRank.Class[i]+'</p>'+
                    '<p style="float:left; margin-top:46px; margin-left:10px; font-size:15px; width:110px; text-align:center;">[<font style="color: #8DFF33">'+obj.TOPRank.Weapon[i]+'</font>]</p>'+
                    '</div> ';

                }
     

                var field0 = '<font style="color: #E03720">Offline</font>';
                if (obj.Field0 == "Online") {
                    field0 = '<font style="color: #74E020">Online</font>';
                }
                var field1 = '<font style="color: #E03720">Offline</font>';
                if (obj.Field1 == "Online") {
                    field1 = '<font style="color: #74E020">Online</font>';
                }
                var Login = '<font style="color: #E03720">Offline</font>';
                if (obj.Login == "Online") {
                    Login = '<font style="color: #1321DC">ผู้เล่นขณะนี้ '+obj.ChaOnline+' คน</font>';
                
                }


                $("#TxtStatusCH0").html(field0);
                $("#TxtStatusCH1").html(field1);
                $("#TxtStatusLogin").html(Login);

      
                $("#RankingID").html(html);

     

        });










  $("#Csquared").click(function(){
    $("#CsquaredCon").slideToggle("fast");
  });
  
  $("#Csquared1").click(function(){
    $("#CsquaredCon1").slideToggle("fast");
  });
  
    $("#dialog").dialog({
		autoOpen: false,
      show: {
        effect: "fadeIn",
        duration: 1000
      },
      hide: {
        effect: "fadeOut",
        duration: 1000
      }
		});
  
  $( "#Register" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  
  $( "#close" ).click(function() {
      $( "#dialog" ).dialog( "close" );
    });
	
});
</script>
</head>

<body>

    
    <div class="container">
    
        <div class="navigation" style="font-size:20px; color:#fff;">
       		 
             <div style="margin-top:30px; margin-left:70px; float:left;">
            <a href="https://liff.line.me/1655100623-pRNmqX2D" class="navItem">ลงทะเบียน</a></div> 
            <div style="margin-top:30px; margin-left:70px; float:left;">
            <a href="https://drive.google.com/file/d/1lhRkpBiC7E3K8ojtQr8vQ2ufo0Z90RZL/view?usp=sharing" target="_blank" class="navItem">ดาว์โหลด</a></div>
            <div style="margin-top:30px; margin-left:70px; float:left;">
            <a href="https://liff.line.me/1655100623-YNaPAD2N" class="navItem">ตลาดซื้อขาย</a></div>
            <div style="margin-top:30px; margin-left:70px; float:left;" >
            <a href="#" class="navItem">บริจาค</a></div>
            <div style="margin-top:30px; margin-left:70px; float:left;">
           	<a href="#" class="navItem">สถิติผู้เล่น</a></div> 
            <div style="margin-top:30px; margin-left:70px; float:left;">
           	<a href="#" class="navItem">แนะนำการเล่น</a></div> 

            
        </div>
             
        <img src="https://rhz.webclient.me/assets/ccr/img/logo2.png" style="margin-top:60px; margin-left:50px;" /> 
        
       	
        <div style="position:absolute; margin-top:360px; margin-left:-10px;">
        
        <div class="leftContainer">
        	
            <div id="Csquared" class="titleBar" style=" position:relative;">
            <div class="titleBartitle">ข่าวสาร</div></div>
            
            <div id="CsquaredCon"  class="ContentNewsVis" >
            <div  align="justify"  style="float:left; margin:10px;"> 


                Hazakura  เป็นเซิฟเวอร์ที่เปิดเพื่อพัฒนาและทดสอบระบบฐานข้อมูลเต็มรูปแบบและทำวิจัยเกี่ยวกับระบบการให้บริการเกม RAN จึงไม่มี ITEM MALL หรือ SHOP ที่ Admin สามารถ Generate ของขายได้แต่จะเป็นการจัดทำระบบที่ผู้เล่นสามารถ สร้างไอเทมขึ้นมาขายเองได้ผ่านระบบที่ทาง Admin จัดทำขึ้นแทนเพื่อทำให้เกิดความสมดุลต่อการเล่นในสังคม RolePlay
                <br>
                <font color="red">คำเตือน </font>: Server นี้ไม่เหมาะกับผู้เล่นที่เน้นความเวอร์วังอลังการเพราะเป็น Server แนว Classic เน้นเสถียรภาพในการเล่นสูงและมีการควบคุมอัตราการเฟ้อของ Item และ ค่าเงินในเกม



             </div>
            </div>
            
            <div id="Csquared1" class="titleBar" style=" position:relative; margin-top:10px;">
            <div class="titleBartitle">ข้อมูลการอัพเดทแพชล่าสุด</div></div>
            <!--  <div id="CsquaredCon1" class="ContentNewsHid" style=""> -->
            <div id="CsquaredCon1" class="ContentNewsVis" style="">
            <div  align="justify"  style="float:left; margin:10px;"> 
            Hazakura PatchInfo
            <br>
            <font color="red">1.0.0 </font> : แก้ไขดรอปและปัญหาบัคต่างๆและอัพเดทกิจกรรมกล่องสุ่มไอเทมหลัง Tyranny , SW 
                </div>
            </div>
            
            
           	 
        </div>
        
        <div class="rightContainer">
        	
       		<div id="Csquared1" class="minititleBar" style=" position:relative;">
            <div class="titleBartitle">กิลครองบ้าน</div></div>
            <div id="CsquaredCon"  class="miniContentNewsVis" style="height:300px;" >
            <div  align="justify"  style="float:left; margin:10px;">
                

 

            	<div style="min-width:315px;">
            	<img src="https://rhz.webclient.me/assets/ccr/img/sg.png" style="float:left;" />
                <div style="float:left; margin-left:5px;">
                <div style="font-family:BigNoodleTitling; font-size:24px;">Sacred Gate</div>
                <div style="font-family:Calibri; font-size:14px;">
                ชื่อกิล : -<br />
                หัวหน้ากิล : -<Br /> 
                </div>
                </div>
            	</div>




                <BR /><BR /><BR /><BR /><BR /><BR />



                <div style="min-width:315px;">
            	<img src="https://rhz.webclient.me/assets/ccr/img/ph.png" style="float:left;" />
                <div style="float:left; margin-left:5px;">
                <div style="font-family:BigNoodleTitling; font-size:24px;">Phoenix</div>
                <div style="font-family:Calibri; font-size:14px;">
                ชื่อกิล : -<br />
                หัวหน้ากิล : -<Br /> 
                </div>
                </div>
            	</div>


                <BR /><BR /><BR /><BR /><BR /><BR />



                <div style="min-width:315px;">
            	<img src="https://rhz.webclient.me/assets/ccr/img/mp.png" style="float:left;" />
                <div style="float:left; margin-left:5px;">
                <div style="font-family:BigNoodleTitling; font-size:24px;">Mystic Peak</div>
                <div style="font-family:Calibri; font-size:14px;">
                ชื่อกิล : -<br />
                หัวหน้ากิล : -<Br /> 
                </div>
                </div>
            	</div>
                
            
            </div>
            </div>
            
            <div id="Csquared1" class="minititleBar" style=" position:relative; margin-top:10px;">
            <div class="titleBartitle">ผู้เล่นติดอันดับ</div></div>
            <div id="CsquaredCon"  class="miniContentNewsVis" style="height:400px;" >
            <div  align="justify"  style="float:left; margin:0px;">
            


                <div style="margin-top:-30px; float:left;">
                <p style="float:left; margin-top:46px; margin-left:10px; font-size:16px; width:100px; text-align:center;">
                ชื่อ</p>
                <p style="float:left; margin-top:46px; margin-left:10px; font-size:16px; width:75px text-align:center;;">อาชีพ</p>
                
                <p style="float:left; margin-top:46px; margin-left:10px; font-size:15px; width:110px; text-align:center;">ใช้อาวุธ</p>
                </div>


                <div id="RankingID"></div>
            
            
            	 
            </div>
            </div>
            
        </div>
        </div>
        <img src="https://rhz.webclient.me/assets/ccr/img/content-pic.png" style="margin-top:-60px; margin-right:-110px; float:right;" >
        <div style="margin-left:642px; position:absolute; float:right;">
 
        
        </div>
        
        <div style="margin-top:117px; position:absolute; float:left;">
        	<!-- Login -->

            <!-- Server info -->
            <div class="boxTransparent" style="margin-left:7px;">
            	<div class="TitleForBox">รายละเอียด</div>
                
                <div align="justify" style="background-color:#212121; color:#FFF; font-family:Calibri; font-size:16px; padding:5px; width:290px; margin-left:7px; border-radius:5px; height:155px;">
                
 <h7> <font style="color: #DC1381;font-size: 20px">[Hazakura]</font></h7> 
   <br>Server ให้บริการ 24/7 มีจำนวน 2 Channel <br> <font color="red">Channel 0 [Event+PK]</font><br>FreePK และ กิจกรรมรายวันรวมถึงกิลวอ <br><br> <font style="color: #74E020">Channel 1 </font><br>NonPK และ กิจกรรมพิเศษที่ Admin จัด <br>  
                </div>
                
            </div> 

            <!-- Server Status -->
            <div class="boxTransparent" style="margin-left:7px;">
                <div class="TitleForBox">สถานะเซิฟเวอร์</div>
                
                <div style="margin-left:10px;">
                
                <div class="Fields3" style="margin-top:7px;">
                    <p><h4> <label  id="TxtStatusCH0"> - </label>   </h4></p>
                </div>
                <img src="https://rhz.webclient.me/assets/ccr/img/Ch0.png" style="margin-left:-6px; margin-top:2px;" />
                
                <div class="Fields3" style="margin-top:7px;">
                    <p><h4> <label  id="TxtStatusCH1"> - </label> </h4></p>
                </div>
                <img src="https://rhz.webclient.me/assets/ccr/img/ch1.png" style="margin-left:-6px; margin-top:2px;" />
                

                <div class="Fields3" style="margin-top:7px;">
                    <p><h4> <label  id="TxtStatusLogin"> - </label> </h4></p>
                </div>
                <img src="https://rhz.webclient.me/assets/ccr/img/login.png" style="margin-left:-6px; margin-top:2px;" />
                
                
                </div>

                
            </div> 

            <!-- Server Rate -->
            <div class="boxTransparent" style="margin-left:7px;">
            	<div class="TitleForBox">ได้รับไอเทมและเลเวล</div>
                
                <div style="margin-left:10px;">
                    <div class="Fields4" style="margin-top:7px;">
                    <p><h4> <font style="color: #FF5733">ค่าประสบการณ์ 120% </font> </h4></p>
                    </div>
                    <img src="https://rhz.webclient.me/assets/ccr/img/exp.png" style="margin-left:-5px; margin-top:2px;" />
                     
                     <div class="Fields4" style="margin-top:7px;">
                    <p><h4> <font style="color: #FF5733">อัตราการได้รับไอเทม 500%</font> </h4></p>
                    </div>
                    <img src="https://rhz.webclient.me/assets/ccr/img/Itema.png" style="margin-left:-5px; margin-top:2px;" />
                     
                     <div class="Fields4" style="margin-top:7px;">
                    <p><h4> <font style="color: #FF5733">อัตราการได้รับเงิน 100% </font> </h4></p>
                    </div>
                    <img src="https://rhz.webclient.me/assets/ccr/img/money.png" style="margin-left:-5px; margin-top:2px;" />
                     

                </div>
                
            </div> 
            
        </div>
        
    <div style="margin-top:900px;">
             <img src="https://rhz.webclient.me/assets/ccr/img/footer.png"/>
             <center>
             <div style="margin-bottom:100px; margin-top:20px; font-family:Calibri; font-size:14px; color:#FFF;">
             All Rights Reserved Hazakura RanOnline<BR />
             
             </div>
             </center>
	</div>
    
</body>
</html>
