<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}
</style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h2 class="text-center mb-4">Account Registration</h2>

<form action="save.php" method="post">

<div class="mb-3">
    <label class="form-label">First Name:</label>
    <input type="text" name="FN" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Last Name:</label>
    <input type="text" name="LN" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Middle Name:</label>
    <input type="text" name="MN" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Email Address:</label>
    <input type="email" name="Email" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Password:</label>
    <input type="password" name="password" class="form-control" required>
</div>

<button type="submit" name="save" class="btn btn-primary w-100">Register</button>

</form>

<div class="text-center mt-3">
    <p>Already registered? <a href="login.php" class="text-decoration-none">Sign in here</a></p>
</div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>