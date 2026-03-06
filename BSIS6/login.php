<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Stellar Portal - Login</title>

<style>
:root {
    --stellar-core: #6366f1;
    --stellar-glow: #8b5cf6;
    --space-dark: #0f172a;
    --glass-bg: rgba(255, 255, 255, 0.05);
    --text-main: #f8fafc;
    --text-dim: #94a3b8;
}

/* Animated Gradient Background */
body {
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    background: linear-gradient(-45deg, #1e1b4b, #0f172a, #312e81, #020617);
    background-size: 400% 400%;
    animation: gradientMove 12s ease infinite;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    color: var(--text-main);
    overflow: hidden;
    position: relative;
}

@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Ambient Glow */
body::before {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    background: var(--stellar-core);
    filter: blur(120px);
    opacity: 0.15;
    top: 10%;
    left: 10%;
    z-index: -1;
}

/* Login Card */
.login-card {
    background: var(--glass-bg);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    padding: 48px;
    border-radius: 24px;
    box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
    width: 100%;
    max-width: 400px;
    border: 1px solid rgba(255,255,255,0.1);
    animation: slideUp 0.6s ease-out;
    position: relative;
}

@keyframes slideUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Heading */
h1 {
    text-align: center;
    font-size: 28px;
    font-weight: 800;
    margin-bottom: 8px;
    background: linear-gradient(to right, #fff, var(--stellar-glow));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: fadeIn 1s ease;
}

.subtitle {
    text-align: center;
    font-size: 14px;
    color: var(--text-dim);
    margin-bottom: 32px;
}

/* Input Styling */
.input-group {
    margin-bottom: 20px;
    position: relative;
}

input {
    width: 100%;
    padding: 14px 16px;
    background: rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    color: white;
    font-size: 15px;
    box-sizing: border-box;
    transition: all 0.3s ease;
}

input:focus {
    outline: none;
    border-color: var(--stellar-core);
    background: rgba(0, 0, 0, 0.4);
    box-shadow: 0 0 15px rgba(99,102,241,0.3);
}

/* Stellar Button */
.btn-login {
    background: linear-gradient(135deg, var(--stellar-core), var(--stellar-glow));
    color: white;
    padding: 14px;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s;
    margin-top: 10px;
    width: 100%;
}

.btn-login:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px -5px var(--stellar-core);
}

.btn-login:active {
    transform: translateY(0);
}

/* Footer */
.register-container {
    text-align: center;
    margin-top: 32px;
    padding-top: 24px;
    border-top: 1px solid rgba(255,255,255,0.05);
    font-size: 14px;
    color: var(--text-dim);
}

.btn-register {
    color: var(--stellar-glow);
    text-decoration: none;
    font-weight: 600;
    margin-left: 5px;
    transition: color 0.2s;
}

.btn-register:hover {
    color: #fff;
    text-decoration: underline;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
</style>
</head>
<body>

<div class="login-card">
    <h1>LOGIN</h1>
    <p class="subtitle">Enter your credentials to login</p>

    <form action="check_login.php" method="post">
        <div class="input-group">
            <input type="text" name="Email" placeholder="Email Address" required>
        </div>
        <div class="input-group">
            <input type="password" name="Password" placeholder="Password" required>
        </div>

        <button type="submit" name="login" class="btn-login">Login</button>
    </form>

    <div class="register-container">
        <span>Don't have an account?</span>
        <a href="index.php" class="btn-register">Create Account</a>
    </div>
</div>

</body>
</html>