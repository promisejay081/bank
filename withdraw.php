<!DOCTYPE html>
<html>
<head>
	<title>Withdraw</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">

<script type="text/javascript" src="wowjs/wow.min.js"></script>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
		button{
			width: 80px;
			height: 50px;
			background-color: orangered;
		}
	
	form{
		border:8px solid white;
		width: 600px;
		height: 400px;
		border-radius: 20px;
		background-color: orangered;
		margin-top: 10px;




	}
	input{
		height: 30px;
		width: 500px;
		color: black;
		border-radius: 2pc
	}
	#no{
		width: 90px
	}
	body{
		background-color: orangered;
		color: white
	}
	label{
		margin-right: 375px;
	}
	#to{
		height: 30px;
		width: 80px
	}
	#mo{
			width: 80px;

		}
</style>


	<script>
	new WOW().init();
		
	</script>

</head>

<body >
	<div style="background-color: white" class="container-fluid">
	 <li class="fa fa-apple" style="font-size: 4em;color:orangered "></li>
	</div>

	 <center>
	 	<font style="color: red; font-size: 2em;margin-top: -90px" class="bounceIn">
			<?php 
				if (isset($msg)) {
					echo $msg;
				}
			 ?>
		</font>
	<form action="withdrawlog.php" method="post">
		<fieldset>
			<legend style="color:black;width:590px;background-color: white" >WITHDRAW SLIP</legend>
		</fieldset>

		<label>Name of Withdrawer</label><br>
		<input type="text" name="depositor" required placeholder="Name of Withdrawer"><br>

		<label>Account number</label><br>
		<input type="text" name="account" required placeholder="Account number"><br>

		<label>Date</label><br>
		<input type="date" name="dates" required ><br>

		<label>Amount withdraw</label><br>
		<input type="text" name="withdraw" required placeholder="withdraw" id="op" readonly><br>

		

		<label>Time</label><br>
		<input type="time" name="tim" required ><br><br>

		<input type="submit" name="" value="Withdraw" class="btn btn-info" id="to">
	</form>

	<a href="Home.html"><input type="button" name="" value="Log-out" id="mo" class="btn btn-danger"></a>

	<div style="margin-right: 900px;margin-top: -300px;width: 265px;height: 220px">
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
			// $("button").css("display", "none");
			// $("button").css("position", "relative");
			// $("button").css("top", "-14.9em");

		}); 
		$("#do").click(function(){
			$("button").toggle(2000)
		});
	});
	
</script>
</html>