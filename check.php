<!DOCTYPE html>
<html>
<head>
	<title>Balance</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


	<script type="text/javascript" src="wowjs/wow.min.js"></script>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style>
		body{
			background-color: orangered;
		}

	</style>
</head>
<body>
	<div style="background-color: white;height: 90px;margin-top: -20px">

	<h2 style=";color: orangered;margin-left: 50px" id="mo"  class="wow bounceIn">TOWER <li class="fa fa-apple" style="color: orangered;font-size: 2em" id="mo"></li>Bank
		</h2>

	</div>

	<center>
	<h1>Your Account Balance is </h1>
	
	<?php 
	session_start();
	require 'dbcon.php';
	$check = mysqli_query($con, "select * from account where account='$_SESSION[num]'");
	while ($r=mysqli_fetch_array($check)) {
		$can=$r['balance'];
	}
	echo $can;
	 ?>
	</center>

</body>
</html>