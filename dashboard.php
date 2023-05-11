<?php


session_start();
require 'conn.php';

if (!isset($_SESSION['user_id'])) {
    header('location: index.php');

}




// require 'index.php';
echo '<div class="tekstkleur">';
echo 'hi welcome' . ($_SESSION['username']);

$_SESSION["test"] = 'username';

echo '$test';
echo '</div>';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <header>
        <div class="headercontainer">
            <a href="index.php"><img class="Logo"
                    src="https://ilovesushi.nl/app/themes/lyfter-child/img/base/brand-logo.svg" alt="Logo" />
            </a>
            <a href="dashboard.php">Dashboard</a>
            <a href="product_add.php">Product add</a>
        </div>
    </header>






    <?php



    require_once('conn.php');
    $stmt = $conn->prepare("SELECT *  FROM products");
    $stmt->execute();
    $products = $stmt->fetchAll();



    require 'conn.php';
    echo '<div class="rowcontainer">';
    foreach ($products as $row) {


        echo ' <div class="blok">';

        echo ' <div class= "img">';

        //   hier moet de img gepakt worden uit database
        echo $row['img'];
        echo ' </div>';
        echo ' <div class="actie">';

        // hier moet de product uit database gepakt worden 
        echo '<div class="product">';
        echo $row['product'];
        echo '</div>';
        // hier moet de product info uit database
        echo '<div class="actiedesc">';
        echo $row['product_info'];
        echo '<div class="delete">';

        echo "<a href ='edit.php?id=" . $row['id'] . "'>Edit</a>";
        echo "<a href='delete.php?id=" . $row['id'] . "'>Delete </a>";

        echo '</div>';
        echo ' </div>';
        echo '  </div>';
        echo '<div class="price">';

        //  hier moet de price gepakt worden uit database
        echo ' <div class="pricerow">';
        echo '€' . $row['price'];


        echo '<div class="button"></div>';
        echo '<button type="button">+</button>';
        echo ' </div>';

        echo '</div>';
        echo '</div>';
    }

    ?>



</html>
</body>