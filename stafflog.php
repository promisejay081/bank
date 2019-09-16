<?php 
require 'dbcon.php';
$surname = $_POST["surname"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$birthday = $_POST["birthday"];
$phone = $_POST["phone"];
$address = $_POST["address"];


$save=mysqli_query($con, "INSERT into staff_tb (surname, firstname, lastname, birthday, username, email, password,phone,address) VALUES ('$surname', '$firstname', '$lastname', '$birthday', '$username', '$email', '$password', '$phone', '$address')");	
 
	if ($save) {
		$msg='Fill the data';
		include 'log.php';
		}
		else{
		$msg="fill the data";
			include 'staff.php';
		}	




 ?>