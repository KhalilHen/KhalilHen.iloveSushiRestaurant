<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
<!-- // select a particular user by id -->
<!-- $stmt = $pdo->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
$stmt->execute(['username' => $gebruikersnaam,  $password, $email, $phonenumber]); 
$user = $stmt->fetch();  -->


<form name='inlogForm' action='login_query.php' method='POST'> 
    <input name='username' type="username" placeholder = "username">
    <input name='password' type="password" placeholder = "password">
    <!-- <input name="email" type="email"  placeholder ="email">  -->
    <button type='submit'>submit</button>   
</form>

</body>
</html> 