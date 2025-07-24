<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = sha1($_POST['password']); // لازم نفس نوع التشفير اللي استخدمناه فوق

    echo "<strong>Test Mode</strong><br>";
    echo "Username entered: $username<br>";
    echo "Password (sha1): $password<br>";

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    echo "SQL Query: $sql<br>";

    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        echo "<span style='color:green'>✅ Login successful.</span>";
    } else {
        echo "<span style='color:red'>❌ Invalid credentials.</span>";
    }
}
?>
