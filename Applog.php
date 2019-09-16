<?php
require 'dbcon.php';
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$occupation=$_POST["occupation"];
$phone = $_POST["phone"];
$birth = $_POST["birth"];
$address=$_POST["address"];
$gen = $_POST["gen"];
$country = $_POST["country"];
$state = $_POST["state"];
$email=$_POST["email"];
for($i=0; ;$i++){
	$account = mt_rand(1,10000000000);
	if(strlen($account) == 10){
		break;
	}
}
echo "This is your account number   $account ";



$pin = $_POST["pin"];
$balance=$_POST["balance"];
$type = $_POST["type"];

$save=mysqli_query($con, "INSERT into customer ( firstname, lastname, occupation, birth, phone, address, gen, country, state, email) VALUES ( '$firstname', '$lastname', '$occupation', '$birth', '$phone','$address', '$gen', '$country', '$state', '$email')");


$ar=mysqli_query($con,"select * from  customer where pin = '$_POST[pin]'");
while ($a=mysqli_fetch_array($ar)) {
	$id = $a['customer_id'];
};

$save=mysqli_query($con, "INSERT into account(account, balance, pin, type) VALUES ('$account','$balance', '$pin', '$type')");	

echo mysqli_error($con);

 
	if ($save) {
		 include 'new.php';
		
		}
		else{
		$msg="Fill the data";
			include 'form.php';
		}	

  ?>