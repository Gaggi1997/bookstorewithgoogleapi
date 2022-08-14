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
  width: 70%;
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
</style>
</head>
<body>
  <div class="header">
    <nav><a href="admin.php">Back to Admin</a></nav>
</div>
  

<h1>USER QUERIES</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
    <th>Delete</th>
  </tr>
  <?php
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
include '../connection.php';
$selectquery = "select * from form";
$query = mysqli_query($con,$selectquery);
while ($arrydata = mysqli_fetch_assoc($query)) {
  ?>
  <tr>
    <td><?php echo $arrydata['id'];  ?></td>
    <td><?php echo $arrydata['name'];  ?></td>
    <td><?php echo $arrydata['email'];  ?></td>
    <td><?php echo $arrydata['phone'];  ?></td>
    <td><?php echo $arrydata['message'];  ?></td>
    <td><a style="text-decoration: none; color: red"; href="deletequery.php?id= <?php echo $arrydata['id'];  ?>">Delete</a></td>
  </tr>
  <?php
}
?>
</table>

</body>
</html>
