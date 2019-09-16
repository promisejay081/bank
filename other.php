<!DOCTYPE html>
<html>
<head>
	<title>other</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


	<script type="text/javascript" src="wowjs/wow.min.js"></script>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
	var v;
		function button(v){
		op.value+=(v)
	}
	
</script>
</head>
<body>
	<center>
		<form>
	 <b><label>Enter Amount</label></b><br>
		<input type="text"  value=""  id="op"><br><br>

		<button onclick="button('1')" type="button">1</button>
		<button onclick="button('2')" type="button">2</button>
		<button onclick="button('3')" type="button">3</button>
		<button class="btn btn-warning" id="no">Send</button><br>
		<button onclick="button('4')" type="button">4</button>
		<button onclick="button('5')" type="button">5</button>
		<button onclick="button('6')" type="button">6</button>
		<button class="btn btn-danger" id="no">Cancel</button><br>
		<button onclick="button('7')" type="button">7</button>
		<button onclick="button('8')" type="button">8</button>
		<button onclick="button('9')" type="button">9</button>
		<button class="btn btn-link" id="no">Cancel</button><br>
		<button onclick="button(',')" type="button">,</button>
		<button onclick="button('00')" type="button">00</button>
		<button onclick="button('0')" type="button">0</button>
		<button class="btn btn-success" id="no">Cancel</button><br>


		<strong><label>PIN</label></strong><br>
		<input type="password" name=""><br><br>
		<input type="button" name="" value="Collect" class="btn btn-primary">
		<h4 class="text-danger" >WARNIG:Keep your password save to yourself</h4>
	</form>
	</center>
	



</body>
</html>