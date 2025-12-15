<?php
include "db.php";

$username = $_GET["u"];

// ❌ SQL INJECTION + NO AUTH CHECK
$pdo->query("DELETE FROM users WHERE username='$username'");

header("Location: users.php");
