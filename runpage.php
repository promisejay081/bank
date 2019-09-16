<?php 
require 'dbcon.php';
$password = $_POST['password'];
echo mysqli_error($con);
	$check = mysqli_query($con, "SELECT * from customer_tb where password='$password'");
	$see=true;
	while ($row=mysqli_fetch_array($check))
	 {
		$see=false;
	}
	if ($see) {
		$msg="Incorrect";
		include 'run.php';
	}
else{
	include 'testface.php';
	}	


 ?>
