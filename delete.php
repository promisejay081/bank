 <?php
require 'dbcon.php';
$id=$_GET['customerid'];
$delete = mysqli_query($con, "DELETE from customer_tb where customer_id = '$id'");
if ($delete) {
	include 'table.php';
}

?> 

