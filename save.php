<?php
require('./connection.php');

$fullname = $_POST['FN'];
$Address  = $_POST['AD'];
$Birthday = $_POST['Birthday'];
$Email    = $_POST['Email'];
$Password = $_POST['PS'];

$query = "INSERT INTO bsistbl3b 
          VALUES ('$fullname', '$Address', '$Birthday', '$Email', '$Password')";

$sqlCreate = mysqli_query($connection, $query);

echo '<script>alert("Successfully Created!")</script>';
?>
