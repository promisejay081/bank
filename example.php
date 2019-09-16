<?php 
// echo (rand()."<br>");
// echo (rand()."<br>");
echo (rand(1,1000000000));
// print(time);


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>watch</title>
 	<script>
 		var h = 0;
 		var m = 0;
 		var s = 0;
 		var stp;
 		function start(){
 			w.innerHTML= h + ":" + m + ":" + s;
 		
 		if (s>59) {
 			m++;
 			s=0;
 		}
 		if (m>24) {
 			h++;
 			m=0;
 		}
 		stp = setTimeout("start()",1000);
 		s++;
 		}
 		function stop(){
 			clearTimeout(stp);
 		}
 		
 	</script>
 </head>
 <body>
 	<center>
 	<div id="w" style="font-size: 6em"></div>
 	<button onclick="start('')" style="font-size: 3em">Start</button>
 	<button onclick="stop('')" style="font-size: 3em">Stop</button>
 </center>
 
 </body>
 </html>