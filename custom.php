<!DOCTYPE html>
<html>
<head>
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">

<script type="text/javascript" src="wowjs/wow.min.js"></script>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
	<style type="text/css">
	.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
	</style>
</head>
<body style="background-color:black">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="36.jpg"><img src="36.jpg" style="height:40px;width:100px;margin-top:-9px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <<li><a href="bank.html">HOME</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">SERVICE</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
        <li><a href="stafflog.html">STAFF LOG-IN</a></li>
        <div class="dropdown">
          <ul class="dropbtn">CUSTOMER REGISTRATION
          <li class="dropdown-content">
            <a href="customer.html">Creat Account</a>
            <a href="log.php">Log-in</a>
            </ul>
          </li>
        </div>
      </ul>
    </div>
   </div>
</nav>

	<center>
	<form method="post" action="customer.php" style="border:10px;width:600px;height:480px;border-radius:20px;background:rgba(60,60,60,8 );">
    <?php if( isset($msg)){ echo "<font color=red>$msg</font><br />"; } ?>
		<fieldset><h2 style="background-color:white"><em>CUSTOMER REGISTER </em></h2></fieldset>
	
			<i class="fa fa-user" style="color:blue"><label style="color:white">Surname:</label></i><br>
			<input type="text" name="surname" style="width:500px" placeholder="surname"> <br>

			
			<i class="fa fa-user" style="color:blue"><label style="color:white">Firstname:</label></i> <br>
			<input type="text" name="firstname" style="width:500px;" placeholder="firstname"><br>

			<i class="fa fa-user" style="color:blue"><label style="color:white">Lastname:</label></i><br>
			<input type="text" name="lastname" style="width:500px" placeholder="lastname"><br>

			<i class="fa fa-user" style="color:blue"><label style="color:white">Username:</label></i><br>
			<input type="text" name="username" style="width:500px" placeholder="username"><br>

			<i class="fa fa-key" style="color:blue"><label style="color:white">Password:</label></i><br>
			<input type="password" name="password" style="width:500px" placeholder="password"><br>

			<i class="fa fa-user" style="color:blue"><label style="color:white">Email:</label></i><br>
			<input type="text" name="email" style="width:500px" placeholder="email"><br>

			<i class="fa fa-user" style="color:blue"><label style="color:white">Birthday:</label></i><br>
			<input type="date" name="birthday" style="width:500px" placeholder="birthday"><br>
<!-- 
			<label style="color:white">Gender:</label><br>
			<input type="checkbox" name="gender"><span style="color:white">MALE</span><input type="checkbox" name="gender"><span style="color:white">FEMALE</span><br>
 -->
		
			<i class="glyphicon glyphicon-log-in"><input type="submit" name="" style="background-color:green;"></i>
	</form>
	</center>
	

</body>
</html>	