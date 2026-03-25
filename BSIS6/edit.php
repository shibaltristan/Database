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
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h1 class="text-center mb-4">Edit Product</h1>
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                    <div class="mb-3">
                        <label class="form-label">Product:</label>
                        <input type="text" name="product" value="<?php echo $row['Product']; ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Current Picture:</label><br>
                        <img src="picture/<?php echo $row['Picture']; ?>" width="100" class="img-thumbnail">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">New Picture</label>
                        <input type="file" name="Picture" class="form-control">
                    </div>

                    <button type="submit" name="update" class="btn btn-primary w-100">Update</button>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        
</body>
        
</html>