<?php
session_start();
if($_GET['logout']==true)
{
	session_destroy(); //now user session is destroyed
	header('location: index.php');
}
?>