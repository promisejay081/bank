<!DOCTYPE html>
<html>
<head>
	<title>proceed</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


	<script type="text/javascript" src="wowjs/wow.min.js"></script>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style>
		body{
			
			background-color: orangered;
			
			color: white
		}
		h1{
			font-size: 4em;
			color: black;
			font-family: serif;
			text-shadow: white
		}
		input{
			width: 50%;
			height: 40px;
			color: white;
			border-radius: 5px;
			border:none;
			background-color: black;

		}
		#no{
			height: 50px;
			width: 250px;
		}
		input [type=text]{
			/*margin-left: 50px;*/
			text-align:center;
		}
		/*img {
	    -webkit-filter: grayscale(50%);  
	    filter: grayscale(50%);
	    opacity: 0.6;

	}*/
	</style>

	<script>
	new WOW().init();
		
	</script>
</head>
<body style="font-family:  Georgia;">
	<div style="background-color: white;height: 70px;margin-top: -20px">
		<h2 style=";color: orangered;margin-left: 50px" id="mo"  class="wow bounceIn">TOWER <li class="fa fa-apple" style="color: orangered;font-size: 2em" id="mo"></li>Bank
		</h2>

	</div>
		<h1 id="disp" style="color: white;text-align: center; margin-top: -1px"  class="wow bounceIn"></h1>
		<form  action="facelog.php" method="post">
			<font color="white">
			<?php 
				if (isset($msg)) {
					echo $msg;
				}
			 ?>
		</font>
	<!-- <div>
		<div style="background-image: url(images/4.png);height: 70vh;background-size: cover;opacity: " class="overlay">
			
		</div> -->
		<!-- <div >
		   <img src="images/no.jpg" style="background-size: cover;width: 100%;height: 70vh">
		<div lass=" carousel-caption">
		<h2 style="color: orangered;margin-bottom:  470px;margin-right: 500px;"  class="wow bounceIn carousel-caption">TOWER <li class="fa fa-apple" style="color: orangered;font-size: 2em"></li>Bank
		</h2>
	</div>
		 
		</div> -->
		
	<!-- <img src="images/no.jpg" > -->

	<div id="myCarousel" class="carousel slide wow " data-ride="carousel">

    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
  
    <div class="carousel-inner" role="list box" style="font-size: 2em">
      <div class="item active">
       <img class="image-size" src="images/12.png" style="height:250px;width:100%;">
       <div class="carousel-caption">
        <h1 style="font-size: 2em;color: white" class="text-link">KEEP YOUR PIN SAVE.</h1>
       </div>
        </div>
  

      <div class="item">
       <img class="image-size" src="images/11.png" alt="kl" style="width:100%;height:250px;">
       <div class="carousel-caption">
        <h1 style="font-size: 2em; color: black">KEEP YOUR PIN SAVE.</h1>
       </div>
      </div>

      <div class="item">
       <img class="image-size" src="images/13.png" alt="op" style="height:250px;width:100%;">
       <div class="carousel-caption">
       <h3 style="font-size: 2em;">KEEP YOUR PIN SAVE.</h3>
       </div>
      </div>

      <div class="item">
       <img class="image-size" src="images/no.jpg" alt="gl" style="height:250px;width:100%;">
       <div class="carousel-caption">
       <h3 style="font-size: 2em;color: orangered">KEEP YOUR PIN SAVE.</h3>
       </div>
      </div>
    
  </div>
  </div>



		<!-- <img src="images/no.jpg" style="height: 300px;width: 100%">
		 <div class="carousel-caption">
       <h2 style="margin-top:-250px;font-size: 4em;margin-right: 30px;color: orangered">Keep your pin save.</h2>
       </div> -->
	

	<div class="container-fluid" style="text-align: center;">
		<div class="col-md-6">
			<label >Account Number</label><br>	
			<span class="fa fa-pencil" style="font-size:3em;width: 60px"></span><input type="text" name="acct" placeholder="Acount Number">
		</div>

		<div class="col-md-6">
			<label>PIN</label><br>
			<span class="fa fa-lock" style="font-size:3em;width: 60px"></span><input type="password" name="pino" placeholder="Pin"><br><br><br>
		</div>
		<center>
			<input type="submit" name="" value="Continue your Transaction" class="btn btn-primary btn-lg" id="no"><br>
		</center>

		</div>
		</div>
	
</form>
<!-- <footer class="container-fluid wow " style="text-align:center;background-color: white;color:orangered">
	<h4>Copyright@Jay 2018</h4>
</footer> -->

	

</body>
<script>
        document.addEventListener('DOMContentLoaded',animation,false);
        var textArray = ["TOWER BANK(T.B)","Thanks For Banking With Us. "];
        function animation(){
          startAnim(0);
        }
        function effect(currentText,i,callback){
          if(i<currentText.length){
            document.getElementById("disp").innerHTML = currentText.substring(0,i+1)+"<span id='cursor'></span>";
            setTimeout(function(){effect(currentText,i+1,callback)},200);
          }else if(typeof callback == 'function'){
            setTimeout(callback,700); 
          }
        }
        function startAnim(i){
          if(typeof textArray[i] == 'undefined'){
            setTimeout(function(){startAnim(0)},10000);
          }
          if(i<textArray.length){
            var currentText = textArray[i];
            effect(currentText,0,function(){
              startAnim(i+1);
            });
            //startAnim(i+1);
            
          }
        }

    </script>
</html>