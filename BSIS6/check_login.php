<?php
  session_start();

require('./connection.php');

if (isset($_POST['login'])){

    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $query = "SELECT * FROM bsistbl5
             WHERE Email='$Email' AND Password='$Password'";
    
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0){

       $row = mysqli_fetch_assoc($result);
       // SAVE USER DATA SA SESSION
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['FirstName'] = $row['FirstName'];
        
        echo "<script>alert('Login Successfully♥');
              window.location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Invalid Email or Password!');
              window.location.href='login.php';</script>";
    }
}
?>