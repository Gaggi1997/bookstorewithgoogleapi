<?php 
session_start();
if (!isset($_SESSION['name'])) {
  header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="../css/registration.css">
    </head>

    <body>

        
            <nav class="back-home">
            <ul>
            <li><a href="admin.php">Cancel</a></li>
            </ul>
        </nav>
        <?php 
        include '../mysqli_connect.php';
        if(isset($_POST['submit'])){
          $name = $_POST['book_name'];
          $author = $_POST['book_author'];
          $category = $_POST['category_name'];
          $price = $_POST['book_price'];
          $publishdate = $_POST['Published_date'];
          $offer = $_POST['offer'];
          $file = $_FILES['book_image'];
          //print_r($file);
          $filename = $file['name'];
          $filepath =$file['tmp_name'];
          $fileerror =$file['error'];
          if ($fileerror == 0) {
              $destfile = '../images/'.$filename;
            move_uploaded_file($filepath, $destfile);
          

          $insertquery = "insert into books_inventory(book_name , book_author , category_name , book_price , Published_date , offer,book_image) values('$name','$author','$category','$price','$publishdate' , 'offer' , '$destfile')";
            $query = mysqli_query($dbc , $insertquery);
            if ($query) {
                ?><script>alert('Product Inserted')</script> <?php
                header('location:products.php');
            }else{
                ?><script>alert('Error')</script> <?php
            }
        }
    }

        ?>

    <main>
        <div class="container">
            <div class="header">
                <h2>ADD PRODUCT</h2>
            </div>
            <form class="form"  id="form" method="POST" enctype="multipart/form-data" >
                <div class="form-control">
                    <label>Name</label>
                    <input type="text" name="book_name" placeholder="Enter Name of Book" autocomplete="off">
                 </div>
                <div class="form-control">
                    <label>Author</label>
                    <input type="text" name="book_author" placeholder="Enter Author of Book" autocomplete="off">
                    
                </div>
                <div class="form-control">
                    <label>Category</label>
                    <input type="text" name="category_name" placeholder="Enter Category of Book" autocomplete="off">
            
                </div>
                <div class="form-control">
                    <label>Price</label>
                    <input type="text" name="book_price" placeholder="Enter Book Price">
                    
                </div>
                <div class="form-control">
                    <label>Publish Date</label>
                    <input type="Date" name="Published_date" placeholder="Enter Published date">
                    
                </div>
                <div class="form-control">
                    <label>Offer</label>
                    <input type="text" name="offer" placeholder="Enter Offer on Book">
                    
                </div>
                <div class="form-control">
                    <label>Upload Image</label>
                    <input style="border: none;" type="file" name="book_image">
                    
                </div>
                <input type="submit" value="Add Product" class="btn" name="submit">
                
            </form>
        </div>
    </main>
        
        
    </body>

</html>

  





