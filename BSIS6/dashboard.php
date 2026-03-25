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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .table img {
            border-radius: 5px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Product Manager</a>
        <div class="navbar-nav ms-auto">
            <span class="navbar-text me-3">Welcome, <?php echo $_SESSION['FirstName']; ?> (<?php echo $_SESSION['Email']; ?>)</span>
            <a href="change_password.php" class="btn btn-outline-light me-2">Change Password</a>
            <a href="login.php" class="btn btn-outline-light">Logout</a>
        </div>
    </div>
</nav>

<div class="container">

<div class="container mt-5">

<div class="card shadow p-4 mb-4">

<h4 class="mb-3">Add New Product</h4>

<form action="save_picture.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
        <label class="form-label">Product</label>
        <input type="text" name="Product" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Picture</label>
        <input type="file" name="Picture" class="form-control" required>
    </div>

    <button type="submit" name="save" class="btn btn-primary">Save</button>

</form>

<form method="GET" class="mt-3">
    <div class="input-group mb-3">
        <input type="text" name="search" placeholder="Search product..." class="form-control">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>

</div>
    </form>
<br>

<!-- TABLE -->
<div class="card shadow p-4">

<h4 class="mb-3">CRUD Operation</h4>

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

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>