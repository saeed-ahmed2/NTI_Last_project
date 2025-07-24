<?php
require 'config.php';
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
$conn->query("DELETE FROM posts WHERE id=$id");
header("Location: dashboard.php");
?>
