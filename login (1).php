<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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

        .login-container {
            background-color: #fff;
            padding: 40px 35px;
            width: 400px;
            border-radius: 6px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.15);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
            font-size: 22px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: #222;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            color: #555;
            outline: none;
            transition: border-color 0.2s;
        }

        .form-group input:focus {
            border-color: #6a0dad;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #6a0dad;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
            margin-top: 8px;
            transition: background-color 0.2s;
        }

        .btn-login:hover {
            background-color: #530a9e;
        }

        .error-msg {
            color: red;
            font-size: 13px;
            text-align: center;
            margin-bottom: 14px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <?php if (isset($_GET['error'])): ?>
            <p class="error-msg">Username atau password salah!</p>
        <?php endif; ?>

        <form action="checklogin.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password" required>
            </div>
            <input type="submit" class="btn-login" value="LOGIN">
        </form>
    </div>
</body>
</html>
