<?php
include 'header.php';
?>
<style>
  .controls{
    box-shadow: 2px  1px cyan;
    border-radius: 3px;
  }
</style>
<body id="page-top " >

<div class="container">
  <form action="db.php" method="post" enctype="multipart/form-data">
    
   <div class="form-group ">
           
   
    <div class=" col-lg-6 col-sm-offset-2">
        <h1> Change Password:</h1>
        <div class="control-group">
            <label for="new_password" class="control-label">New Password</label>
            <div class="controls">
                <input type="password" class="form-control" name="new_password">
            </div>
        </div>
        <div class="control-group">
            <label for="confirm_password" class="control-label">Confirm Password</label>
            <div class="controls">
                <input type="password" class="form-control" name="confirm_password">
            </div>
        </div>      
    
          <div class="modal-footer">
             
              <button href="#" class="btn btn-primary" id="password_modal_save">Save changes</button>
          </div>
  </div>
</div>

   </form>
</div>



</body>
</html>