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

<body class="wow fadeInUpBig">

<div id="mySidenav" class="sidenav" style="background-color: black;color: #fff">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <ul style="list-style-type:none">
  <li><a href="#section1" style="background-color: pink">Dashboard</a></li>
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
  <div>
    <div class="col-md-4">
       <div style="height: 250px" class="jumbotron">
         <div style="background-color:orange;border-radius: 70%"><li class="fa fa-users fa-4x"; style="color: white;margin-top: 10px;margin-left: 100px;width: 100px"></li></div>
         <h3 style="margin-left: 100px">4555,355</h3>
         <h3 style="margin-left: 100px">CUSTOMERS</h3>
       </div>
     </div>

     <div class="col-md-4">
       <div style="height: 250px" class="jumbotron">
         <div style="background-color: red;border-radius: 70%"><li class="fa fa-globe fa-4x"; style="color: white;margin-top: 10px;margin-left: 100px;width: 100px"></li></div>
         <h3 style="margin-left: 100px">10000,535</h3>
         <h3 style="margin-left: 100px">STAFF</h3>
       </div>
     </div>

     <div class="col-md-4">
       <div style="height: 250px" class="jumbotron">
         <div style="background-color: green;border-radius: 70%"><li class="glyphicon glyphicon-eye-open fa-4x"; style="color: white;margin-top: 10px;margin-left: 100px;width: 100px"></li></div>
         <h3 style="margin-left: 100px">4555,355</h3>
         <h3 style="margin-left: 100px">Users</h3>
       </div>
     </div>
  </div>


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