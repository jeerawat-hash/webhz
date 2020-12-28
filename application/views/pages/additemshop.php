<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<body>

<div class="container">
  <h2>เพิ่มไอเทม</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" id="additem" >เพิ่มไอเทม</button>

 




<div class="modal" tabindex="-1" role="dialog" id="ModalFindItemToShop">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          




      <div class="container">
                <div class="row">
                    <div class="col-6">
                        <label>เลือกไอเทมที่ต้องการ : </label>
                    </div>
                    
                    <div class="col-6 form-group"> 
    
                        <input type="text" list="itemdata" class="form-control" id="ItemNameSearch" />
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
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
