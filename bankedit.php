<?php 
require 'dbcon.php';
if (isset($_POST["park"])) {
	$id=$_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$mothername = $_POST['mothername'];
	$birth = $_POST['birth'];
	$phone = $_POST['phone'];
	$gen = $_POST	['gen'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$email = $_POST['email'];
	// $account = $_POST['account'];	
	// $pin = $_POST['pin'];
	// $balance = $_POST['balance'];
	// $type = $_POST['type'];
	$update=mysqli_query($con,"UPDATE customer SET firstname='$firstname',lastname='$lastname',mothername='$mothername',birth='$birth',phone='$phone',gen='$gen',country='$country',state='$state', email='$email' WHERE customer_id='$id'");


	if ($update) {
		include 'bank.php';
	}else{
		echo mysqli_error($con);
	}
}else{
	$id = $_GET['customerid'];
	$select = mysqli_query($con,"select * from customer where customer_id= '$id'");
	if ($select) {
		while ($row = mysqli_fetch_array($select)) {
			?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style>
	form{
			border:10px solid white;
			width:500px;
			height:500px;
			border-radius:20px;
			background-color: #FC4A03;

		}
	</style>
</head>
<body>
	<center>
	<form action="bankedit.php" method="post">

		<fieldset>
			<legend style="color: white">Make some changes Account Details</legend>
		</fieldset>
		<input type="text" name="id" hidden="hidden" value=<?php echo $row ['customer_id']; ?> >
		<label>Firstname</label><br>
		<input type="text" name="firstname" placeholder="Firstname" required="true" value=<?php echo $row ['firstname']; ?>> <br>

		<label>Lastname</label><br>
		<input type="text" name="lastname" placeholder="Lastname" required="true" value=<?php echo $row ['lastname']; ?>><br>

		<label>Mother middle name</label><br>
		<input type="text" name="mothername" placeholder="Mothername" required="true" value=<?php echo $row ['mothername']; ?>> <br>	

		<label>Phone Number</label><br>
		<input type="text" name="phone" placeholder="Phone Number" required="true" value=<?php echo $row ['phone']; ?>>  <br>

		<label>D.O.B</label><br>
		<input type="date" name="birth" placeholder="Date of Birth" required="true" value=<?php echo $row ['birth']; ?>> <br>

		<label>Gender</label><br>
		<input type="radio" name="gen" id="ml" value="Male"><b style="color: white">Male</b> <input type="radio" name="gen" id="ml" value="Female"><b style="color: white">Female</b><br>

		<label>Country</label><br>
		<select style="color: black" name="country">
			<option><?php echo $row ['country']; ?></option>
			<option  value=''>Nigeria</option>
			<option  value=''>USA</option>
		</select><br>

		<label>State</label><br>
		<select style="color: black" name="state">
			<option><?php echo $row ['state']; ?></option>
			<option  value=''>Oyo</option>
			<option  value=''>Lagos</option>
			<option  value=''>Osun</option>
			<option  value=''>Ogun</option>
		</select><br>


		<label>Email</label><br>
		<input type="text" name="email" placeholder="Email" required="true" value=<?php echo $row ['email']; ?>> <br>

		<!-- <label>Deposit</label><br>
		<input type="text" name="balance" placeholder="Deposit" value=<?php echo $row ['account']; ?>> <br> -->

		<!-- <label>Create PIN</label><br>
		<input type="password" name="pin" placeholder="PIN" required="true" value=<?php echo $row ['pin']; ?>> --> <br>

		<input type="submit" name="park" value="submit Query" class="btn btn-primary"><br>

		
	</form>
</center>
</body>
</html>
<?php 
	}
	}
}
 ?>