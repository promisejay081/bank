<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>form</title>

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
  <!--   <script>
	new WOW().init();
		
	</script> -->

    <style type="text/css">
    
    	.card{
    		background-color: transparent;
    	};
    </style>
</head>
<body class="wow bounceOut" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(image/ij.jpg);
	background-position: center; 
	background-repeat: no-repeat;background-size: cover; 
	position: relative; color: white;font-family: cursive; ">

	<h2 style="text-align: center;margin-top: 20px; font-family: serif;" class="text-danger card-header">Kindly fill in the form</h2>

	<center>
		<div class="container-fluid">
		
		  <form action="Applog.php" method="post" style="width: 100%;">
			<div class="card">
				<div class="row">
					<div class="col-md-6">
			
		<label>Firstname</label><br>
		<input type="text" name="firstname" placeholder=" Firstname" required="true" class="form-control form-control">

		<label>Lastname</label><br>
		<input type="text" name="lastname" placeholder=" Lastname" required="true" class="form-control form-control"><br>

		<label>Occupation</label><br>
		<input type="text" name="occupation" placeholder="occupation" required="true" class="form-control form-control"><br>	

		<label>Phone Number</label><br>
		<input type="text" name="phone" placeholder= "Phone Number" required="true" class="form-control form-control"><br>

		<label>D.O.B</label><br>
		<input type="date" name="birth" placeholder= "Date of Birth" required="true" class="form-control form-control"><br>

		<label>Home Address</label>
		<input type="type" name="address" placeholder= "Home Address" required="true" class="form-control form-control"><br>


		<label>Country</label><br>
		 <?php include 'select.php';?><br>

	</div>

		<div class="col-md-6">

		<label>State</label><br>
		<?php include 'selects.php';?>
			
		<label >Email</label><br>
		<input type="email" name="email" placeholder="  Email" required="true" class="form-control form-control"><br>

		<label>Open Deposit</label><br>
		<input type="text" name="balance" placeholder="  Deposit" class="form-control form-control"><br>

		<label>Create PIN</label><br>
		<input type="password" name="pin" placeholder="  PIN" required="true" class="form-control form-control"><br>

		<label>Gender</label><br>
		<input type="radio" name="gen" id="ml" value="Male"> <b>Male</b> <input type="radio" name="gen" id="ml" value="Female"> <b>Female</b><br><br>

		<label>Account Type</label><br>
		<select name="type" required="true" class="form-control form-control">
			
			<option>Select your account type</option>
			<option>Savings</option>
			
		</select><br><br>
	

		<input type="file" class="form-control-file border form-control form-control"><br>

			</div>

			<div class="col-md-6">
		<input type="submit" name="" value="submit Query" class="btn btn-primary" id="red"><br><br>
			</div>

			<div class="col-md-6">

			<a href="new.php" style="color:white; 	padding: 10px;border-radius: 10px" class="btn-sm btn-warning"><b>Already have an Account</b></a>
				</div>
			</div>

			</div>
		</div>
		
		  </form>
		</div>
	</center>
  	










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
</body>
</html>