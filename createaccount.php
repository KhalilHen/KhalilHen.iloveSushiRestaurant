<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    


<form name='inlogForm' action='login.php' method='POST'> 
    <input name='username' type="username" placeholder = "username">
    <input name='password' type="password" placeholder = "password">
    <input name="email" type="email"  placeholder ="email"> 
    <input name="phonenumber" type="number" placeholder="phonenumber">
        <button type='submit'>submit</button>
</form>

<?php


require 'conn.php';
$data = [
    'username' => '$username',
    'password' => '$password',
    'email' => '$email',
    'phonenumber' => '$phonenumber',
];
$sql = "INSERT INTO users (username, password, email, phonenumber) VALUES (:username, :password, :email,  :phonenumber)";
$stmt= $conn->prepare($sql);
$stmt->execute($data);


?>
</body>
</html>