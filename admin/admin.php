
<?php session_start();  
if (!isset($_SESSION['name'])) {
  header('location:adminlogin.php');
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Book Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="GagandeepSingh">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
      <section class="header-section">
        <div class="center-div">
          <h1 class="font-weight-bold">Welcome <?php echo $_SESSION['name'];   ?> </h1>
          <p>Welcome To Book Store Admin</p>
        </div>
      </section>
