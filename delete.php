<?php



require 'conn.php';


if (isset($_GET['id']))
    ; {


    $id = $_GET['id'];



}
$sql = 'DELETE FROM products WHERE id = :id';
$stmt = $conn->prepare($sql);



$stmt->execute(['id' => $id]);

header('location: dashboard.php');