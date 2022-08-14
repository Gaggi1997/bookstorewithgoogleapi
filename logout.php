<?php   

session_start();
session_destroy();
setcookie('emailcookie' , '' , time()-84600);
setcookie('passwordcookie' , '' , time()-84600);
include('config.php');
$google_client->revokeToken();
header('location:login.php');



?>