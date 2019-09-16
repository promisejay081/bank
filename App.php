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
			/*border:10px solid white;*/
			/*width:550px;*/
			/*height:750px;*/
			border-radius:20px;
			background-color:transparent;

			/*background-color: #FC4A03;*/

		}
		input {
			height: 2em;
			color: black;
			width: 45%;
			border-radius: 5px;
			border-color: white;
		}

		#mo{
			font-size: 2em
		}
		body{
		/*background-color: orangered*/
			/*background-image: url(images/24.jpeg);
			background-size: cover;
			background-repeat: no-repeat;
			font-family:  Georgia;*/

			 background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/g.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
		}
		label{
			color: white
		}
		#ml{
			width: 30px;
			height: 15px;
			
		}
		#red{
			width: 300px;
			height: 2pc
		}
		#red:hover{
			background-color: #051F25
		}


			</style>
</head>
<body>
	<div style="background-color:white  ;height: 6.5pc;margin-top: -20px;" class="container-fluid">
		<h3 style=";color: #141C25;margin-left: 50px" id="mo">JAY <li class="fa fa-apple" style="color: #141C25" id="mo"></li>Bank</h3>

	</div>
	<center>
	<form action="Applog.php" method="post">

			<legend style="color: black;margin-top: 30px;background-color: white;border-radius: 50px;width: 50%">Creat Your Account Details</legend>
			
			<label>Firstname</label><br>
		<input type="text" name="firstname" placeholder=" Firstname" required="true" ><br>

		<label>Lastname</label><br>
		<input type="text" name="lastname" placeholder=" Lastname" required="true"><br>

		<label>Mother middle name</label><br>
		<input type="text" name="mothername" placeholder=" Mothername" required="true"><br>	

		<label>Phone Number</label><br>
		<input type="text" name="phone" placeholder= "Phone Number" required="true"><br>

		<label>D.O.B</label><br>
		<input type="date" name="birth" placeholder= "Date of Birth" required="true"><br>

		<label>Gender</label><br>
		<input type="radio" name="gen" id="ml" value="Male"><b style="color: white">Male</b> <input type="radio" name="gen" id="ml" value="Female"><b style="color: white">Female</b><br>

		<label>Country</label><br>
		 <?php include 'select.php';?>

		<label>State</label><br>
		<select style="color: black" name="state">
			<option>Choose your state</option>
			<option>Oyo</option>
			<option>Lagos</option>
			<option>Osun</option>
			<option>Ogun</option>
			<option>Ondo</option>
			<option>Kwara</option>
			<option>Ekiti</option>
		</select><br>


		<label>Email</label><br>
		<input type="text" name="email" placeholder="  Email" required="true"><br>

		<label>Open Deposit</label><br>
		<input type="text" name="balance" placeholder="  Deposit"><br>

		<label>Create PIN</label><br>
		<input type="password" name="pin" placeholder="  PIN" required="true"><br>

		<label>Account Type</label><br>
		<select name="type" required="true" style="color: black">
			
			<option>Savings</option>
			
		</select><br><br>

		<input type="submit" name="" value="submit Query" class="btn btn-primary" id="red"><br><br>

		<button class="btn-lg btn-primary">Account Already Exist</button>
		<a href="new.php" style="color:white;border:2px solid black;background-color: green;text-decoration: none;padding: 10px;border-radius: 10px"><b>Already have an Account</b></a>

		
	</form>
</center>
<!-- <footer class="container-fluid wow " style="text-align:center;background-color:white;color:orangered;position: ">
	<h4>Copyright@Jay 2018</h4>
</footer> -->


</body>
</html>