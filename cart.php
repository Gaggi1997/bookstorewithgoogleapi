<?php
require("connection.php");
if(!isset($_POST['g']))
{ echo "no items in cart";
}

    $book_image = $_GET['g'] ;
    $res= @mysqli_query($con,"SELECT * FROM books_inventory WHERE book_image='$book_image'");
    echo "<table>";
    echo "<tr>";
    while($row=mysqli_fetch_array($res))
   {
    echo "<div class='container px-5 py-5 mx-auto' style='margin-top:5%;'>
    <div class='row d-flex justify-content-center'>
    <div class='col-5'>
        <h4 class='heading'><strong>Item is added to your Cart</strong></h4>
    </div>
    <div class='col-7'>
        <div class='row text-right'>
            <div class='col-4'>
                <h6 class='mt-2' style='font-weight:bold';>Book Name</h6>
            </div>
            <div class='col-4'>
                <h6 class='mt-2' style='font-weight:bold';>Book Quantity</h6>
            </div>
            <div class='col-4' >
                <h6 class='mt-2' style='font-weight:bold';>Book Price</h6>
            </div>
        </div>
    </div>
    </div>
<div class='row d-flex justify-content-center'>
<div class='col-5'>
    <div class='row d-flex'>
        <div class='book'>
        <img src=./images/$row[book_image] height='250' width='200'>
        </div>
        <div class='my-auto flex-column d-flex pad-left'>
            <h6 class='mob-text' style='padding-left:105px ;font-weight:bold';>{$row['book_name']}</h6>
        </div>
    </div>
</div>
<div class='my-auto col-7'>
    <div class='row text-right'>
        <div class='col-4'>
            <p c`lass='mob-text' style='font-weight:bold';>{$row['book_author']}</p>
        </div>
        <div class='col-4'>
            <div class='row d-flex justify-content-end px-3'>
            <p class='mob-text' style='font-weight:bold;'>{$row['book_quantity']}</p>
            </div>
        </div>
        <div class='col-4'>
            <h6 class='mob-text style='font-weight:bold;''>{$row['book_price']}</h6>
        </div>
    </div>
</div>
</div>
<div class='Input'>
<a href='page.php?g={$row['book_image']}'>
<button class='button'>Proceed to Checkout</button>
</a>
</div>
</div>
";

}
?>
<!doctype html>
    <html>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <title>Snippet - Bootstrap</title>
            <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
            <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
            <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #fff;
    background-repeat: no-repeat;
}
/*my css*/
.col-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
}
.d-flex {
    display: -ms-flexbox!important;
    display: flex!important;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.book {
    margin: 20px 15px 5px 15px;
}
.book, .book-img {
    width: 120px;
    height: 180px;
    border-radius: 5px;
}
.col-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
}
.button 
{
  background-color: #16c9f6;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left:85%;
  width:25%;
}
/*my css*/

.plus-minus {
    position: relative;
}

.plus {
    position: absolute;
    top: -4px;
    left: 2px;
    cursor: pointer;
}

.minus {
    position: absolute;
    top: 8px;
    left: 5px;
    cursor: pointer;
}

.vsm-text:hover {
    color: #FF5252;
}

.book, .book-img {
    width: 120px;
    height: 180px;
    border-radius: 5px;
}

.book {
    margin: 20px 15px 5px 15px;
}

.border-top {
    border-top: 1px solid #EEEEEE !important;
    margin-top: 20px;
    padding-top: 15px;
}

.card {
    margin: 40px 0px;
    padding: 40px 50px;
    border-radius: 20px;
    border: none;
    box-shadow: 1px 5px 10px 1px rgba(0,0,0,0.2);
}

input, textarea {
    background-color: #F3E5F5;
    padding: 8px 15px 8px 15px;
    width: 100%;
    border-radius: 5px !important;
    box-sizing: border-box;
    border: 1px solid #F3E5F5;
    font-size: 15px !important;
    color: #000 !important;
    font-weight: 300;
}

input:focus, textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #9FA8DA;
    outline-width: 0;
    font-weight: 400;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

.pay {
    width: 80px;
    height: 40px;
    border-radius: 5px;
    border: 1px solid #673AB7;
    margin: 10px 20px 10px 0px;
    cursor: pointer;
    box-shadow: 1px 5px 10px 1px rgba(0,0,0,0.2);
}

.gray {
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    filter: grayscale(100%);
    color: #E0E0E0;
}

.gray .pay {
    box-shadow: none;
}

#tax {
    border-top: 1px lightgray solid;
    margin-top: 10px;
    padding-top: 10px;
}

.btn-blue {
    border: none;
    border-radius: 10px;
    background-color: #673AB7;
    color: #fff;
    padding: 8px 15px;
    margin: 20px 0px;
    cursor: pointer;
}

.btn-blue:hover {
    background-color: #311B92;
    color: #fff;
}

#checkout {
    float: left;
}

#check-amt {
    float: right;
}

@media screen and (max-width: 768px) {
    .book, .book-img {
        width: 100px;
        height: 150px;
    }

    .card {
        padding-left: 15px;
        padding-right: 15px;
    }

    .mob-text {
        font-size: 13px;
    }

    .pad-left { 
        padding-left: 20px;
    }
}
</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
       <link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body className='snippet-body'>
<nav class=" navbar navbar-expand-lg fixed-top">
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
                        <a class="nav-link" href="quiz.php">Quiz</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
<footer class="bg-dark text-center text-white ">
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
        <a href="#"><h5 class="text-uppercase">Contact us</h5></a>
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
</div>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Footer -->

                            
                                </body>
                            </html>