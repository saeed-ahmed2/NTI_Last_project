<?php
require 'config.php';
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("INSERT INTO posts (title, content) VALUES ('$title', '$content')");
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Create New Post</h2>
    <form action="" method="POST" id="postForm">
        <input type="text" name="title" placeholder="Title" required><br>
        <textarea name="content" placeholder="Content" required></textarea><br>
        <button type="submit">Post</button>
    </form>
    <a href="dashboard.php">Back</a>
</div>
<script src="scripts.js"></script>
</body>
</html>
