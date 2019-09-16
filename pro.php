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
			
			width: 600px;
			border-color: 10px solid orange	;
			border-radius: 10px;
			background-color: orangered;
			color:white;
			height: 560px;
			margin-top: 30px;
		}
		/*body{
			background-color: #051F25;
		}*/
		input{
			width: 70%;
			height: 2.5em;
			border-radius: 10px;
			color: black;
			border:none;
		}
		#sub{
			width: 50%
		}
		#sub:hover{
			background-color:#051F25
		}
	</style>
</head>
<body style="background-color: orangered;font-family:  Georgia;">
	<center>
	<form action="process.php" method="post">
		<font color="white">
			<?php 
				if (isset($msg)) {
					echo $msg;
				}
			 ?>
		</font>
		<legend style="color:white;font-size: 3em">Login please</legend>
		<img src="images/ben.jpg" style="height: 200px;width: 500px;" class="img-circle"><br><br>
		<b><label>Username</label></b><br><br>
		<input type="text" name="username" placeholder="  Enter your Username" class="text-warning"><br><br>

		<b><label>Password</label></b><br><br>
		<input type="Password" name="password" placeholder="Enter your Password" class="text-warning"><br><br><br>
		<input type="submit" name="" value="Continue" class="btn btn-primary" id="sub"><br><br><br>

		<h4>NOTE:Use your RegistrationUsername and password to login</h4>
	</form>
</center>

</body>
</html>