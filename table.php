<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta name="viewport" content="width=device-width" initial-scale="1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


	<script type="text/javascript" src="wowjs/wow.min.js"></script>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style>
	
    .row.content {height: 550px}
    
    .sidenav {
      background-color: #222222;
      height: 100%;
      width: 250px
    }
        
    @media screen and (max-width: 400px) {
      .row.content {height: auto;} 
    }
	</style>

  <script>
  new WOW().init();
    
  </script>

</head>
<body>






<div class="container-fluid" style="margin-top: 40px;">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2 style="color:white">Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="Dashboard.php">Dashboard</a></li>
        <li><a href="table.php">Edit & Delete Customer</a></li>
        <li><a href="#section3">Customer list</a></li>
        <li><a href="#section3">Staff List</a></li>
        <li><a href="#section3">News Update</a></li>
      </ul><br>
    </div>
<?php 
require 'dbcon.php';
$result = mysqli_query($con,"select * from customer_tb");
echo "<table border=10  style=color:orange;background-color:black;opacity:0.8;><th>Customer id</th><th style=color:red;> Surname</th><th style=color:red;> Firstname</th><th style=color:red;> Lastname</th><th style=color:red;> Birthday</th><th style=color:red;> Username</th><th style=color:red;> Email</th><th style=color:red;> Password</th><th style=color:red;> Delete</th><th style=color:red;> 	Option</th>";
while ($r = mysqli_fetch_array($result))
{	
	$id = $r['customer_id'];
	echo "<tr><td id='usr'>".$id."</td><td>".$r['surname']."</td><td>".$r['firstname']."</td><td>".$r['lastname']."</td><td>".$r['birthday']."</td><td>".$r['username']."</td><td>".$r['email']."</td><td>".$r['password']."</td><td>
	<a href=delete.php?customerid=".$r['customer_id']." >Delete</a>
	<td><a href=Edit.php?customerid=".$r['customer_id']." >edit</a></td> </tr> "."</td><td></td> </tr> " ;
}
echo "</table>"; 
?>