
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script type="text/javascript" src="validation.js">  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  	
  	@media screen and (max-width:768px)
  	{
  		.form
  		{
  			width: 300px !important;
  			margin: auto !important;
  		}

  	}

  	body
  	{
  		background-color: #45b1e8;
   	}
  	
  	button
  	{
  		background-color: #45b1e8;
  		color: #FFFFFF;
  		padding:  5px 20px;
  		border: none;
  	}
  	.form
  	{
  		margin: 200px 360px;
  	  		padding: 20px;
  	  		width: 464px;
  	  		background-color:#80daeb; 
  	}
  	.signup input
  	{
  		background-color: lightgrey;
  	}
  	.signup select
  	{
  		background-color:lightgrey; color: grey; margin-bottom: 10px;
  	}
  	.signup textarea
  	{
  		background-color: lightgrey;
  		margin-bottom: 10px;
  	}
  	.login
  	{
  		height:100%;width:auto; margin-top:100px;
  	}
  	.login h1
  	{
  		color:#ffffff; text-align: center; margin-bottom: 20px;
  	}
    .error
    {
      width: 100%;
      color: red;
    }

    .a
    {
      width: 17px;
    }


  </style>
  <script type="text/javascript">

    $(document).ready(function(){
      $("#form-login").validate()
    });
    $(document).ready(function(){
      $("#form-signup").validate()
    });

    $(document).ready(function(){
      $(".font_color").change(function(){
        $("body").css("color",$(this).val());
      });
    });

    $(document).ready(function(){
      $(".background_color").change(function(){
        $("body").css("background-color",$(this).val());
      });
    });

  
    
  </script>
</head>
<body>

<!-- <div>
  
<select class="font_color">
  <option>Select font color</option>
  <option value="green">Green</option>
  <option value="red">Red</option>
  <option value="blue">Blue</option>
</select>


<select class="background_color">
  <option>Select background color</option>
  <option value="green">Green</option>
  <option value="black">Black</option>
  <option value="blue">Blue</option>
</select>

</div> -->


	<div class="container">
		<div class="login">
<form id="form-login" class="form" method="post"> 
	<h1 style="text-align: center;">Login</h1>
        <!-- <label>Username:</label>

<div class="input-group mb-3">
      <span class="input-group-text">@</span>
      <input type="text" class="form-control" placeholder="Username">
    </div> -->
    <div class="alert alert-danger" id="danger" style="display: none;" >
    <strong>Email and Password</strong> Not Match..........
  </div>
    <label>Email:</label>
<div class="input-group mb-3">
      <span class="input-group-text"><i class="fa fa-user"></i></span>
      <input type="email" class="form-control email" placeholder="E-mail" name="email" id="email "required>
    </div>
    <label>Password:</label>
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="fa fa-key"></i></span>
      <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
    </div>

    <button type="button" value="login" id="login" name="login" >Login</button>	
    <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#modal">Sign Up</button> -->
</form>
</div>
</div>

<!-- <div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">


      <div class="modal-header" style="background-color:#222222">
        <h4 class="modal-title" style=" color:#FFFFFF">Sign Up</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      
      <div class="modal-body">
        <form  id="form-signup" class="signup"> 
      	<h6>Name :-</h6> 
      	<div class="input-group mb-3"> 
          <div class="col"> 
            <div class="row"> 
      		    <div class="col"> 
                <input type="text" class="form-control" placeholder="FirstName" name="firstname" required>
      		 </div> 
            <div class="col"> 
                <input type="text" class="form-control" placeholder="Last Name" name="lastname" required> 
            </div>
         </div> 
       </div>
      </div> 
      <h6>Email :-</h6> 
      <div class="input-group mb-3">
       <input type="email" class="form-control" placeholder="example@email.com" name="email"required> 
     </div> 
       <h6>Password :-</h6>
       <div class="input-group mb-3">
       <input type="password" class="form-control" placeholder="Password" name="password"required> 
     </div>
      <h6>Confirm Password :-</h6>
       <div class="input-group mb-3">
       <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" required> 
     </div>
      <h6>Gender :-</h6>
        <div style="margin:10px">
          <input type="radio" class="form-check-input a" name="gender[]" required> Male
          <input type="radio" class="form-check-input a" name="gender[]"> Female
        </div>
      <h6>Hobby :-</h6>
        <div style="margin:10px">
          <input type="checkbox" class="form-check-input a" name="Hobby[]" required> Reading
          <input type="checkbox" class="form-check-input a" name="Hobby[]"> Dancing
          <input type="checkbox" class="form-check-input a" name="Hobby[]"> Singing
        </div>
      <h6>Education :-</h6>
        <select class="form-select" name="education" required>
          <option value="">Select....</option>
          <option value="MCA">MCA</option>
          <option value="ME">ME</option>
          <option value="Bsc" >Bsc</option>
        </select>
     <h6>Description :-</h6>
        <textarea class="form-control" rows="3" id="comment" name="text" required></textarea>
    <h6>Profile </h6>
        <div class="input-group mb-3">
          <input type="file" class="form-control" name="Profile" required>
        </div>

      </div>

      
      <div class="modal-footer">
      	    <button type="submit" value="submit" name="submit" class="btn btn-success">submit</button>
      	<button type="reset" class="btn btn-primary" data-bs-dismiss="modal">Reset</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      </div>

</form>
    </div>
  </div>
</div> -->



</body>
</html>

