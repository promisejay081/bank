<?php
$text = $_POST['text'];
$load = $_POST['load'];
$myfile = fopen("newfile.html", "w") or die("Unable to open file!");
fwrite($myfile, $text);
echo $text;
fclose($myfile);
?>
