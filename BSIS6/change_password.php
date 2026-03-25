<?php
session_start();
require('./connection.php');

if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <h2>Change Password</h2>
    <form method="POST" action="update_password.php">
        
    <label>Old Password:</label><br>
    <input type="password" name="old_password" required><br><br>    

    <label>New Password:</label><br>
    <input type="password" name="new_password" required><br><br>

    <label>Confirm New Password:</label><br>
    <input type="password" name="confirm_password" required><br><br>
    <button type="submit" name="change">Change Password</button>
    </form>
</body>
</html>