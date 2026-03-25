<?php
require('./connection.php');

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $product = $_POST['product'];

    $get = mysqli_query($connection, "SELECT Picture FROM crubtbl5 WHERE UserID='$id'");
    $data = mysqli_fetch_assoc($get);

    $old_picture = $data['Picture'];


if($_FILES['Picture']['name'] != "") {
    $new_picture = $_FILES['Picture']['name'];
    $tempname = $_FILES['Picture']['tmp_name'];
    $folder = "picture/" . $new_picture;

    move_uploaded_file($tempname, $folder);

$oldpath = "picture/" . $old_picture;

if (file_exists($oldpath)) {
    unlink($oldpath);
}

$query = "UPDATE crubtbl5
          SET Product='$product', Picture='$new_picture' 
          WHERE UserID='$id'";

} else {
    $query = "UPDATE crubtbl5
              SET Product='$product' 
              WHERE UserID='$id'";
}

mysqli_query($connection, $query);

header("location:dashboard.php");
exit();
}   
?>