<!DOCTYPE html>
<html>
<head>
    <title>Json</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">


    <script type="text/javascript" src="wowjs/wow.min.js"></script>
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<script>
    function searchBase(s)
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
<body style="background-color: black;color: white">
        
    <input type="text" class="form-control" id="search" name="" onkeyup="searchBase(this.value)">
    <table class='table table-striped' border=2 style="border-color: red;"><thead><tr><th style="color: orange">ID</th><th style="color: orange">Account</th><th style="color: orange">Name</th></tr></thead></table>
    <input type="submit" name="" class="btn btn-danger" id="op">
    <div id="rt"></div>

<h3>hygygubu</h3>


</body>
</html>
