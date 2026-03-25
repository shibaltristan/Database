<?php
require('./connection.php');

$id = $_GET['id'];

$result = mysqli_query($connection, "SELECT * FROM crubtbl5 WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label1>Product:</label1>
        <input type="text" name="product" value="<?php echo $row['Product']; ?>" required>

        <br><br>

        <label>Current Picture:</label><br>
        <img src="picture/<?php echo $row['Picture']; ?>" width="100">

        <br><br>

        <label>New Picture</label>
        <input type="file" name="Picture">

        <br><br>

        <button type="submit" name="update">Update</button>

    </form>
</body>
        
</html>