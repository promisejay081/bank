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
  <style>
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
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: #fff;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: black;
}

.closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size:40px !important;
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

<body class="wow fadeInUpBig">

<div id="mySidenav" class="sidenav" style="background-color: #FF9900;color: #fff">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#section1">Dashboard</a>
        <a href="table.php">Edit & Delete Customer</a>
        <a href="staff.php">Add Staff</a>
        <a href="app.php">Bank Form transaction</a>
        <a href="#section3">Staff List</a>
        <a href="#section3">News Update</a>
        <a href="bank.php">Bank Customers</a>
        <a href="tran.php">Transaction Process</a>  
</div>
<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ </span>

  <?php 
require 'dbcon.php';
$result = mysqli_query($con,"select * from customer ");
echo "<table border=5 class=table-striped style=color:black;background-color:orange;width:200px;>

<th style=color:black;>Customer id</th><th style=color:black;width:100px>
 Firstname</th> <br> 
 <th style=color:black;> Lastname</th> 
 <th style=color:black;width:150px> Mothername</th> 
 <th style=color:black;> Birth</th> 
 <th style=color:black;> Phone</th> 
 <th style=color:black;> Gender</th> 
 <th style=color:black;> Country</th> 
 <th style=color:black;>State</th> 
 <th style=color:black;> Email</th> 
 <th style=color:black;> Delete</th> 
 <th style=color:black;> Edit</th>";
while ($r = mysqli_fetch_array($result))
{ 
  $id = $r['customer_id'];
  echo "<tr><td id='usr'>".$r['customer_id']."</td><td>".$r['firstname']."</td><td>" . $r['lastname']."</td><td>".$r['mothername']."</td><td>".$r['birth']."</td><td>".$r['phone']."</td><td>".$r['gen']."</td><td>".$r['country']." </td><td>".$r['state']." </td><td>".$r['email']."</td><td>
  <a href=bankdelete.php?customerid=".$r['customer_id']." ><button>Delete</button></a></td>
  <td><a href=bankedit.php?customerid=".$r['customer_id']." ><button>Edit</button> </a></td> </tr> ";
}
echo "</table>"; 
?>
  
</div>
</body>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "#C92E00";
}
</script>
</html>