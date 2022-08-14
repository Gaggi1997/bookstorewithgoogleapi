<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="style.css">
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
.custombutton{
    margin-left:40%;
}
.button {
  background-color: #008CBA;
  border: none;
  border-radius: 50%;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
                        <a class="nav-link" href="index.php">Home</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="product.php">Books List</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About us</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="cart.php">Shopping Cart </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="quiz.html">Quiz</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="customtop">
    <h1 class = "lg-title">Special Books With Discount</h1>
 <p class = "text-dark" style="font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:1.3em; margin-left:20px; margin-right:20px;">Welcome to your friendly neighbourhood library.Our Books is one of the best resources on the web for free books in a variety of download formats. 
 We are sellers of new bargain books purchased directly from various publishers. We purchased these books for amazing prices and sell them for up to 90% off publisher’s list price.
</p>
</section>
<div class="search-container">
<form action="search.php" method="post">
    <input type="text" name="search"  class="custombutton">
   <input type="submit" value="Search" class="button">
   <!--<a href="search.php"><button type="submit"><i class="fas fa-search"></i></button>-->
</form>
  </div>
  <div class="row">
<?php
require("connection.php");
//Selecting the bookinventory table.
$query = "SELECT * FROM books_inventory";
$result = @mysqli_query($con, $query);
// Fetching the book inventory table rows.
while($row = mysqli_fetch_array($result))
{ ?><div class="col-md-4 col-sm-6 my-0 my-md-0"> <?php
    echo "<div id='main-content' class='card-deck text-left d-inline-flex p-4'  style='margin: 0 0 0 0';>
    <div class='card bg-light text-dark mb-4 w-25 p-3' style='max-height: auto; width: 100px';>
    <span style='color:white'>{$row['book_id']}</span>
    <div class='product'>
    <div class = 'product-content' style='background:#d3ffce;'>
    <img src='images/{$row['book_image']}' style='height:300px; width:300px;'>
    <div class = 'product-btns'>
    <a href='cart.php?g={$row['book_image']}'>
    <button type = 'button' class = 'btn-cart' p-4> Add to cart
        <span><i class = 'fas fa-plus'></i></span></a>
    </button>
    <a href='page.php?g={$row['book_image']}'><button type = 'button' class = 'btn-buy'> buy now
        <span><i class = 'fas fa-shopping-cart'></i></span></a>
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
        <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
             <!-- <label class="form-label" for="form5Example21">Email address</label>-->
            </div>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
      No matter what you’re a fan of, from Fiction to Biography, Sci-Fi, Mystery, YA, Manga, and more, 
      Our Book Store has the perfect book for you. Shop bestselling books from the NY Times Bestsellers list, 
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
         <a href="index.php"><h5 class="text-uppercase">Home</h5></a>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <a href="product.php"><h5 class="text-uppercase">Product</h5></a>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <a href="aboutus.php"><h5 class="text-uppercase">About Us</h5></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <a href="contactus.php"><h5 class="text-uppercase">Contact us</h5></a>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <h6>Group 1</h6>
  </div>
  <!-- Copyright -->
</footer>

<!-- Footer -->
</body>
</html>
     