<?php  

$file = $_GET['file'] ;
header("content-disposition: attachment; filename =" .urlencode($file));

$fb = fopen($file, "r");
while(!feof($fb)){
	echo fread($fb, 8912);
	flush();
}
fclose($fb);




?>