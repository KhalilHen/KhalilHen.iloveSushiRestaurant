<?php


require 'conn.php';





//1. haal data op van product wat geupdate moet worden
//2. zet data in formulier velden
// 3. stuur nieuwe data naar update query


?>

<?php

// Hier checkt ie eerst of ie  iets kan updaten, anders gaat die naar de volgende onderdeel
// En kijkt ie of een id/table mee kreeg van vorige pagina
if (isset($_POST['submit'])) {


    $id = $_POST['id'];

    $product = $_POST['product'];
    $product_info = $_POST['product_info'];
    $img = $_POST['img'];
    $price = $_POST['price'];
    $products = [
        'product' => $product,
        'product_info' => $product_info,
        'img' => $img,
        'price'=> $price,
        'id' => $id,
    ];


    $sql = "UPDATE products SET product=:product, product_info=:product_info, img=:img, price=:price WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute($products);


    header('location: dashboard.php');
}

// Hier kijkt ie of ie een id/table  mee heeft gekregen van de vorige pagina

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // if (isset($_GET['id'])) {
    $stmt = $conn->prepare("SELECT *  FROM products WHERE id=:id");
    $stmt->execute(['id' => $id]);
    $products = $stmt->fetch(PDO::FETCH_OBJ);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit</title>
</head>

<body>
    <!-- Hier veranderd ie de form met de meegegeven id van de vorige onderdeel  -->
    <form name='updateform' action='edit.php' method='POST'>
        <input type="hidden" name='id' value="<?= $id; ?>" />
        <input name='product' type="text" placeholder="product" value=" <?= $products->product; ?>" />
        <input name='product_info' type="text" placeholder="product_info" value="<?= $products->product_info; ?>">
        <input name='img' type="img" placeholder="img" value="<?= $products->img; ?>">
        <input name='price' type="number" placeholder="price" value="<?= $products->img; ?>">
        <button name='submit' type='submit'>submit</button>
    </form>
</body>

</html>
<?php



?>