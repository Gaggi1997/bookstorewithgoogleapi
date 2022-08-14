<?php   

include '../connection.php';
$ids = $_GET['id'];
$deletequery = "delete from registration where id = $ids ";
$dquery = mysqli_query($con , $deletequery);
if ($dquery) {
	?>
	<script>alert('Data Deleted')</script>
	<?php 
}else{
	?>
	<script>alert('Error')</script>
	<?php
}
header('location:registrationdb.php');

?>