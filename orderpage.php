<?php

require_once('conn.php');
$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orderpage</title>
    <link rel="stylesheet" href="CSS/orderpage.css">
</head>

<body>
    <header>

        <div class="headercontainer">
            <a href="index.php">
                <img class=" Logo" src="https://ilovesushi.nl/app/themes/lyfter-child/img/base/brand-logo.svg"
                    alt="Logo" />

            </a>
            <a href="tel: 024-2120123"></a>

            <a href="contact"></a>

            <span> 024-2120123 </span>
            <span> I Love Sushi Nijmegen - Molenweg 66542 PW Nijmegen</span>


            <?php



      foreach ($products as $row) {

        echo '<div class="OrderContainer">';
        // echo $row['name']."<br />\n";
      


        echo '</div>';
      }

      ?>

    </header>




    <div class="Redcontainer">
        <div class="redheader">
            <p>Informatie</p><span>Bestellen</span>
        </div>
    </div>


</body>

</html>