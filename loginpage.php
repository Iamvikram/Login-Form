<?php
session_start(); //start session
//check session set(if set then redirect user to user_profile page)
if(@$_SESSION['id'])
{
	header('location: user_profile.php');
	exit;
}
$error_message="";
//check for form submit action
if(isset($_POST['email']) && isset($_POST['pass']) && !empty($_POST['email']) && !empty($_POST['pass']))
  {
    include("script/db_connection.php");
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$password=mysqli_real_escape_string($conn,$_POST['pass']);
	$query="SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result=mysqli_query($conn,$query);
	if(!$result)
	{
		exit(mysqli_error($conn));
	}
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$_SESSION['id']=$row['id'];
			$_SESSION['first_name']=$row['first_name'];
			$_SESSION['last_name']=$row['last_name'];
			$_SESSION['email']=$row['email'];
			$_SESSION['password']=$row['password'];
		}
		header('location :user_profile.php');
		exit ;
	}
	else
	{
		$error_message = "Invalid login details, Please try again!";
	}
  }
else
{
	$error_message = "Please enter your login details!";
}
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
    <!Bootstrap css file-->
   <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<!--content section-->
<div class="container">
  <div class="row jumbotron">
     <div class="col-md-6">
	     <h2>Login</h2>
	     <p><a href="index.php">Home</a> | <a href="loginpage.php">Login</a> | <a href="register.php">Register</a></p>
	     <form  action="loginpage.php" method="post">
	       <div class="form-group">
	            <label for="email"> Email Address </label>
		        <input type="email" name="email" placeholder="Email Address" class="form-control">
	       </div>
	       <div class="form-group">
	           <label for="pass"> Password </label>
		       <input type="password"  name="pass" placeholder="password" class="form-control">
	       </div>
	       <div class="form-group">
	           <button type="submit" class="btn btn-primary">Login</button>
           </div>
		   <div class="form-group">
		   <?php echo $error_message; ?>
		   </div>
	     </form>
     </div>
  </div>
 </div>  
<!--JQUERY JS file -->
<script src="js/jquery-1.12.4.min.js"></script>
</body>
</html>