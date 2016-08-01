<?php
session_start(); //required for used session
if(isset($_SESSION['id']))
{
header("location: user_profile.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
    <!Bootstrap css file-->
   <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<!--content section-->
<div class="container">
  <div class="row jumbotron">
     <div class="col-md-6">
	   <h2>Register</h2>
	   <p><a href="index.php">Home</a> | <a href="loginpage.php">Login</a> | <a href="register.php">Register</a></p>
	  <div class="row">
	    <div class="col-md-6">
	      <div class="form-group">
	        <label for="firstname">First Name </label>
	        <input type="text" id="firstname" placeholder="First name" class="form-control">
	      </div>
	    </div>
	    <div class="col-md-6">
	      <div class="form-group">
	        <label for="lastname">Last Name </label>
	        <input type="text" id="lastname" placeholder="Last name" class="form-control">
	      </div>
	   </div>
	   </div>
	   <div class="form-group">
	      <label for="email"> Email Address </label>
		  <input type="text" id="email" placeholder="Email Address" class="form-control">
	   </div>
	   <div class="form-group">
	      <label for="pass"> Password </label>
		  <input type="password" id="pass" placeholder="password" class="form-control">
	   </div>
	   <div class="form-group">
	      <label for="pass_again"> Password </label>
		  <input type="password" id="pass_again" placeholder="confirm password" class="form-control">
	   </div>
	   <div class="form-group">
	   <button class="btn btn-primary" onclick="register()">Submit</button>
     </div>
     </div>
</div>
<!--JQUERY JS file -->
<script src="js/script.js"></script>
<script src="js/jquery-1.12.4.min.js"></script>
</body>
</html>