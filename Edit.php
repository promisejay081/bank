<?php 
require 'dbcon.php';
if (isset($_POST["park"])) {
	$id=$_POST['id'];
	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$birthday = $_POST['birthday'];
	$update=mysqli_query($con,"UPDATE customer_tb SET surname='$surname',firstname='$firstname',lastname='$lastname',username='$username',password='$password',email='$email',birthday='$birthday' WHERE customer_id='$id'");
	if ($update) {
		include 'table.php';
	}else{
		echo mysqli_error($con);
	}
}else{
	$id = $_GET['customerid'];
	$select = mysqli_query($con,"select * from customer_tb where customer_id= '$id'");
	if ($select) {
		while ($row = mysqli_fetch_array($select)) {
			?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<form method="post" action="edit.php" style="border:10px;width:600px;height:480px;border-radius:20px;background:rgba(60,60,60,8 );">
		<fieldset><h2 style="background-color:white"><em>CUSTOMER REGISTER </em></h2></fieldset>
		<input type="text" name="id" hidden="hidden" value=<?php echo $row ['customer_id']; ?>>
	
			<i class="fa fa-user" style="color:blue"><label style="color:white">Surname:</label></i><br>
			<input type="text" name="surname" style="width:500px" placeholder="surname" value=<?php echo $row ['surname']; ?>> <br>

			
			<i class="fa fa-user" style="color:blue"><label style="color:white">Firstname:</label></i> <br>
			<input type="text" name="firstname" style="width:500px;" placeholder="firstname" value=<?php echo $row ['firstname']; ?>> <br>

			<i class="fa fa-user" style="color:blue"><label style="color:white">Lastname:</label></i><br>
			<input type="text" name="lastname" style="width:500px" placeholder="lastname" value=<?php echo $row ['lastname']; ?>> <br>

			<i class="fa fa-user" style="color:blue"><label style="color:white">Username:</label></i><br>
			<input type="text" name="username" style="width:500px" placeholder="username" value=<?php echo $row ['username']; ?>> <br>

			<i class="fa fa-key" style="color:blue"><label style="color:white">Password:</label></i><br>
			<input type="password" name="password" style="width:500px" placeholder="password" value=<?php echo $row ['password']; ?>> <br>

			<i class="fa fa-user" style="color:blue"><label style="color:white">Email:</label></i><br>
			<input type="text" name="email" style="width:500px" placeholder="email" value=<?php echo $row ['email']; ?>> <br>

			<i class="fa fa-user" style="color:blue"><label style="color:white">Birthday:</label></i><br>
			<input type="date" name="birthday" style="width:500px" placeholder="birthday" value=<?php echo $row ['birthday']; ?>> <br> 
			
		
			<i class="glyphicon glyphicon-log-in"><input type="submit" name="park" style="background-color:green;"></i>
	</form>

</body>
</html>
<?php 
	}
	}
}
 ?>