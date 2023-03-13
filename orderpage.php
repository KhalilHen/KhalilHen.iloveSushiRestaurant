<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orderpage</title>
  <link rel="stylesheet" href="/Webapplicaties 1/CSS/orderpage.css">
</head>
<body>
<header>
    
<div class="headercontainer">

<img class="Logo" src="https://ilovesushi.nl/app/themes/lyfter-child/img/base/brand-logo.svg" alt="Logo"/>

<a href ="tel: 024-2120123"></a>

<a href="contact"></a>

<span> 024-2120123 </span>
<span> I Love Sushi Nijmegen - Molenweg 66542 PW Nijmegen</span>


<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email    = $_POST['email'];
$number = $_POST['number'];

echo $username . ' ' . $password.''.$email.''$number;



?>  

</header>





<div class="redheader">
<p>Informatie</p><span>Bestellen</span>
</div>


</body>
</html>