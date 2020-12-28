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
                    <div class="col-6 .col-md-6 .ml-auto">

                    <div class="form-group">  

                        <input type="text" class="form-control" list="item" />
                            <datalist id="item">
                            <option>Volvo</option>
                            <option>Saab</option>
                            <option>Mercedes</option>
                            <option>Audi</option>
                            </datalist> 

                    </div>


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
