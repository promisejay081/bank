<?php 
require 'dbcon.php';

for($i=0; ;$i++){
	$account = mt_rand(1,10000000000);
	if(strlen($account) == 10){
		break;
	}
}
echo "This is your account number   $account ";

$balance = $_POST['balance'];
$pin = $_POST['pin'];
$type = $_POST['type'];
$ar=mysqli_query($con,"select * from  customer where pin = '$_POST[pin]'");
while ($a=mysqli_fetch_array($ar)) {
	$id = $a['customer_id'];
}
$save = mysqli_query($con, "INSERT into account (account , balance, pin, type,customer_id ) VALUES ('$account', '$balance', '$pin', '$type', '$id')");
if ($save) {
		 include 'face.php';
		
		}
		else{
		$msg="Fill the data";
			include 'App.php';
		}	
echo "successful";
echo mysqli_error($con);
 ?>