<!DOCTYPE html>
<html>
<head>
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">

<script type="text/javascript" src="wowjs/wow.min.js"></script>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
	<style type="text/css">
	
	</style>
</head>
<body style="background-image: url(second.jpg);">
<nav class="navbar navbar-inverse " >
 	<div class="container">
 		<div class="navbar-header">
 		<button class="navbar-toggle" data-toggle="collapse" data-target="#she">
 		<span class="icon-bar"></span>
 		<span class="icon-bar"></span>
 		<span class="icon-bar"></span> 			
 		</button>
 			<a href="#"><img src="36.jpg" style="height:90px"></a>
 		</div>

 		<div class="collapse navbar-collapse navbar-right" id="she">
 		<ul class="nav navbar-nav">
 		<li><a href="home.html" class="active" id="p">HOME</a></li>
 		<li><a href="#" class="active" id="p">DASHBORED</a></li>
 		<li><a href="customer.php" id="p">REGISTER CUSTOMER</a></li>
 		<li><a href="staff.php" id="p">STAFF REGISTER</a></li>
 		<li><a href="#" id="p">STAFF/ADMIN</a></li>
 		<li><a href="#" id="p">LOG-IN/LOG-OUT</a></li>

 		</ul>
 		</div>
 	</div>
 </nav>

	<center>
	<form method="post" action="stafflog.php" style="border:10px;width:600px;height:700px;border-radius:20px;background-color:orange">
		<?php if( isset($msg)){ echo "<font color=red></font><br />"; } ?>
		<fieldset><h2 style="background-color:white">REGISTER AS STAFF</h2></fieldset>
	<center>
	<img src="k.jpeg" style="width:50%;height:140px;" class="img-rounded">
	</center>
			<label>Surname:</label><br>
			<i class="fa fa-user"><input type="text" name="surname" style="width:500px" placeholder="surname"></i> <br>

			
			<label>Firstname:</label> <br>
			<i class="fa fa-user"><input type="text" name="firstname" style="width:500px;" placeholder="firstname"></i><br>

			<label>Lastname:</label><br>
			<i class="fa fa-user"><input type="text" name="lastname" style="width:500px" placeholder="lastname"></i> <br>

			<label>Username:</label><br>
			<i class="fa fa-user"><input type="text" name="username" style="width:500px" placeholder="username"></i> <br>

			<label>Password:</label><br>
			<i class="fa fa-key"><input type="password" name="password" style="width:500px" placeholder="password"></i> <br>

			<label>Email:</label><br>
			<i class="fa fa-envelope"><input type="text" name="email" style="width:500px" placeholder="email"></i> <br>

			<label>Address:</label><br>
			<input type="text" name="address" style="width:500px" placeholder="birthday"><br>

			<label>Birthday:</label><br>
			<input type="date" name="birthday" style="width:500px" placeholder="birthday"><br>

			<label>Phone Number:</label><br>
			<input type="text" name="phone" style="width:500px" placeholder="Phone number"><br>

			
		
			<i class="glyphicon glyphicon-log-in"><input type="submit" name="" value="Register" style="background-color:green;"></i>
	</form>
	</center>
	

</body>
</html>	