<?php
require('connection.php');

$id = $_GET['id'];

$get = mysqli_query($connection, "SELECT Picture FROM crubtbl5 WHERE id='$id'");
$data = mysqli_fetch_assoc($get);

$picture = $data['Picture'];
$filepath = "picture/" . $picture;

if(file_exists($filepath)){
    unlink($filepath);
}

mysqli_query($connection, "DELETE FROM crubtbl5 WHERE id='$id'");

header("Location: dashboard.php");
exit();
?>