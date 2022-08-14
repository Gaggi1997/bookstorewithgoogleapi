<?php

include '../connection.php';
$ids = $_GET['id'];


    $deletequery = "delete from form where id = $ids";
    $result = mysqli_query($con,$deletequery);


    if($result){
        ?>
        <script>alert('Data Deleted')</script>
        <?php
        
    }else{
        ?>
        <script>alert('Error')</script><?php
    }
    header('location:queries.php');


?>