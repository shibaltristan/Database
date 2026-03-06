<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Stellar - Account Registration</title>

<style>
:root {
    --stellar-primary: #6366f1;
    --stellar-glow: #a855f7;
    --space-bg: #020617;
    --glass-white: rgba(255, 255, 255, 0.07);
    --text-main: #f8fafc;
    --text-dim: #94a3b8;
}

/* Animated Gradient Background */
body {
    font-family: 'Inter', -apple-system, sans-serif;
    background: linear-gradient(-45deg, #1e1b4b, #0f172a, #312e81, #020617);
    background-size: 400% 400%;
    animation: gradientMove 12s ease infinite;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    color: var(--text-main);
    overflow-x: hidden;
    position: relative;
}

@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Ambient Glowing Nebula */
body::after {
    content: "";
    position: absolute;
    top: 20%;
    right: 15%;
    width: 350px;
    height: 350px;
    background: var(--stellar-glow);
    filter: blur(140px);
    opacity: 0.15;
    z-index: -1;
}

/* Card Container */
.card {
    background: var(--glass-white);
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    padding: 40px;
    border-radius: 24px;
    box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
    width: 100%;
    max-width: 440px;
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
    font-size: 26px;
    font-weight: 800;
    margin-bottom: 8px;
    letter-spacing: -0.5px;
    background: linear-gradient(to right, #fff, var(--stellar-primary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: fadeIn 1s ease;
}

/* Subtitle */
p.subtitle {
    text-align: center;
    font-size: 14px;
    color: var(--text-dim);
    margin-bottom: 30px;
}

/* Form Layout */
form {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

/* Name Inputs Side by Side */
.name-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

/* Inputs */
input {
    padding: 13px 16px;
    background: rgba(0, 0, 0, 0.25);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    color: white;
    font-size: 14px;
    transition: all 0.3s cubic-bezier(0.4,0,0.2,1);
}

input:focus {
    outline: none;
    border-color: var(--stellar-primary);
    background: rgba(0, 0, 0, 0.4);
    box-shadow: 0 0 15px rgba(99,102,241,0.2);
}

/* Register Button */
button {
    background: linear-gradient(135deg, var(--stellar-primary), var(--stellar-glow));
    color: white;
    padding: 14px;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    margin-top: 15px;
    box-shadow: 0 4px 15px rgba(99,102,241,0.3);
}

button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(99,102,241,0.4);
    filter: brightness(1.1);
}

/* Footer Text */
.footer-text {
    text-align: center;
    margin-top: 25px;
    font-size: 14px;
    color: var(--text-dim);
    border-top: 1px solid rgba(255,255,255,0.05);
    padding-top: 20px;
}

.footer-text a {
    color: var(--stellar-primary);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.2s;
}

.footer-text a:hover {
    color: #fff;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
</style>
</head>

<body>
<div class="card">
    <h1>REGISTRATION</h1>
    <p class="subtitle">Join us by creating your account!</p>

    <form action="save.php" method="post">
        <div class="name-row">
            <input type="text" name="FN" placeholder="First Name" required />
            <input type="text" name="LN" placeholder="Last Name" required />
        </div>
        <input type="text" name="MN" placeholder="Middle Name (Optional)" />
        <input type="email" name="Email" placeholder="Email Address" required />
        <input type="password" name="password" placeholder="Choose Password" required />

        <button type="submit" name="save">Register</button>
    </form>

    <div class="footer-text">
        Already registered? <a href="login.php">Sign in here</a>
    </div>
</div>
</body>
</html>