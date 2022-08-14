<?php 

include 'gs.php';
if (!isset($_SESSION['name']) & (!isset($_SESSION['user_first_name']))) {
  header('location:login.php');
}

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Book Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="GagandeepSingh">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="header" id="topheader">
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
                      <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="header-section">
        <div class="center-div">
          <h1 class="font-weight-bold">Welcome  <?php 
          if (isset($_SESSION['name'])) {
            echo $_SESSION['name'];
          }if (isset($_SESSION['user_first_name'])) {
            echo $_SESSION['user_first_name'];
          }
         ?></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do .</p>
          <div class="header-buttons">
            <a href="aboutus.php">AboutUs</a>
            <a href="#" class="header-second-button">Contact</a>
          </div>
        </div>
      </section>
    </div>
    <section class="header-extradiv">
      <div class="container ">
        <div class="row text-center">
          <div class=" extradiv col-lg-4  col-md-4 col-12">
            <a href="#">
              <i class="fa fa-3x fa-desktop" aria-hidden="true"></i>
            </a>
            <h2>Content</h2>
            <p>Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class=" extradiv col-lg-4  col-md-4 col-12">
            <a href="#">
              <i class="fa fa-3x fa-trophy" aria-hidden="true"></i>
            </a>
            <h2>Content</h2>
            <p>Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class=" extradiv col-lg-4  col-md-4 col-12">
            <a href="#">
              <i class="fa fa-3x fa-magic" aria-hidden="true"></i>
            </a>
            <h2>Content</h2>
            <p>Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="serviceoffers" id="servicediv">
      <div class="container headings text-center">
        <h1 class="text-center font-weight-bold">Services</h1>
        <p class="text-center"></p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-10 offset-lg-0 offset-1">
            <div class="names my-3">
              <h1>Shipping Speed</h1>
              <div class="progress w-75">
                <div class="  progress-bar progress-bar-striped progress-bar-animated bg-info" style="width:100%">90%</div>
              </div>
            </div>
            <div class="names my-3">
              <h1>Customer Response</h1>
              <div class="progress w-75">
                <div class="  progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:90%">100%</div>
              </div>
            </div>
            <div class="names my-3">
              <h1>Deals on Goods</h1>
              <div class="progress w-75">
                <div class="  progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:85%">95%</div>
              </div>
            </div>
            <div class="names my-3">
              <h1>Latest Products</h1>
              <div class="progress w-75">
                <div class="  progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:75%">80%</div>
              </div>
            </div>
            <div class="names my-3">
              <h1>Negotaible</h1>
              <div class="progress w-75">
                <div class="  progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:80%">75%</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-12 servicediv">
            <div class="row ">
              <div class="col-lg-2 col-2 service-icons" >
                <i class="fa fa-2x fa-desktop" aria-hidden="true"></i>
              </div>
              <div class="col-lg-10 col-10 ">
                <h2>Rentals</h2>
                <p>We Provide book rentals for a short period of time at cheaper rates.</p>
              </div>
            </div>
            <div class="row ">
              <div class="col-lg-2 col-2 service-icons" >
                <i class="fa fa-2x fa-desktop" aria-hidden="true"></i>
              </div>
              <div class="col-lg-10 col-10 ">
                <h2>Online Sale</h2>
                <p>We Provide online selling of books with faster shopping and great deals.</p>
              </div>
            </div>
            <div class="row ">
              <div class="col-lg-2 col-2 service-icons" >
                <i class="fa fa-2x fa-desktop" aria-hidden="true"></i>
              </div>
              <div class="col-lg-10 col-10 ">
                <h2>Easy Returns</h2>
                <p>Easy returns if not satisfied with any of our product.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="project-work">
      <div class="container headings text-center">
        <p class="text-center font-weight-bold text-uppercase">Most Sold books</p>
      </div>
      <div class="container servicediv project-works d-flex justify-content-around align-items-center">
        <div>
          <h1 class="count"> 2055 </h1>
          <p style="text-align: center;">As You Like it<br>William Shakespeare</p>
        </div>
        <div>
          <h1 class="count"> 1299 </h1>
          <p style="text-align: center;">Harry Potter<br>JK Rowling</p>
        </div>
        <div>
          <h1 class="count"> 965 </h1>
          <p style="text-align: center;">Rich Dad Poor Dad<br>Robert Kiyosaki</p>
        </div>
        <div>
          <h1 class="count"> 651 </h1>
          <p style="text-align: center;">Verity<br>Colleen Hoover</p>>
        </div>
      </div>
    </section>
    <section class="pricing" id="pricingdiv">
      <div class="container headings text-center">
        <h1 class="text-center font-weight-bold text-white">Our Free Items</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-12">
            <div class="card text-center">
              <div class="card-header">As You Like It</div>
              <div class="card-body">
                <img src="images/free1.jpg" style="width: 150px">
              </div>
              <div class="card-footer ">
                <a href="pdf/free1.pdf">View</a>
                <a target="_gagan" href="download.php?file=free1.pdf">Download</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="card text-center card-second">
              <div class="card-header">Harry Potter</div>
              <div class="card-body">
                <img src="images/free2.jpg" style="width:150px ">
              </div>
              <div class="card-footer ">
                <a href="pdf/free2.pdf">View</a>
                <a href="download.php?file=free2.pdf">Download</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="card text-center">
              <div class="card-header">Rich Dad Poor Dad</div>
              <div class="card-body">
                
                <img src="images/free3.jpg" style="width:150px">
              </div>
              <div class="card-footer ">
                <a href="pdf/free3.pdf">View</a>
                <a href="download.php?file=free3.pdf">Download</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="happyclients">
      <div class="container headings text-center">
        <h1 class="text-center font-weight-bold ">Portfolio</h1>
        <p class="text-capitalize pt-1">Our Recent Comments</p>
      </div>
      <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <!--For SlideShow-->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <a href="#">
                      <img src="images/user3.png" class="img-fluid img-thumbnail" >
                    </a>
                    <p class="m-4">Awesome and convinient customer service</p>
                    <h1>Ksingh</h1>
                    <h2>jalandhar</h2>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <div>
                      <a href="#">
                        <img src="images/user2.png" class="img-fluid img-thumbnail">
                      </a>
                    </div>
                    <p class="m-4">  Very Reliable </p>
                    <h1>Raghav</h1>
                    <h2>Brampton</h2>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <div>
                      <a href="#">
                        <img src="images/user3.png" class="img-fluid img-thumbnail">
                      </a>
                    </div>
                    <p class="m-4">  Genuine Pricing! i loved it!</p>
                    <h1>Taranjit</h1>
                    <h2>Toronto</h2>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <a href="#">
                      <img src="images/user3.png" class="img-fluid img-thumbnail" >
                    </a>
                    <p class="m-4">  Great Potential working with full effort. Hppy with their Work.</p>
                    <h1>Kanwaljeet Singh</h1>
                    <h2>Aucland</h2>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <div>
                      <a href="#">
                        <img src="images/user2.png" class="img-fluid img-thumbnail">
                      </a>
                    </div>
                    <p class="m-4">  Great Potential working with full effort. Hppy with their Work. </p>
                    <h1>Karan Rana</h1>
                    <h2>Jalandhar</h2>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <div>
                      <a href="#">
                        <img src="images/user3.png" class="img-fluid img-thumbnail">
                      </a>
                    </div>
                    <p class="m-4">  Great Potential working with full effort. Hppy with their Work.</p>
                    <h1>Agamjot Singh</h1>
                    <h2>Mohali</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <a href="#">
                      <img src="images/user3.png" class="img-fluid img-thumbnail" >
                    </a>
                    <p class="m-4"> Great Potential working with full effort. Hppy with their Work.</p>
                    <h1>Gagandeep Singh</h1>
                    <h2>Hamilton</h2>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <div>
                      <a href="#">
                        <img src="images/user2.png" class="img-fluid img-thumbnail">
                      </a>
                    </div>
                    <p class="m-4">  Great Potential working with full effort. Hppy with their Work. </p>
                    <h1>Mohinder Singh</h1>
                    <h2>Kitchener</h2>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <div>
                      <a href="#">
                        <img src="images/user3.png" class="img-fluid img-thumbnail">
                      </a>
                    </div>
                    <p class="m-4"> Great Potential working with full effort. Hppy with their Work.</p>
                    <h1>Gagandeep Singh</h1>
                    <h2>Waterloo</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </section>
    <section class=" contactus">
      <div class="container headings text-center">
        <h1 class="text-center font-weight-bold ">Send Queries</h1>
        <p class="text-capitalize pt-1">We are always Ready For Helping People. fill details below our normal Responding time is 2-3 business days </p>
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
    <form method="POST">
    <section class="newsletter" id="newsletterdiv">
      <div class="container headings text-center">
        <h1 class="text-center font-weight-bold ">Hit The Suscribe Button</h1>
      </div>
      <div class="newsletter-main container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
            <div class="input-group mb-3">
              <input type="text" class="form-control news-input" placeholder="Your Email" name="email">
              <div class="input-group-append">
                <span class="input-group-text text-center">
               <input type="submit" name="submit" value="Sucribe" style="background: none; border: none; color: white;"> 
               </span>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
  </form>
    
    
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
         <a href="home.php"><h5 class="text-uppercase">Home</h5></a>
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
<!-- Footer -->
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
<div class="fixed-bottom">.
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
      $('.count').counterUp({
        delay:10,
        time:3000
      })
      function checkvalidation()
      {
        let email = document.getElementById('email').value;
        let username = document.getElementById('name').value;
        debugger;
        if(username == "" ){
          alert("Please Fill the username Id");
          return false;
        }
        if(email == ""){
          alert("Please Fill the Email Id");
          return false;
        }
        return true;
      }
      function checknewsletter()
      {
        let newsletter = document.getElementById('newsletter').value;
    
        if(newsletter == "")
        {
          alert("Please Fill the Email Id");
          return false;
        }
        return true;
      }
    mybutton = document.getElementById("myBtn");
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    } else {
    mybutton.style.display = "none";
    }
    }
    //For all Browser Suppor
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>
  </body>
</html>



<?php
include 'connection.php';

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
  $query = mysqli_query($con,$insertquery);
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