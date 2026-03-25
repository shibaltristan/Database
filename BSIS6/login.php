<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>

<body>

<h2>Login</h2>

<form action="check_login.php" method="post">

<label>Email Address:</label><br>
<input type="text" name="Email" required><br><br>

<label>Password:</label><br>
<input type="password" name="Password" required><br><br>

<button type="submit" name="login">Login</button>

</form>

<br>

<p>Don't have an account? <a href="index.php">Create Account</a></p>

</body>
</html>