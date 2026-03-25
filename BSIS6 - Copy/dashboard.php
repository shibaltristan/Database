<?php
session_start();
if(!isset($_SESSION['Email'])){
    header("Location: Login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<a href="change_password.php">Change Password</a>
<h2>Dashboard</h2>

<p>
Welcome, <?php echo $_SESSION['FirstName']; ?>
</p>

<p>
Email: <?php echo $_SESSION['Email']; ?>
</p>

<div class="container mt-5">

<!-- FORM -->
<form action="save_picture.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
        <label> Product </label>
        <input type="text" name="Product" class="form-control" required>
    </div>

    <div class="mb-3">
        <label> Picture </label>
        <input type="file" name="Picture" class="form-control" required>
    </div>

    <button type="submit" name="save" class="btn btn-primary">
        Save
    </button>

</form>
<form method="GET" class="mb-3">
        <input type="text" name="search" placeholder="Search product..." class="form-control">
        <br><br>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
<br>

<!-- TABLE -->
<div class="card shadow p-4">

<h4>CRUD OPERATION</h4>

<table class="table table-bordered mt-3">

<thead class="table-dark">
<tr>
<th>ID</th>
<th>Product</th>
<th>Picture</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<?php

require('./connection.php');

//$result = mysqli_query($connection, "SELECT * FROM crubtbl5");
if(isset ($_GET['search'])) {
    $search = $_GET['search'];
    $query = "SELECT * FROM crubtbl5 WHERE UserID = '{$_SESSION['UserID']}' AND Product LIKE '%$search%'";
} else {
    $query = "SELECT * FROM crubtbl5 WHERE UserID = '{$_SESSION['UserID']}'";
}

$result = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($result)) {
?>


<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['Product']; ?></td>

<td>
<img src="picture/<?php echo $row['Picture']; ?>"
width="80" height="80"
style="object-fit:cover;">
</td>

<td>
    <a href="delete.php?id=<?php echo $row['id']; ?>"
    onclick="return confirm('Are you sure you want to delete this?')"
    class="btn btn-danger">Delete</a>

    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
</td>

</tr>

<?php
}
?>

</tbody>
</table>

<button onclick="location.href='login.php'">Logout</button>

</div>
</div>

</body>
</html>