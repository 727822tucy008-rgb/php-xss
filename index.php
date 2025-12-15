<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $u = $_POST["username"];
    $p = $_POST["password"];

    // ❌ SQL INJECTION
    $query = "SELECT username, role FROM users 
              WHERE username='$u' AND password='$p'";

    $stmt = $pdo->query($query);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION["user"] = $user["username"];
        $_SESSION["role"] = $user["role"];
        header("Location: dashboard.php");
        exit;
    }
}
?>

<form method="POST">
    <input name="username" placeholder="username">
    <input name="password" placeholder="password">
    <button>Login</button>
</form>
