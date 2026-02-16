<?php
require('./connection.php');

if (isset($_POST['save'])){
    $firstname = $_POST['FN'];
    $middlename = $_POST['MN'];
    $lastname = $_POST['LN'];
    $address = $_POST['AD'];
    $email = $_POST['Email'];
    $password = $_POST['password'];

    $queryCreate = "INSERT INTO bsistbl5 
                    VALUES (null, '$firstname', '$middlename', '$lastname', '$address', '$email')";
    $sqlCreate = mysqli_query($connection, $queryCreate);

    if ($sqlCreate) {
        echo '<script>alert("Successfully Created!")</script>';
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
