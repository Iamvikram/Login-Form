<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>User Profile</title>
<!Bootstrap css file-->
   <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="container">
<div class="jumbotron">
<h2>Welcome, <?php echo $_SESSION['first_name']; ?> </h2>
<p> My Details </p>
<p> Fullname: <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?> </p>
<p> Email : <?php echo $_SESSION['email']; ?> </p>
<p>
<a href="logout.php?logout=true">Log out </a>
</p>
</div>
</div>
</body>
</html>