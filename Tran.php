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
    
      body {
          font-family: "Lato", sans-serif;
          transition: background-color .5s;
      }

      .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 50px;
      }

      .sidenav a {
          padding: 8px ;
          text-decoration: none;
          font-size: 15px;
          color: #fff;
          display: block;
          transition: 0.3s
      }

      .sidenav a:hover, .offcanvas a:focus{
          color: red;
      }

      .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px !important;
          margin-left: 50px;
      }

      #main {
          transition: margin-left .5s;
          padding: 16px;
      }

      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
	</style>

  <script>
  new WOW().init();
    
  </script>

</head>

<body>



<div id="mySidenav" class="sidenav" style="background-color: black;color: #fff">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <ul style="list-style-type:none">
  <li><a href="Dashboard.php">Dashboard</a></li>
  <li><a href="home.html">HOME</a></li>
       <li> <a href="table.php">Edit & Delete Customer</a></li>
       <li> <a href="staff.php">Add Staff</a></li>
       <li> <a href="app.php">Bank Form transaction</a></li>
       <li> <a href="#section3">Staff List</a></li>
       <li> <a href="#section3">News Update</a></li>
        <li><a href="bank.php">Bank Customers</a></li>
       <li> <a href="tran.php">Transaction Process</a> </li> 
     </ul>
</div>
<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ </span>
  <center>
  <div>
    <h3 style="color: orange">THESE  ARE TRANSACTION BEEN MADE</h3>
  </div>
<?php 
require 'dbcon.php';
$result = mysqli_query($con,"select * from transaction_tb");
echo "<table border=10  style=color:orange;background-color:black;opacity:0.8;><th>Transaction id</th><th style=color:red;> Name of Depositor</th><th style=color:red;> Account number</th><th style=color:red;> Date of transaction</th><th style=color:red;> Amount deposit</th><th style=color:red;> Amount Withdraw</th><th style=color:red;> Time withdraw</th>";
while ($r = mysqli_fetch_array($result))
{	
	$id = $r['transaction_id'];
	echo "<tr><td id='usr'>".$id."</td><td>".$r['name']."</td><td>".$r['account']."</td><td>".$r['dates']."</td><td>".$r['deposit']."</td><td>".$r['withdraw']."</td><td>".$r['tim']."</td><td> "."</td><td></td> </tr> " ;
}
echo "</table>"; 
?>
</center>
</div>



</body>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
    document.body.style.backgroundColor = "orangered";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "#C92E00";
}
</script>
</html>