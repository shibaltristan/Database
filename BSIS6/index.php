<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>REGISTRATION</h1>
    <form action="save.php" method="post">
        <input type="text" name="FN" placeholder="Enter Your Firstname" required />
        <input type="text" name="MN" placeholder="Enter Your MiddleName" required />
        <input type="text" name="LN" placeholder="Enter Your LastName" required />
        <input type="text" name="AD" placeholder="Address" required />
        <input type="email" name="Email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit" name="save">Create</button>
    </form>
</body>
</html>
