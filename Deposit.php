 <?php 
if (isset($SESSION_['staff.php'])) {
	include 'login.php';
}
  ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Deposit</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


	<script type="text/javascript" src="wowjs/wow.min.js"></script>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style>
	form{
		border-radius: 20px;
		border:10px solid white;
		width: 500px;
		height: 480px;
		color: white;
		margin-top: 4px;
		/*background-color: #F94001;*/

	}
		button{
			width: 80px;
			height: 50px;
			background-color: #F94001;
			color: white
		}
		input{
			width: 350px;
			color: black;
			height:35px 
		}
		body{
			background-color: orangered;
			/*background-image: url(images/mic.jpg);
			background-size: cover;*/
		}
		#mo{
			width: 120px;

		}
		#no{
			width: 150px
		}
	</style>
	<script type="text/javascript">
	var v;
	var v1;
		function button(v){
		op.value+=(v)
	}
	function btnclear(){
		v1=op.value;
		op.value='';
	}
	function cancel(){
		op.value='';	
	}
	$(document).ready(function(){
		$(window).on("load", function(){
			

		}); 
		$("#do").click(function(){
			$("button").toggle(2000)
		});
	});
	
</script>
</head>
<body>
	<div style="background-color: white" class="container-fluid">
	 <li class="fa fa-apple" style="font-size: 4em;color:orangered "></li>
	</div>

	<center>

	<form action="Depositlog.php" method="post">
			<font color="white">
			<?php 
				if (isset($msg)) {
					echo $msg;
				}
			 ?>
		</font>
		<fieldset >
			<legend style="background-color: white">DEPOSIT SLIP</legend>
		</fieldset>

		<label>Name of Depositor</label><br>
		<input type="text" name="depositor" required placeholder="Name of Depositor"><br>

		<label>Account number</label><br>
		<input type="text" name="account" required placeholder="Account number"><br>

		<label>Date</label><br>
		<input type="date" name="dates" required ><br>

		<label>Amount Deposit</label><br>
		<input type="text" name="deposit" required placeholder="Amount Deposit" id="op" readonly><br>

		<input type="button" name="" id="do" style="width: 100px" value="PRESS"><br>

		<label>Time</label><br>
		<input type="time" name="tim" required ><br><br>

		<input type="submit" name="" value="Deposit" class="btn btn-success" id="no">

</form>
<a href="home.html"><input type="button" name="" value="End Transaction" id="mo" class="btn btn-danger"></a><br>

<div style="margin-right: 850px;margin-top: -300px;width: 265px;height: 220px">
<button onclick="button('1')">1</button>
<button  onclick="button('2')">2</button>
<button  onclick="button('3')">3</button><br>
<button  onclick="button('4')">4</button>
<button  onclick="button('5')">5</button>
<button  onclick="button('6')">6</button><br>
<button  onclick="button('7')">7</button>
<button  onclick="button('8')">8</button>
<button  onclick="button('9')">9</button><br>
<button  onclick="button('0')">0</button>
<button  onclick="button('00')">00</button>
<button onclick="cancel('')" class="btn btn-danger">Cancel</button><br>
</div>




	
</center>

</body>
</html>