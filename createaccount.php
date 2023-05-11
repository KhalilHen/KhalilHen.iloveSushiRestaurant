<?php
session_start();


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="CSS/homepage.css">
</head>
<title>Create</title>
</head>

<body>
    <link rel="stylesheet" href="CSS/homepage.css">
    <header>
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


    <div class="Form">
        <div class="columform">
            <div class="form">
                <form name='inlogForm' action='createaccount.php' method='POST'>

                    <input name='username' type="text" placeholder="username">
                    <input name='password' type="password" placeholder="password">
                    <input name="email" type="email" placeholder="email">
                    <input name="phonenumber" type="number" placeholder="phonenumber">
                    <button name='submit' type='submit'>submit</button>
                </form>
            </div>
        </div>
    </div> <?php

    if (isset($_POST['submit'])) {
        require 'conn.php';

        $gebruikersnaam = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $data = [
            'username' => $gebruikersnaam,
            'wachtwoord' => $password,
            'email' => $email,
            'phonenumber' => $phonenumber,
        ];


        $sql = "INSERT INTO users (username, password, email, phonenumber) VALUES (:username, :wachtwoord, :email,  :phonenumber)";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        header('location:login.php');
    } else {


    }


    ?>
</body>

</html>