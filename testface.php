<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


	<script type="text/javascript" src="wowjs/wow.min.js"></script>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style>
		form{
			border:10px solid white;
			width:600px;
			height:350px;
			border-radius:20px;
			background-color:transparent;
			background-color: #FC4A03;
			margin-top: 50px;

		}
		input{
			height: 20px
			color: black;
			width: 500px;

		}
		#mo{
			font-size: 2em
		}
		body{
	
			background-color: orangered;
			/*background-color: #FC4A03;
			color: white;*/
			/*background-image: url(images/mic.jpg);
			background-size: cover;*/
		}
		label{
			color: white
		}
		#ml{
			width: 50px;
			
		}
	</style>
</head>
<body>
	<div style="background-color: white;height: 80px;margin-top: -20px" class="container-fluid">
		<h3 style=";color: orangered;" id="mo">TOWER<li class="fa fa-apple"  id="mo"></li>Bank</h3>

	</div>
	<center>
	<form action="test.php" method="post">

		<fieldset>
			<legend style="color: white">Creat Your Account Details</legend>
		</fieldset>
		
		<h4><b>NOTE</b>:Before you will create a current account you must have dsavings account</h4>



		<!-- <label>Firstname</label><br>
		<input type="text" name="firstname" placeholder="Firstname" ><br>

		<label>Lastname</label><br>
		<input type="text" name="lastname" placeholder="Lastname" ><br>

		<label>Mother middle name</label><br>
		<input type="text" name="mothername" placeholder="Mothername"><br>	

		<label>Phone Number</label><br>
		<input type="text" name="phone" placeholder="Phone Number"><br>

		<label>D.O.B</label><br>
		<input type="date" name="birth" placeholder="Date of Birth" ><br>

		<label>Gender</label><br>
		<input type="radio" name="gen" id="ml" value="Male"><b style="color: white">Male</b> <input type="radio" name="gen" id="ml" value="Female"><b style="color: white">Female</b><br>

		<label>Country</label><br>
		<select style="color: black" name="country">
			<option>Choose your Country</option>
			<option>Nigeria</option>
			<option>Ghana</option>
		</select><br>

		<label>State</label><br>
		<select style="color: black" name="state">
			<option>Choose your state</option>
			<option>Oyo</option>
			<option>Lagos</option>
			<option>Osun</option>
			<option>Ogun</option>
			<option>Ondo</option>
		</select><br>

 -->
		<!-- <label>Account Name</label><br>
		<input type="text" name="accountname" placeholder="Account name"><br> -->

		<label>Open Deposit</label><br>
		<input type="text" name="balance" placeholder="Deposit"><br>

		<label>Create PIN</label><br>
		<input type="password" name="pin" placeholder="PIN" r><br>

		<label>Account Type</label><br>
		<select name="type" required="true" style="color: black">
			<option>Choose account type</option>
			<option>Current</option>
			<option>Fixed</option>
		</select><br><br>

		<input type="submit" name="" value="submit Query" class="btn btn-primary"><br>
		<a href="face.php">Already have an Account</a>

		
	</form>
</center>
<!-- <footer class="container-fluid wow " style="text-align:center;background-color:#01374E;;color:white;position: ">
	<h4>Copyright@Jay 2018</h4>
</footer>
 -->

</body>
</html>