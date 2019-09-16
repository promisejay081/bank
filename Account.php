<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
	<meta name="viewport" content="width=device-width" initial-scale="1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


	<script type="text/javascript" src="wowjs/wow.min.js"></script>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style>
		body{
			/*background-image: url(images/29.jpeg);
			background-repeat: no-repeat;
			background-size: cover;*/
			background-color: orangered

		}
		a {
			text-decoration: none;
		}
	</style>

</head>
<body>	
    
	<div style="background-color: white;height: 90px;margin-top: -40px">

	<h2 style=";color: orangered;margin-left: 50px" id="mo"  class="wow bounceIn">TOWER <li class="fa fa-apple" style="color: orangered;font-size: 2em" id="mo"></li>Bank
		</h2>

	</div>	
	
	<h2 style="color:#FF4500;text-align: center;"><b>SELECT YOUR TRANSACTION</b></h2>
    
	
		<!-- <div class="container" style="margin-top: 20px">
			<div  style="margin-top: 80px">
			<h2 style="color:#FF4500;text-align: center;"><b>SELECT YOUR TRANSACTION</b></h2>
			<a href="withdraw.php"><input type="button" name="" value="WITHDRAW" class="btn btn-danger btn-lg" style="float: left"></a><br><br>

			<a href="deposit.php"><input type="button" name="" value="DEPOSIT" class="btn btn-success btn-lg" style="float: right;margin-top: -40px"></a><br><br><br><br>

			<a href="check.php"><input type="button" name="" value="CHECK BALANCE" class="btn btn-primary btn-lg" style="float: left;"></a>
			<a href="transfer.php"><input type="button" name="" value="TRANSFER MONEY" class="btn btn-warning btn-lg" style="float: right;"></a><br><br><br>
		</div>
			
		</div>
		<li class="fa fa-deposit" style="background-color: red;font-size: 3em"></li> -->
</center>
	
	<div  class="container" style="margin-top: 30px">
		<a href="withdraw.php">
			<div class="col-md-6" style="width: 50%;">
			<center>
		   <img src="images/4.png" style="width:50%;height: 30vh" class="img-circle">
		</center>
		<h3 style=" text-align: center;color: black">WITHDRAW</h3>
	  </div>
	</a>

	<a href="deposit.php">
		<div class="col-md-6" style="width: 50%;">
			<center>
		   <img src="images/13.png" style="width:50%;height: 30vh" class="img-Thumbnail">
		</center>
		<h3 style="color: white; text-align: center;">DEPOSIT</h3>
	  </div>
	</a>
	</div>

	<div  class="container" style="margin-top: 30px">
		<a href="check.php">
			<div class="col-md-6" style="width: 50%;">
			<center>
		   <img src="images/11.png" style="width:50%;height: 30vh" class="img-Thumbnail">
		</center>
		<h3 style="color: black; text-align: center;">CHECK BALANCE</h3>
	  </div>
	</a>

	<a href="transfer.php">
		<div class="col-md-6" style="width: 50%;">
			<center>
		   <img src="images/12.png" style="width:50%;height: 30vh" class="img-circle">
		</center>
		<h3 style="color: white; text-align: center;">TRANSFER MONEY</h3>
	  </div>
	</a>
	</div>

</body>
</html>



body{
			background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(image/11.jpg);
			/*background-position: center; */
			background-repeat: no-repeat;
			background-size: cover; 
			position: relative;
			 color: white;
			height: 100vh
		};

	</style>
</head>
<body>
	<center>
		
		<font style="color: white;font-size: 2em" >
			<?php 
				if (isset($msg)) {
					echo $msg;
				}
			 ?>
		</font>
			<h2 style="color: black">Kindly Login your account details</h2>
			<form  action="facelog.php" method="post" style="width:50%;margin-top: 50px ">
				<div class="container-fluid">
					<div class="form-group">

					<label for="account">Account Number</label>
					<input type="type" name="account" class="form-control form-control" placeholder="Account Number"><br>

					<label for="pin">Pin</label>
					<input type="password" name="pin"  class="form-control form-control" placeholder="Enter Pin">
					</div>
				</div>
			</form>
		</center>


