<?php 
  
  session_start();
  require 'conn.php';

if(!isset($_SESSION['user_id'])) {
  header('location: index.php');

}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/product_page.css">
    <title>productadd</title>
</head>

<body>
    <header>


        <div class="headercontainer">



            <a href="index.php"><img class="Logo"
                    src="https://ilovesushi.nl/app/themes/lyfter-child/img/base/brand-logo.svg" alt="Logo" />
            </a>

            <a href="">Dashboard</a>

            <a href="contact">Product add</a>

        </div>
    </header>
    <div class="Container">
        <div class="box1">
            <div class="form">
                <form name="product_add" action="product_add.php" method="post">
                    <input name='product' type='text' placeholder='product'>
                    <input name='product_info' type='text' placeholder="product_info">
                    <input name='img' type='img' placeholder="img">
                    <button name='submit' type='submit'>Add</button>
                </form>
            </div>
        </div>
    </div>
    <?php
 if(isset($_POST['submit'])) {
    require 'conn.php';

    $product = $_POST['product'];
    $product_info = $_POST['product_info'];
    $img = $_POST['img'];
    $products = [
        'product' => $product,
        'product_info' => $product_info,
        'img' => $img,
    ];






$sql = "INSERT INTO products (product, product_info, img) VALUES (:product, :product_info, :img)";
    $stmt= $conn->prepare($sql);
    $stmt->execute($products);

}
?>
</body>

</html>