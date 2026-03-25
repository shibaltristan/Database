<?php
require('connection.php');
session_start();
if (isset($_POST['save'])) {
    $product = $_POST['Product'];

    $picture = $_FILES['Picture']['name'];
    $tempname = $_FILES['Picture']['tmp_name'];
    $folder = "picture/" . $picture;

    move_uploaded_file($tempname, $folder);

    $query = "INSERT INTO crubtbl5 (UserID, Product, Picture)
               VALUES ('{$_SESSION['UserID']}', '$product', '$picture')";
    
    mysqli_query($connection, $query);

    header("Location: dashboard.php");
    exit();
}
?>