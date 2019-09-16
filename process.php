 <?php 
if (isset($_POST["username"])&&(isset($_POST["password"]))) {
require 'dbcon.php';
$username = $_POST["username"];
$password = sha1($_POST["password"]);
	$check = mysqli_query($con, "SELECT * from customer_tb where username='$username' and password='$password'");
	$see=true;
	while ($row=mysqli_fetch_array($check))
	 {
		$see=false;
	}
	if ($see) {
		$msg="Incorrect Login";
		include 'pro.php';
	}
else{
	include 'app.php';
	}	

}
 ?>