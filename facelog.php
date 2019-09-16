<?php
session_start();
require 'dbcon.php';
$account = $_POST['acct'];
$pin = $_POST['pino'];
$result=mysqli_query($con, "select * from account where account='$account' and pin='$pin'");

$log=true;
while ($r=mysqli_fetch_array($result)) {
		$_SESSION['num']=$r['account'];

	$log=false;
}
if ($log) {
	$msg="Incorrect Account number or Pin";
	include 'new.php';
}
else{

echo $_SESSION['num'];
include 'account.php';
}
?>