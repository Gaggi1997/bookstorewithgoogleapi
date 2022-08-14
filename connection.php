<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "bookdb";

$con = mysqli_connect($server,$username,$password,$database);
if ($con) {
	?>
	<script>alert('Connection Successful')</script>
	<?php
}else{
	?>
	<script>alert('Connection Unsuccessful')</script>
	<?php
}



?>