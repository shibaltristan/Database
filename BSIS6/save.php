<?php
require('./connection.php');

if (isset($_POST['save'])) {

    $firstname = $_POST['FN'];
    $middlename = $_POST['MN'];
    $lastname = $_POST['LN'];
    $email = $_POST['Email'];
    $password = $_POST['password'];

    $queryCreate = "INSERT INTO bsistbl5 
                    VALUES (null, '$firstname', '$middlename', '$lastname','$email','$password')";
    $sqlCreate = mysqli_query($connection, $queryCreate);

    if ($sqlCreate) {
        echo "<script>alert('Create Successfully');
              window.location.href='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>