<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    


<form name='inlogForm' action='createaccount.php' method='POST'> 
    <input name='username' type="text" placeholder = "username">
    <input name='password' type="password" placeholder = "password">
    <input name="email" type="email"  placeholder ="email"> 
    <input name="phonenumber" type="number" placeholder="phonenumber">
    <button name='submit' type='submit'>submit</button>
</form>

<?php

if(isset($_POST['submit'])) {
    require 'conn.php';

    $gebruikersnaam = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $data = [
        'user' => $gebruikersnaam,
        'wachtwoord' => $password,
        'email' => $email,
        'phonenumber' => $phonenumber,
    ];

    
    $sql = "INSERT INTO users (username, password, email, phonenumber) VALUES (:user, :wachtwoord, :email,  :phonenumber)";
    $stmt= $conn->prepare($sql);
    $stmt->execute($data);
    header('location:login.php');
}
else{

    
}


?>
</body>
</html>