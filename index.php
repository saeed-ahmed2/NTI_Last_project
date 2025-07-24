<?php
require 'config.php';
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blogger Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Login</h2>
    <form action="login.php" method="POST" id="loginForm">
        <input type="text" name="username" placeholder="Username" required> <br>
        <input type="password" name="password" placeholder="Password" required> <br>
        <button type="submit">Login</button>
    </form>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
