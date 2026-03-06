<?php
session_start();
if(!isset($_SESSION['Email'])){
    header("Location: Login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stellar Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --stellar-main: #6366f1;
            --stellar-alt: #8b5cf6;
            --space-black: #020617;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
            --text-bright: #f8fafc;
            --text-muted: #94a3b8;
        }

        /* Animated Background */
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: linear-gradient(-45deg, #0f172a, #1e1b4b, #312e81, #0f172a);
            background-size: 400% 400%;
            animation: gradientMove 12s ease infinite;
            margin: 0;
            display: flex;
            height: 100vh;
            color: var(--text-bright);
            overflow: hidden;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Sidebar */
        nav {
            width: 260px;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(15px);
            border-right: 1px solid var(--glass-border);
            display: flex;
            flex-direction: column;
            padding: 30px 20px;
            animation: slideInLeft 0.8s ease;
        }

        @keyframes slideInLeft {
            from { transform: translateX(-100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .logo {
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 50px;
            background: linear-gradient(to right, #fff, var(--stellar-main));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            animation: fadeIn 1.5s ease;
        }

        .nav-link {
            padding: 12px 16px;
            color: var(--text-muted);
            text-decoration: none;
            border-radius: 12px;
            margin-bottom: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-link:hover, .nav-link.active {
            background: var(--glass-bg);
            color: white;
            border: 1px solid var(--glass-border);
            box-shadow: 0 0 15px rgba(99, 102, 241, 0.5);
            transform: translateX(5px);
        }

        main {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
            animation: fadeInUp 1s ease;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .welcome-msg h1 {
            margin: 0;
            font-size: 28px;
        }

        .welcome-msg p {
            color: var(--text-muted);
            margin: 5px 0 0 0;
        }

        /* Grid */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
        }

        /* Animated Cards */
        .stat-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 25px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: "";
            position: absolute;
            width: 150%;
            height: 150%;
            background: radial-gradient(circle, rgba(99,102,241,0.3), transparent);
            top: -50%;
            left: -50%;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .stat-card:hover::before {
            opacity: 1;
        }

        .stat-card:hover {
            transform: translateY(-8px) scale(1.02);
            border-color: var(--stellar-main);
            box-shadow: 0 0 25px rgba(99,102,241,0.4);
        }

        .stat-card h3 {
            margin: 0;
            font-size: 14px;
            color: var(--text-muted);
            text-transform: uppercase;
        }

        .stat-card .value {
            font-size: 32px;
            font-weight: 700;
            margin: 10px 0;
            display: block;
            animation: fadeIn 2s ease;
        }

        .status-pill {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            background: rgba(16, 185, 129, 0.15);
            color: #10b981;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(16,185,129,0.4); }
            70% { box-shadow: 0 0 0 10px rgba(16,185,129,0); }
            100% { box-shadow: 0 0 0 0 rgba(16,185,129,0); }
        }

        .logout-btn {
            margin-top: auto;
            color: #ef4444;
            text-decoration: none;
            font-size: 14px;
            padding: 12px 16px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .logout-btn:hover {
            background: rgba(239, 68, 68, 0.15);
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>

<body>

<nav>
    <div class="logo">SRC</div>

    <a href="#" class="nav-link active">Dashboard</a>
    <a href="#" class="nav-link">Profile</a>
    <a href="#" class="nav-link">Settings</a>

    <a href="Login.php" class="logout-btn">Logout</a>
</nav>

<main>
    <header>
        <div class="welcome-msg">
            <h1>Welcome, <?php echo $_SESSION['FirstName']; ?> 👋</h1>
            <p><?php echo $_SESSION['Email']; ?> | Login Successfully</p>
        </div>
    </header>

    <div class="grid">
        <div class="stat-card">
            <h3>Account Status</h3>
            <span class="value">Active</span>
            <span class="status-pill">Online</span>
        </div>
    </div>
</main>

<!-- Optional Floating Particles -->
<script>
for (let i = 0; i < 25; i++) {
    let star = document.createElement("div");
    star.style.position = "fixed";
    star.style.width = "3px";
    star.style.height = "3px";
    star.style.background = "white";
    star.style.borderRadius = "50%";
    star.style.top = Math.random() * 100 + "vh";
    star.style.left = Math.random() * 100 + "vw";
    star.style.opacity = Math.random();
    star.style.animation = `twinkle ${2 + Math.random() * 3}s infinite`;
    document.body.appendChild(star);
}
</script>

<style>
@keyframes twinkle {
    0%,100% { opacity: 0.2; }
    50% { opacity: 1; }
}
</style>

</body>
</html>