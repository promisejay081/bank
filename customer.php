<?php 
require 'dbcon.php';
$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = sha1($_POST['password']);
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$save=mysqli_query($con, "INSERT into customer_tb (surname, firstname, lastname, birthday, username, email, password) VALUES ('$surname', '$firstname', '$lastname', '$birthday', '$username', '$email', '$password')");	
 
	if ($save) {
		include 'log.php';
		}
		else{
		$msg="Fill the data";
			include 'custom.php';
		}	

?>
