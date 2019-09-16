<!DOCTYPE html>
<html>
<head>
	<title>Sign Up first</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


	<script type="text/javascript" src="wowjs/wow.min.js"></script>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style>
		form{
			border: 5px solid red;
			width: 500px;
			border-color:  red orangered orange yellow;
			border-radius: 20px;
			background-color: #234567;
			color:white;
			height: 300px;
			margin-top: 100px
		}
		body{
			background-image: url(images/ch.jpg);
			background-size: cover;
		}
	</style>
</head>
<body>
	<center>
	<form action="runpage.php" method="post">
		<font color="red">
			<?php 
				if (isset($msg)) {
					echo $msg;
				}
			 ?>
		</font>
		<legend style="color:white">Login please</legend>
		<b><label>Password</label></b><br><br>
		<input type="Password" name="password" placeholder="Enter your Password" class="text-warning"><br><br><br>
		<input type="submit" name="" value="Continue" class="btn btn-primary"><br><br><br>
		<h4>NOTE:Use your Registration password to login</h4>
	</form>
</center>

</body>
</html>
