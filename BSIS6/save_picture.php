<?php
require('connection.php');
if (isset($_POST['save'])) {
    $product = $_POST['Product'];

    $picture = $_FILES['Picture']['name'];
    $tempname = $_FILES['Picture']['tmp_name'];
    $folder = "picture/" . $picture;

    move_uploaded_file($tempname, $folder);

    $query = "INSERT INTO crubtbl5 (Product, Picture)
               VALUES ('$product', '$picture')";
    
    mysqli_query($connection, $query);

    header("Location: dashboard.php");
    exit();
}
?>