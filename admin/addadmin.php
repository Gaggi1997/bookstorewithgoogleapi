<?php 
session_start();
if (!isset($_SESSION['name'])) {
  header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<style>
  *{
    font-family: "Lucida Console", "Courier New", monospace;
    margin: 0;
    padding: 0;
  }
  body{
     background:#EAE2E2;
    }
  h1{
    text-align: center;
    color: #5D5B5B;
    padding: 30px;

  }
#customers {
  font-family: "Lucida Console", "Courier New", monospace;
  border-collapse: collapse;
  text-align: center;
  margin-left:auto;
  margin-right:auto;
}

#customers td, #customers th {
  border: 1px solid #5D5B5B;
  padding: 8px;
}


#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background:  rgba(0, 0, 0, 0.2) linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%);
  color: white;
}
.header{
  margin: 10px ;
  padding: 10px;
}
.header a{
  border: none;
  border-radius: 10px;
  background:  rgba(0, 0, 0, 0.2) linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%);
  padding: 10px;
  color: #fff;
  text-decoration: none;
}
.addadmin {
  text-align: center;
  padding: 15px;
}
.admin a{
  text-decoration: none;
}
</style>
</head>
<body>
  <div class="header">
    <nav><a href="admin.php">Back to Admin</a></nav>
</div>
  

<h1>Admins</h1>
<table id="customers">

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
    </tr>

  <?php   

   include '../connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $insertquery = "insert into adminregister(name , email , phone , password , cpassword) values('$name','$email','$phone','$password','$cpassword')";
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
}

$selectquery = "select * from adminregister";
$squery = mysqli_query($con , $selectquery);
while ($arrdata = mysqli_fetch_array($squery)) {
?>  
  <tbody>
    <tr>
      <td><?php echo $arrdata['id'];?></td>
      <td><?php echo $arrdata['name'];?></td>
      <td><?php echo $arrdata['email'];?></td>
      <td><?php echo $arrdata['phone'];?></td>
      <td><?php echo $arrdata['password'];?></td>
      <td><a style="text-decoration:none; color: red;" href="deleteadmin.php?id= <?php echo $arrdata['id'] ?>">Remove</a></td>
    </tr>
  </tbody>
<?php }  ?>
</table>
<div class="addadmin">
    <p><a style="text-decoration:none"; href="registeradmin.php">+ADD ADMIN</a></p>
  </div>
</body>
</html>