<?php session_start();   ?>
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
            <li><a href="index.html">Back Home</a></li>
            </ul>
        </nav>

        <?php 

include '../connection.php'; 

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
    
	$hashpassword = password_hash($password, PASSWORD_BCRYPT);
	$hashcpassword = password_hash($cpassword, PASSWORD_BCRYPT);

	$emailquery = "select * from adminregister where email = '$email' ";
	$res = mysqli_query($con , $emailquery); 
		
	$emailcount = mysqli_num_rows($res);
	if ($emailcount>0) {
		?> <script>alert('email already present')</script> <?php
	}elseif ($password == $cpassword) {
			$insertquery = "insert into adminregister(name , email , phone , password , cpassword) values('$name','$email','$phone','$hashpassword','$hashcpassword')";
            $query = mysqli_query($con , $insertquery);
            
            if ($query) { 
            	?>
            	<script>alert('Admin Created')</script>
            	<?php   header('location:adminlogin.php');
            }else{
            	?>
            	<script>alert('Could Not add Admin')</script>
            	<?php
            }

			
		}else{
			?> <script>alert('password doesnot match')</script> <?php
		}
	
	



}





?>







         <main>
        <div class="container">
            <div class="header">
                <h2>ADD ADMIN</h2>
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
                <p style="text-align: center; padding:20px">Already have an Account?<a style="text-decoration: none;" href="adminlogin.php">Login</a></p>
            </form>
        </div>
    </main>
        
        
    </body>

</html>



