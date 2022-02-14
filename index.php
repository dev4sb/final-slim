<?php  
//session_start();  
  
//if(!$_SESSION['Email'])  
 //{  
  //echo "not";
  //header("Location:http://localhost/slim/slim/app/admin/form.php");  }  
 //} 
?>  


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="validation.js">  </script>
<style type="text/css">
   .error
    {
      width: 100%;
      color: red;
    }

    .a
    {
      width: 17px;
    }
    .pagination_link:hover
    {
      background: grey;
    }
    input#search_param {
    height: 40px
px
;
    width: 250px;
}
    
</style>
</head>
<body>
  <div class="alert alert-danger" id="danger" style="display: none;" >
    <strong>Deleted!</strong> Data Deleted..........
  </div>
  <div class="alert alert-info" id="update" style="display: none;" >
    <strong>Updated!</strong> Data Updated Successfully..........
  </div>
  <div class="alert alert-success" id="success" style="display: none;" >
    <strong>Inserted!</strong> Data Inserted Successfully..........
  </div>

<div class="container mt-3" >
  <div style="text-align:right;">
  <button type="button" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Add +</button>
</div>
  <button type="button" id="delete" class="btn btn-danger" style="margin:0 60px;" >Delete</button></div></br></div>
  <div class="container">
  <span class="input-group-addon">Search:</span>
     <input type="text" id="search_param" placeholder="Search..." class="form-control" />
   </div>
<div class="container mt-3">
      <div id="table">     
  
</div>
</div>








<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <form  id="form-signup" class="signup" method="POST"> 
             <input type='text' hidden class='form-control'  id='id' >
        <h6>Name :-</h6> 
        <div class="input-group mb-3"> 
                <input type="text" class="form-control"  name="firstname" id="firstname">
           </div> 
      
      
      <h6>Email :-</h6> 
      <div class="input-group mb-3">
       <input type="email" class="form-control"  name="email" id="email"> 
     </div> 
      <h6>BirthDate :-</h6>
       <div class="input-group mb-3">
       <input type="Date" class="form-control" name="dob" id="dob"> 
     </div>
      <h6>Gender :-</h6>
        <div style="margin:10px">
          <input type="radio" id="age1" class=" gender form-check-input a " name="gender" value="Male"> Male
          <input type="radio" id="age2" class=" gender form-check-input a " name="gender" value="Female"> Female
          
        </div>
      <h6>skill :-</h6>
        <div style="margin:10px">
          <input type="checkbox" class="form-check-input a" name="hobby" id="hobby1" value="HTML"> HTML
          <input type="checkbox" class="form-check-input a" name="hobby" id="hobby2" value="CSS"> CSS
          <input type="checkbox" class="form-check-input a" name="hobby" id="hobby3" value="PHP"> PHP
        </div>
      <h6>Education :-</h6>
        <select class="form-select" name="education" id="education">
          <option value="">Select....</option>
          <option value="Gujrati">Gujrati</option>
          <option value="English">English</option>
          <option value="Science" >Science</option>
        </select>
    
    <h6>IMAGE: </h6>
        <div class="input-group mb-3">
          <input type="file" class="form-control" name="profile" id="profile">
        </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
            <button type="submit" value="submit" name="submit" class="btn btn-success" id="sub">submit</button>
             <button type='button' id='bn_update' class='btn btn-success' style="display:none;">Update </button>
        <button type="reset" class="btn btn-primary">Reset</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      </div>

</form>
    </div>
  </div>
</div>
 
</body>
</html>