<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>

<body>

<h2>Account Registration</h2>

<form action="save.php" method="post">

<label>First Name:</label><br>
<input type="text" name="FN" required><br><br>

<label>Last Name:</label><br>
<input type="text" name="LN" required><br><br>

<label>Middle Name:</label><br>
<input type="text" name="MN"><br><br>

<label>Email Address:</label><br>
<input type="email" name="Email" required><br><br>

<label>Password:</label><br>
<input type="password" name="password" required><br><br>

<button type="submit" name="save">Register</button>

</form>

<br>

<p>Already registered? <a href="login.php">Sign in here</a></p>

</body>
</html>