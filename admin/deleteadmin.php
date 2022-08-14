<?php 
include '../connection.php';
$ids = $_GET['id'];
$deletequery = "delete from adminregister where id = '$ids'";
$res = mysqli_query($con , $deletequery);
if ($res) {
	?> <script>alert('Admin Removed')</script>
	<?php header('location:addadmin.php');
}else{
      ?> <script>alert('Could not remove Admin')</script>
      <?php
}



?>