<?php 

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginquery</title>
</head>
<body>
    
    
  <?php

  require 'conn.php';


$stmt = $conn->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
$stmt->execute(['username' => $username, 'password' =>  $password,]); 
$user = $stmt->fetch(); 


if($user) {
  session_start();
  $_SESSION['user_id'] = $user['username'];
  $_SESSION['user_password'] = $user['password'];
  header('Location: dashboard.php');
  exit;
}
  // else {
  //   header('location: orderpage.php');


  // }
  ?>

</body>
</html>