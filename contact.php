<?php
require("connection.php");

if (isset($_POST['submit'])) {
  $Name = $_POST['name'];
  $Email = $_POST['email'];
  $Phone = $_POST['phone'];
  $Message = $_POST['message'];

  $emailquery = "select * from form where email = '$Email' ";
  $validationEmail = mysqli_query($con,$emailquery);
  $emailCount = mysqli_num_rows($validationEmail);
  if ($emailCount>1) {
      ?>
    <script>alert('Already sent Please wait for reply')</script>
    <?php
  }else{
    $insertquery = "insert into form(name,email,phone,message) values('$Name','$Email','$Phone','$Message')";
  $query = mysqli_query($dbc,$insertquery);
  if ($query) {
    ?>
    <script>alert('Your Query was sent Thank you ')</script>
    <?php
  }else{
    ?>
    <script>alert('Something Went Wrong Please try again later')</script>
    <?php
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
       <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
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
                      
                      <li class="nav-item ">
                        <a class="nav-link" href="cart.php">Shopping Cart </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="quiz.php">Quiz</a>
                        <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About us</a>
                      </li>
                      
            </ul>
          </div>
        </div>
      </nav>
<section class=" contactus">
      <div class="container headings text-center" style= "margin-top:55px;">
        <h1 class="text-center font-weight-bold " style="font-size:30px;" >Send Queries</h1>
        <p class="text-capitalize pt-1" style="font-size:20px;">We are always Ready For Helping People. fill details below our normal Responding time is 2-3 business days </p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
            <form action="#" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Enter Your Name " name="name" autocomplete="off">
              </div>
              <div class="form-group">
                
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
              </div>
              
              <div class="form-group">
                
                <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="phone">
              </div>
              <div class="form-group">
                
                <textarea class="form-control" rows="4" id="comment" placeholder="Enter Your Message" name="message"></textarea>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="text-center" name="submit" onclick="return checkvalidation()">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
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
        <a href="contact.php"><h5 class="text-uppercase">Contact us</h5></a>
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
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Footer -->
    </body>
</html>