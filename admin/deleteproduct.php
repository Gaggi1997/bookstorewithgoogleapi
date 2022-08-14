<?php  

include 'mysqli_connect.php';
$ids = $_GET['book_id'];


    $deletequery = "delete from books_inventory where book_id = $ids";
    $result = mysqli_query($dbc,$deletequery);


    if($result){
        ?>
        <script>alert('Product Removed')</script>
        <?php
        header('location:products.php');
    }else{
        ?>
        <script>alert('Error')</script><?php
    }
    



?>