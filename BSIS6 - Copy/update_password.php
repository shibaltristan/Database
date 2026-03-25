<?php
session_start();
require('./connection.php');

if(isset($_POST['change']))

    $email = $_SESSION['Email'];

    $old = $_POST['old_password'];
    $new = $_POST['new_password']; 
    $confirm = $_POST['confirm_password'];

$result = mysqli_query($connection, "SELECT * FROM bsistbl5 WHERE Email='$email'");
$row = mysqli_fetch_assoc($result);

if($row['Password'] != $old) {
    echo "<script>
            alert('Old password is incorrect!');
            window.location='change_password.php';
          </script>";
          exit();
}

if($new != $confirm) {
    echo "<script>
            alert('New password and confirm password do not match!');
            window.location='change_password.php';
          </script>";
          exit();
} 

mysqli_query($connection, "UPDATE bsistbl5 SET Password='$new' WHERE Email='$email'");
echo "<script>
        alert('Password changed successfully!');
        window.location='dashboard.php';
      </script>";
   
?>