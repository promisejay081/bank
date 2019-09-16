<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>procceed</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
	<style>
		body{
			/*background-image: url(images/24.jpeg);
			background-size: cover;
			background-repeat: no-repeat;*/
			font-family:  Georgia;
			background-color: orangered
		}
		form{
			
			/*border:10px solid white;*/
			width:50%;
			
			color: black;
			height: 60vh;			
			border:1pc solid white;
			border-radius:2pc;
		}
		input{
			width: 70%;
			height: 6vh;
			color: black;
			border-radius: 10px
		}
		#ml{
			width: 40%;
		}
	</style>
</head>
<body>
	<div style="background-color: white;height: 6.5pc;margin-top: -20px;">
		<h2 style="color: orangered;margin-left: 50px;position: fixed;" id="mo"  class="wow bounceOut">TOWER <li class="fa fa-apple" style="color: orangered;font-size: 2em" id="mo"></li>Bank
		</h2>

	</div>
	<center>
		
		<font style="color: white;font-size: 2em" >
			<?php 
				if (isset($msg)) {
					echo $msg;
				}
			 ?>
		</font>

		<legend style="color: black;margin-top: 30px;font-size: 2pc;width: 50%">ACCOUNT LOGIN</legend>

		<form  action="facelog.php" method="post">
			
		<div class="container-fluid" style="margin-top: 50px" >
		
			<label >Account Number</label><br>	
			<span class="fa fa-pencil" style="font-size:2em;width: 60px;height: 6.2vh "></span><input type="text" name="acct" placeholder=" Acount Number"><br><br>
		

		
			<label>PIN</label><br>
			<span class="fa fa-lock" style="font-size:2em;width: 60px;height: 6.2vh "></span><input type="password" name="pino" placeholder=" Pin"><br><br><br>
		
		
			<input type="submit" name="" value="Proceed" class="btn btn-primary btn-small" id="ml"><br>
		
			<h5> <a href="#">Forgot Password</a></h5>
		</div>
		</div>
	</div>
</form>
</center>





</body>
<script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</html>