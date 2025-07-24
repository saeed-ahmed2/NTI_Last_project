<?php
require 'config.php';
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
$posts = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blogger Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <div class="nav">
        <a href="create.php">Create Post</a> 
        <a href="logout.php">Logout</a>
    </div>
    <hr>

    <div id="posts">
    <?php while($row = $posts->fetch_assoc()): ?>
        <div class="post-card">
            <h3><?php echo htmlspecialchars($row['title']); ?></h3>
            <p><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
            <small><?php echo $row['created_at']; ?></small><br>
            <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> | 
            <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirmDelete();">Delete</a>
        </div>
    <?php endwhile; ?>
    </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
