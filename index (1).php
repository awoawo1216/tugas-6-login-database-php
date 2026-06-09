<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: http://localhost/modul6/login.php");
    exit();
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: http://localhost/modul6/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .dashboard-container {
            background-color: #fff;
            padding: 40px 35px;
            width: 420px;
            border-radius: 6px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.15);
            text-align: center;
        }

        .dashboard-container h2 {
            color: #6a0dad;
            margin-bottom: 12px;
            font-size: 22px;
        }

        .dashboard-container p {
            color: #444;
            font-size: 15px;
            margin-bottom: 28px;
        }

        .dashboard-container p span {
            font-weight: bold;
            color: #6a0dad;
        }

        .btn-logout {
            padding: 11px 30px;
            background-color: #e53935;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            letter-spacing: 1px;
            transition: background-color 0.2s;
        }

        .btn-logout:hover {
            background-color: #b71c1c;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Dashboard</h2>
        <p>Selamat datang, <span><?php echo htmlspecialchars($_SESSION["admin"]); ?></span>!</p>
        <form method="POST">
            <button type="submit" name="logout" class="btn-logout">LOGOUT</button>
        </form>
    </div>
</body>
</html>
