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
        $book_ids = $_GET['book_id'];
        $selectquery = "select * from books_inventory where book_id='$book_ids'";
        $query = mysqli_query($dbc,$selectquery);
        $arrdata = mysqli_fetch_assoc($query);




        if(isset($_POST['submit'])){
            $idupdate = $_GET['book_id'];
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
          

          $updatequery = "update books_inventory set book_id=$idupdate , book_name='$name' , book_author='$author' , 
                 category_name='$category' , book_price=$price , Published_date='$publishdate' , offer='$offer' , book_image='$destfile' 
                 where book_id = $idupdate";
                 $res=mysqli_query($dbc,$updatequery);
                 if ($res){
                ?><script>alert('Product Updated')</script> <?php
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
                <h2>UPDATE PRODUCT</h2>
            </div>
            <form class="form"  id="form" method="POST" enctype="multipart/form-data" >
                <div class="form-control">
                    <label>Name</label>
                    <input type="text" name="book_name"  autocomplete="off" value="<?php echo $arrdata['book_name'];   ?>">
                 </div>
                <div class="form-control">
                    <label>Author</label>
                    <input type="text" name="book_author"  autocomplete="off" value="<?php echo $arrdata['book_author'];   ?>">
                    
                </div>
                <div class="form-control">
                    <label>Category</label>
                    <input type="text" name="category_name"  autocomplete="off" value="<?php echo $arrdata['category_name'];   ?>">
            
                </div>
                <div class="form-control">
                    <label>Price</label>
                    <input type="text" name="book_price" value="<?php echo $arrdata['book_price'];   ?>" >
                    
                </div>
                <div class="form-control">
                    <label>Publish Date</label>
                    <input type="Date" name="Published_date" value="<?php echo $arrdata['Published_date'];   ?>" >
                    
                </div>
                <div class="form-control">
                    <label>Offer</label>
                    <input type="text" name="offer" value="<?php echo $arrdata['offer'];   ?>" >
                    
                </div>
                <div class="form-control">
                    <label>Upload Image</label>
                    <input style="border: none;" type="file" name="book_image" value="<?php echo $arrdata['book_image'] ?>">
                    
                </div>
                <input type="submit" value="Update Product" class="btn" name="submit" >
                
            </form>
        </div>
    </main>
        
        
    </body>

</html>

  





