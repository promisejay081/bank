<!DOCTYPE html>
<html>
<head>
	<title>Staaff login interface</title>
	<meta name="viewport" content="width=device-width" initial-scale="1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


	<script type="text/javascript" src="wowjs/wow.min.js"></script>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style>
		form{
			margin-top: 30px;
			border:5px solid black;
			border-radius: 10px;
			width: 500px;
			height: 570px;
			background-color: transparent;
		}
		body{
			background-image: url(images/br.jpg);
			background-size: cover;
		}

	</style>
</head>
<body >
	<center>
	<form action="loginstaff.php" method="post" >
		<?php if( isset($msg)){ echo "<font color=red>$msg</font><br />"; } ?>
		<div style="background-color: white;">
		 <span class="fa fa-key fa-4x" ></span>
		</div>
		<fieldset>
		<legend>LOGIN</legend>
		</fieldset>

		
		<img src="images/im.png" style="width: 400px;height: 150px;" class="img-circle"><br><br>

		<div class="form-group" style="margin-left: 50px">

		<label>Email</label>
		<span class="input-group">
			<span class="input-group-addon">
			<i class="fa fa-envelope fa-2x"></i>
		</span>
		<input type="text" name="email" placeholder="Email" style="height: 40px;width: 340px;margin-right: 150px">
	</span><br>

		<label>Password</label>
		<span class="input-group">
			<span class="input-group-addon">
			<i class="fa fa-lock fa-2x"></i>
			</span>
		<input type="password" name="password" placeholder="Password" style="height: 40px;width: 350px;margin-right: 150px">
		</span><br><br>
	

		<input type="submit" name="" value="Register" class="btn btn-success" style="width: 250px">
		</div>
	</form>
</center>

</body>
</html>