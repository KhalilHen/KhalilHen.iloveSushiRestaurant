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


  $username = $_POST['username'];
  $password = $_POST['password'];

  $user = [
    'username' => $username,
    'password' => $password,
    // 'roll' => $roll, 
  ];



  $stmt = $conn->prepare("SELECT * FROM users WHERE username=:username AND password=:password  AND roll=:roll");
  $stmt->execute(['username' => $username, 'password' => $password, 'roll' => 12,]);

  $user = $stmt->fetch();


  if ($user) {

    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['roll'] = $user['roll'];
    if($_SESSION['roll'] == 12){
      header('location: dashboard.php');
    




    
    
     } else {
  
    header('location: createaccount.php');
   

  }

  }

  ?>

</body>

</html>