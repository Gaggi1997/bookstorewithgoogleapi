
<?php  session_start();  

?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="css/registration.css">
    </head>

    <body>

        
            <nav class="back-home">
            <ul>
            <li><a href="index.php">Back Home</a></li>
            </ul>
        </nav>
        <?php   

include 'connection.php';


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $passwordhash = password_hash($password, PASSWORD_BCRYPT);
    $cpasswordhash = password_hash($cpassword , PASSWORD_BCRYPT);

    $emailquery = "select * from registration where email = '$email'";
    $fetchemail = mysqli_query($con , $emailquery);
    $emailcount = mysqli_num_rows($fetchemail);

    if ($emailcount> 0) {
        ?>
        <script>alert('Email Already Exists')</script>
        <?php
    }else{
        if ($password === $cpassword) {
            $insertquery = "insert into registration(name , email , phone , password , cpassword) values('$name','$email','$phone','$passwordhash','$cpasswordhash')";
            $query = mysqli_query($con , $insertquery);
            if ($query) {
        ?>
        <script>alert('Registered')</script>
        <?php 
    }else{
        ?>
        <script>alert('Error')</script>
        <?php
    }
            
        }else{
        ?>
        <script>alert('Password doesnot Match')</script>
        <?php
    }
  }

 }



?>
        <main>
        <div class="container">
            <div class="header">
                <h2>REGISTRATION FORM</h2>
            </div>
            <form class="form" id="form" method="POST">
                <div class="form-control">
                    <label>Username</label>
                    <input type="text" name="name" id="username" placeholder="Enter your fullname" autocomplete="off">
                 </div>
                <div class="form-control">
                    <label>Email</label>
                    <input type="Email" name="email" id="email" placeholder="Enter your Email" autocomplete="off">
                    
                </div>
                <div class="form-control">
                    <label>Phone Number</label>
                    <input type="number" name="phone" id="phone" placeholder="Enter your Phone Number" autocomplete="off">
            
                </div>
                <div class="form-control">
                    <label>Password</label>
                    <input type="Password" name="password" id="password" placeholder="Enter your Password">
                    
                </div>
                <div class="form-control">
                    <label>Confirm Password</label>
                    <input type="Password" name="cpassword" id="cpassword" placeholder="Enter your Password again">
                    
                </div>
                <input type="submit" value="Submit" class="btn" name="submit">
                <p style="text-align: center; padding:20px">Already have an Account?<a style="text-decoration: none;" href="login.php">Login.php</a></p>
            </form>
        </div>
    </main>
        
        
    </body>

</html>




