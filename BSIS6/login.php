<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
                <h2 class="text-center mb-4">Login</h2>

<form action="check_login.php" method="post">

<div class="mb-3">
    <label class="form-label">Email Address:</label>
    <input type="text" name="Email" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Password:</label>
    <input type="password" name="Password" class="form-control" required>
</div>

<button type="submit" name="login" class="btn btn-primary w-100">Login</button>

</form>

<div class="text-center mt-3">
    <p>Don't have an account? <a href="index.php" class="text-decoration-none">Create Account</a></p>
</div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>