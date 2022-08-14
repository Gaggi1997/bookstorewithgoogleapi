<? session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <!-- font awesome -->

        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
<style>

/*body{
    background-color: #f7f2f8;
}*/
*{
  padding: 0;
  margin: 0;
}
body{
  padding: 0;
  margin: 0;
}
.customtop{
padding-top:5%;

}

</style>   
</head>
    <body>
    <nav class=" navbar navbar-expand-lg">
        <div class="container text-uppercase pt-3">
          <a class="navbar-brand text-white font-weight-bold" href="#"><img style="width: 70px;" src="https://toppng.com/public/uploads/thumbnail/experience-the-discussion-online-library-book-logo-11562996058ip1or4eqvs.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-white">
                      <li class="nav-item active">
                        <a class="nav-link" href="registrationdb.php">View Users</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="queries.php">Users Queries</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="addadmin.php">Add admin</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="products.php">All Products</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="addproduct.php">Add Product</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="adminlogout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="customtop">
    <h1 class = "lg-title">PRODUCTS IN INVENTORY</h1>
</section>
  <div class="row">
<?php
require("mysqli_connect.php");
//Selecting the bookinventory table.
$query = "SELECT * FROM books_inventory order by book_id asc";
$result = @mysqli_query($dbc, $query);
// Fetching the book inventory table rows.
while($row = mysqli_fetch_array($result))
{ ?><div class="col-lg-4 col-md-6 col-sm-10"> <?php
    echo "<div id='main-content' class='card-deck text-left d-inline-flex p-4'  style='margin: 0 0 0 0';>
    <div class='card bg-light text-dark mb-4 w-25 p-3' style='max-height: auto; width: 100px';>
    <span style='color:white'>{$row['book_id']}</span>
    <div class='product'>
    <div class = 'product-content' style='background:#d3ffce;'>
    <img src='../images/{$row['book_image']}' style='height:300px; width:300px;'>
    <div class = 'product-btns'>
    <a href='deleteproduct.php?book_id={$row['book_id']}'>
    <button type = 'button' class = 'btn-delete'> Delete
        </a>
    </button>
    <a href='updateproduct.php?book_id={$row['book_id']}'>
    <button type = 'button' class = 'btn-cart'> Update
        </a>
    </button>
    
    </div>
</div>
</div>
    <span style='font-size:1em; line-height:0 ;color:black; font-family: Arial, Helvetica, sans-serif; font-weight:bold';>{$row['category_name']}</span>
    <div class = 'rating' style='margin-left:60% ';>
    <span><i class = 'fas fa-star' style='color:#16c9f6';></i></span>
    <span><i class = 'fas fa-star' style='color:#16c9f6';></i></span>
    <span><i class = 'fas fa-star' style='color:#16c9f6';></i></span>
    <span><i class = 'fas fa-star' style='color:#16c9f6';></i></span>
    <span><i class = 'far fa-star' style='color:#16c9f6';></i></span>
     </div><br>
     <div class = 'off-info'>
    <h2 class = 'sm-title'>{$row['offer']}off</h2>
</div>
    <span style='font-size:1.5em; line-height: 0;color:#16c9f6; font-weight:bold';>{$row['book_name']}</span><br>
    <span style='color:black; font-weight:bold; font-family: Arial, Helvetica, sans-serif'; > <strong>Author:</strong>{$row['book_author']}</span><br>
    <span style='color:black; font-weight:bold;  font-family: Arial, Helvetica, sans-serif'; > <strong>Price:</strong> ?g={$row['book_price']}</span>
    <span style = 'color:black; font-weight:bold;  font-family: Arial, Helvetica, sans-serif'; >  <strong>In Stock:</strong> {$row['book_quantity']}</span></a>
    <span style = 'color:black; font-weight:bold;  font-family:Arial, Helvetica, sans-serif'; >  <strong>Published Date:</strong> {$row['Published_date']}</span>
  
    </div>
    </div>
    </div>";
}
?>

</div></div>
<div style="text-align: center; padding: 8px;"><p style="text-align: center; font-size: 20px;"><a style="text-decoration: none;" href="addproduct.php">+ADD PRODUCT</a></p></div>
</body>
</html>
     