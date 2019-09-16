<!DOCTYPE html>
<html>
<head>
	<title>Login process</title>
		<!--  <meta name="viewport" content="width=device-width" initial-scale="1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">

		<script type="text/javascript" src="wowjs/wow.min.js"></script>
		<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
  -->
  <style>
  	#mo {
      color: #fff;
      font-size: 40px;
      border-radius: 20px;
      background-color: yellow;
  }

  </style>
</head>
<body style="background-color:orange">
<center>
	<form action="login.php" method="post">
		<font color="red">
			<?php 
				if (isset($msg)) {
					echo $msg;
				}
			 ?>
		</font>
	<fieldset style="width:20%;height:300px;margin-top:150px;">
		<legend><h1>Log In</h1></legend>
		<form method="post" action="login.php">
			Username<br><input type="text" name="username"  placeholder="Username please"><br><br>
			Password<br><input type="password" name="password"  placeholder="Password please"><br><br><br>
			<input type="submit" name="submit" id="mo">
		</form>

	</fieldset>
</center>


</body>
</html>