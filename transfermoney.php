<?php 
session_start();
require 'dbcon.php';
$account = $_POST["acc"];
$transfer = $_POST["transfer"];
$dates = $_POST["dates"];
$tim = $_POST["tim"];
$save =mysqli_query($con, "INSERT into 	transfer (account, transfer, dates, tim) VALUES('$account', '$transfer', '$dates', '$tim')");

if ($save) {
	$acc= mysqli_query($con, "SELECT * from account where account='$_SESSION[num]'");	
	while ($r=mysqli_fetch_array($acc)){
		 $accountbal = $r['balance'];
		$bal=$r['balance']-$transfer;
		mysqli_query($con, "update account set balance ='$bal' where account='$_SESSION[num]'");
	}

	$act= mysqli_query($con, "SELECT * from account where account='$account'");
	while ($rs=mysqli_fetch_array($act)){
		$accountbals = $rs['balance'];
		$bals= $rs['balance']+$transfer;

		mysqli_query($con, "update account set balance ='$bals' where account='$account'");

	}

}
echo mysqli_error($con);
if ($save) {
	$msg="Transfer Successful";
		 include 'transfer.php';
		}
  ?>
  
 



