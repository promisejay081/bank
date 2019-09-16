<?php     
require 'dbcon.php';
	$s='p';
	$wep = mysqli_query ($con,"SELECT * from customer where firstname like '%".$s."%' ");
	$data = mysqli_fetch_all($wep, MYSQLI_ASSOC);
	
	$jdata= json_encode($data);
	echo $jdata;



?>
<!-- $s='P';	
	$wep = mysqli_query($con, "SELECT * from customer where firstname like '%".$s."%' or number like '%".$s."%'");
	$data = mysqli_fetch_all($wep, MYSQLI_ASSOC);
	
$dat= json_encode($data);
echo  $dat; -->