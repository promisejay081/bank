<?php 
if (isset($_POST["username"])&&(isset($_POST["password"]))) {
require 'dbcon.php';
$username = $_POST["username"];
$password = sha1($_POST["password"]);
	//echo mysqli_error($con);
	$check = mysqli_query($con, "SELECT * from customer_tb where username='$username' and password='$password'");
	$see=true;
	while ($row=mysqli_fetch_array($check))
	 {
		$see=false;
	}
	if ($see) {
		$msg="Incorrect";
		include 'log.php';
	}
else{
	include 'Home.html';
	}	
}else{
	$msg="Login First";
		include 'log.php';
}

 ?>
