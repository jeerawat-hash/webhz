<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>เพิ่มไอเทม</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" id="additem" >เพิ่มไอเทม</button>

















  
  <!-- Modal -->
  <div class="modal fade" id="ModalFindItemToShop" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">


            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <label>เลือกไอเทมที่ต้องการ : </label>
                    </div>
                    
                    <div class="col-6 ">
 
                        <input type="text" list="itemdata" id="ItemNameSearch" />
                            <datalist id="itemdata">

                            <option value="cloth">เครื่องแต่งกาย</option> 
                            
                            </datalist> 
  

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label>หมวดไอเทม : </label>
                    </div>
                    
                    <div class="col-6">

                        <select name="categoty" id="categoty">
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
                    
                    <div class="col-6">
                        
                        <input type="text"  id="Price" />
 
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label>คำอธิบาย : </label>
                    </div>
                    
                    <div class="col-6">
                        
                        <input type="text"  id="Descript" />
 
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label>ภาพ : </label>
                    </div>
                    
                    <div class="col-6">
                        
                        <input type="file"  id="ImageFile" />
 
                    </div>
                </div>

 

            </div>

        





        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="Save">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>









<script>

    $(function(){

        $("#additem").on("click",function(){


            $("#ModalFindItemToShop").modal();


        });


        $("#ModalFindItemToShop").find("#Save").on("click",function(){

            alert();


        });













    });


</script>








</body>
</html>
