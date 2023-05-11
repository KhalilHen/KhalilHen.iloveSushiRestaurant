<?php 
require 'conn.php'; 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="CSS/homepage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>login</title>
</head>

<body>
    <div class="headercontainer">



        <a href="index.php"><img class="Logo"
                src="https://ilovesushi.nl/app/themes/lyfter-child/img/base/brand-logo.svg" alt="Logo" />
        </a>



        <a href="">tel: 024-2120123</a>

        <a href="contact"></a>


        <span> I Love Sushi Nijmegen - Molenweg 66542 PW Nijmegen</span>
        <a href="createaccount.php">Create account</a>
        <a href="login.php">Login</a>


    </div>

    </header>
<div class="columform">
    <form name='inlogForm' action='login_query.php' method='POST'>
        <input name='username' type="username" placeholder="username">
        <input name='password' type="password" placeholder="password">
        <button type='submit'>submit</button>   
    </form>
</div>
</body>

</html>