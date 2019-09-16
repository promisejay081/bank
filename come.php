<!DOCTYPE html>
<html>
<head>
	<title>Students-Info</title>
<meta name="viewport" content="width=device-width" initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


    <script type="text/javascript" src="wowjs/wow.min.js"></script>
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
   
		new WOW().init();
	</script>
	<style>
	
		#main .buy {display: flex;justify-content: space-around;}

		#main 
		{
			transition: margin-left .5s;margin-left: 250px;
			padding-top: 20px
		}
		/*img
		{
			width: 5%;
			margin-right:230px;
			padding-top: 8px;
			position: static;
		}*/
		

	</style>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <ul class="nav navbar-top-links navbar-right pull-right">
                	<!-- <li><img src="img/AU.jpg"></li> -->

                    <li>
                        <form>
                            <div role="search" class="app-search hidden-sm hidden-xs m-r-11 mb-2"><input type="text" placeholder="Search..."  onkeyup="get(this.value)"  name="input" class="form-control"><a href=""><i class="fa fa-search"></i></a></div> </form>
                    </li>
                    
                </ul>
            </div>
        </nav>

</body>

<script>
		function get(f)
		{
			var put='';
			var ins=f;
          $.post("jso.php",{input:ins},function(take){all=JSON.parse(take);
            for(i=0;i<all.length;i++){
            	// ids=all[i].student_info;
            	// put+="<tr><td>"+all[i].Name+"</td><td>"+all[i].Course+"</td><td>"+all[i].Matric_No+"</td><td>"+all[i].Level+"</td><td>"+all[i].Email_Address+"</td><td>"+all[i].gender+"</td><td><button class='btn btn-sm btn-info'><a style='text-decoration:none;color:white;' href='more.php?id="+ids+"'>More</button></td></tr>";

                 // for (i = 0; i < all.length; i++){
                   ids= all[i].customer_id;
                    put+="<tr><td>"+all[i].firstame+"</td></tr>"
                    
                    // "</td></tr>"
                    // arr [i].phone+
                    // "</td></tr>";

            }
            $('tbody').html(put);
          });
          
		}
	</script>
</html>

