<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<body>

<div class="container">
  <h2>เพิ่มไอเทม</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" id="additem" >เพิ่มไอเทม</button>

 




<div class="modal fade" tabindex="-1" role="dialog" id="ModalFindItemToShop">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">เพิ่มไอเทม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          




      <div class="container">
                <div class="row">
                    <div class="col-6">
                        <label>ค้นหาไอเทมที่ต้องการ : </label>
                    </div>
                    
                    <div class="col-6 form-group"> 
    
                        <input type="text" list="itemdata" autocomplete="off" class="form-control" id="ItemNameSearch" name="ItemNameSearch" />
                            <datalist id="itemdata">
 
                            
                            </datalist> 
  

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label>ค้นหาไอเทมที่ต้องการ : </label>
                    </div>
                    
                    <div class="col-6 form-group"> 
    
                        <select name="ItemSelect" class="form-control" id="ItemSelect">
                        <option  data-mid="A" data-sid="B" >--- กรุณาเลือกไอเทม ---</option>  
                        </select>
                     
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label>หมวดไอเทม : </label>
                    </div>
                    
                    <div class="col-6 form-group"> 
       
                        <select name="categoty" class="form-control"  id="categoty">
                        <option value="cloth">เครื่องแต่งกาย</option> 
                        <option value="weapon">อาวุธ</option> 
                        <option value="access">สร้อย</option> 
                        <option value="card">บัตร</option> 
                        <option value="other">อื่นๆ</option> 
                        </select>
 
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-6">
                        <label>ราคา(พ้อย) : </label>
                    </div>
                    
                    <div class="col-6 form-group">
                        
                        <input type="text" class="form-control" autocomplete="off" id="Price" />
 
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label>คำอธิบาย : </label>
                    </div>
                    
                    <div class="col-6 form-group">
                        
                        <input type="text" class="form-control" autocomplete="off" id="Descript" />
 
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label>ภาพ : </label>
                    </div>
                    
                    <div class="col-6 form-group">
                        
                        <input type="file" class="form-control-file"  id="ImageFile" />
 
                    </div>
                </div>

 

            </div>

  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="Save">บันทึก</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>







<script>

    $(function(){

        $("#additem").on("click",function(){


            $("#ModalFindItemToShop").modal();


        });


        $("#ModalFindItemToShop").find("#ItemNameSearch").on("change",function(){
            var Item = $(this).val();

            $.post("https://cac.webclient.me/api/getdataallitemserver.php",{
                ItemName : Item
            },function(data){ 
                $("#ModalFindItemToShop").find("#ItemSelect").empty();
 
                var obj = JSON.parse(data);
                console.log(obj);
                var html = "";
                for (var i = 0; i < obj.ItemName.length; i++) {
                    
                    html += ' <option data-mid="'+obj.MID[i]+'" data-sid="'+obj.SID[i]+'" data-name="'+obj.ItemName[i]+'" >'+obj.ItemName[i]+'</option>   ';
                    
                }

                $("#ModalFindItemToShop").find("#ItemSelect").html(html);
                


            });
              
        });

 

        $("#ModalFindItemToShop").find("#Save").on("click",function(){
   
            var mid = $("#ModalFindItemToShop").find("#ItemSelect option:selected").attr("data-mid");
            var sid = $("#ModalFindItemToShop").find("#ItemSelect option:selected").attr("data-sid");
            var categoty = $("#ModalFindItemToShop").find("#categoty option:selected").val();
            var name = $("#ModalFindItemToShop").find("#ItemSelect option:selected").attr("data-name"); 
            var price = $("#ModalFindItemToShop").find("#Price").val();
            var desc = $("#ModalFindItemToShop").find("#Descript").val();
            
            $("#ModalFindItemToShop").find("#Save").hide();

            var data = new FormData();          
				var ItemIMG = $('#ImageFile').prop('files')[0];  
				data.append('ItemIMG', ItemIMG);   
				data.append('MID', mid);   
				data.append('SID', sid);   
				data.append('Name', name);   
				data.append('Price', price);   
				data.append('Desc', desc);   
				data.append('categoty', categoty);   
					  
				setTimeout(function(){ 
				 $.ajax({
					        	url:"https://cac.webclient.me/api/getAddItemToShop.php",
					        	type:"POST",
					        	data:data,
					        	contentType : false,
					        	cache : false,
					        	processData : false,
					        	success : function(data){

					        			//console.log(data);
					        	 		 
										//swal("สำเร็จ !!","รายการอยู่ระหว่างดำเนินการตรวจสอบ..", "info");
                                        $("#ModalFindItemToShop").find("#Save").show();
                                        $("#ModalFindItemToShop").modal("hide");


					        	},
					        	error : function(){


					        	}
					        });
				 }, 2000);









        });
       // 












    });


</script>








</body>
</html>
