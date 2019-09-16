<?php
if (isset($_POST['set'])) {
	$text = $_POST['text'];
	$load = $_POST['load'];
	$myfile = fopen($load, "w") or die("Unable to open file!");
	fwrite($myfile, $text);
	$myfile = fopen($load, "r") or die("Unable to open file!");
	$a=fread($myfile,filesize($load));
	fclose($myfile);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sublime</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


	<script type="text/javascript" src="wowjs/wow.min.js"></script>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<center>
		<h2>edit code</h2>
		<form action="Sublime.php" method="post">
			<div class="container-fluid jumbotron" style="margin-top: 50px">
				<div class="col-md-6">
					<textarea style="height: 200px;width: 400px" name="text"></textarea><br>
						<input type="text" name="load" >
							<!-- <button>Save</button> -->
				</div>

			<!-- <button style="margin-top: -5px">Load</button> -->
		<div class="col-md-6">
			<div style="height: 200px;width: 400px;border:5px solid black"><?php if(isset($a))echo $a; ?></div>
		</div>
		
	</div>
	<input type="submit" name="set">
</form>
</center>

</body>
</html>