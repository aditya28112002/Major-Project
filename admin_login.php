<?php
session_start();

// 🔥 Add this logout code here:
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
}

// Admin credentials
define('ADMIN_USERNAME', 'servicecare_admin');
define('ADMIN_PASSWORD', 'shikha3003');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == ADMIN_USERNAME && $password == ADMIN_PASSWORD) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: admin_panel.php');
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 12px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .login-form h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .login-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 10px;
            border: 1px solid #aaa;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #0056b3;
        }

        footer {
            background: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <?php include 'header.php'; ?>

    <main>
        <div class="login-form">
            <h2>Admin Login</h2>
            <?php if (isset($error)) echo "<p style='color:red; text-align:center;'>$error</p>"; ?>

            <form method="POST" action="admin_login.php">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</div>

</body>
</html>
