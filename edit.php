<?php
require 'config.php';
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
$post = $conn->query("SELECT * FROM posts WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("UPDATE posts SET title='$title', content='$content' WHERE id=$id");
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Edit Post</h2>
    <form action="" method="POST" id="editForm">
        <input type="text" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required><br>
        <textarea name="content" required><?php echo htmlspecialchars($post['content']); ?></textarea><br>
        <button type="submit">Update</button>
    </form>
    <a href="dashboard.php">Back</a>
</div>
<script src="scripts.js"></script>
</body>
</html>
