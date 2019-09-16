<?php 
require 'dbcon.php';
$depositor = $_POST["depositor"];
$account = $_POST["account"];
$dates = $_POST["dates"];
$withdraw = $_POST["withdraw"];
$tim = $_POST["tim"];
$save =mysqli_query($con, "INSERT into 	transaction_tb (name, account, dates, withdraw, tim) VALUES('$_POST[depositor]', '$_POST[account]', '$_POST[dates]', '$_POST[withdraw]', '$_POST[tim]')");
if ($save) {
	$acc= mysqli_query($con, "SELECT * from account where account='$_POST[account]'");
	while ($r=mysqli_fetch_array($acc)){
		$accountbal = $r['balance'];
		$bal= $accountbal - $withdraw;

		mysqli_query($con, "UPDATE account set balance ='$bal' where account='$account' ");
	}
}
echo mysqli_error($con);
if ($save) {
	$msg="Withdraw Successful";
		 include 'withdraw.php';
		}


 


  ?>

