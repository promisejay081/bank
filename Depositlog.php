<?php 
session_start();

require 'dbcon.php';
$depositor = $_POST["depositor"];
$account = $_POST["account"];
$dates = $_POST["dates"];
$deposit = $_POST["deposit"];
$tim = $_POST["tim"];
	$acc= mysqli_query($con, "SELECT * from account where account='$_SESSION[num]'");
	while ($r=mysqli_fetch_array($acc)){

		$accountbal = $r['balance'];
		$bal= $accountbal + $deposit;
		$number = $r['account'];
	}
	if($account!==$number){echo "<script>alert('Invalid')</script>";}
	else{
		$save =mysqli_query($con, "INSERT into 	transaction_tb (name, account, dates, deposit, tim) VALUES('$_POST[depositor]', '$_POST[account]', '$_POST[dates]', '$_POST[deposit]', '$_POST[tim]')");
			mysqli_query($con, "update account set balance ='$bal' where account='$account' ");
			$msg="Deposit Successful";
		    include 'Deposit.php';
		}
echo mysqli_error($con);


 ?>