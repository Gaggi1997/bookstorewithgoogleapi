
<?php session_start();    ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="css/registration.css">
 	<title></title>
 </head>
 <body>

 	<?php 
 	include 'connection.php';



 	if(isset($_POST['submit'])) {
 	$email = $_POST['email'];
 	$password = $_POST['password'];

 	$emailsearch = "select * from registration where email = '$email'";
 	$query = mysqli_query($con , $emailsearch);
 	$emailcount = mysqli_num_rows($query);

 	if ($emailcount) {
 		$email_pass = mysqli_fetch_assoc($query);
 		$dbpassword = $email_pass['password'];
 		$_SESSION['name'] = $email_pass['name'];
 		$passworddecode = password_verify($password , $dbpassword);
 		if ($passworddecode) {
 			if (isset($_POST['rememberme'])) {
 				setcookie('emailcookie' , $email , time()+86400);
				setcookie('passwordcookie' , $password , time()+86400);
				echo "login successful";
				header('location:index.php');
 			}else{
				header('location:index.php');
			}

		}else{
			echo"invalid password";
		}
	}
		else{
	      ?>
			<script>
					alert('invalid email');
					</script>  
					<?php
			
		}
 	}


 	?>

 	<main>
        <div class="container">
            <div class="header">
                <h2>LOGIN</h2>
            </div>
            <form class="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="form" method="POST">
                
                
                <div class="form-control">
                    <label>Email</label>
                    <input type="Email" name="email" value="<?php if(isset($_COOKIE['emailcookie']))
                    { echo $_COOKIE['emailcookie'];}  ?>" placeholder="Enter your Email" required>
                    </div>
            
                <div class="form-control">
                    <label>Password</label>
                    <input type="Password" name="password" value="<?php if(isset($_COOKIE['passwordcookie']))
                    { echo $_COOKIE['passwordcookie'];}  ?>" placeholder="Enter your Password" required>
                   
        
                </div>

                <div class="form-group p-10">
                    <input type="checkbox" name="rememberme" style="margin-right: 5px;" >Remember me
                    
                </div>
                
                <div>
                <input type="submit" value="Login Now" class="btn" name="submit">
            </div>

                <div style="text-align:center; padding: 15px"; class="form-control">
                    <button style="text-align:center; border: none; border-radius: 100px; background: #DB4437; padding:10px;">
                        <div style="display: flex;">

                        <img width="40px" src="images/google.png"><a style="color: #fff; padding: 10px; text-decoration:none; font-size: 20px;" href="google.php">Login with google account</a></div></button>
                    </div>


                    <div class="form-group p-10">
                <p style="text-align: center; padding: 0px;">Not have an account? <a style="text-decoration: none;" href="cregistration.php">Register</a></p></div>
            </form>
        </div>
    </main>

 
 </body>
 </html>