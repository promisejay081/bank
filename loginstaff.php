<?php 
require 'dbcon.php';
$email = $_POST["email"];
$password = $_POST["password"];
	echo mysqli_error($con);
	$check = mysqli_query($con, "SELECT * from staff_tb where email='$email' and password='$password'");
	$see=true;
	while ($row=mysqli_fetch_array($check))
	 {
		$see=false;
	}
	if ($see) {
		$msg="Incorrect";
		include 'loginface.php';
	}
else{
	include 'Dashboard.php';
	}	


 ?>

