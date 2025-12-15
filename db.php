<?php
$host = "localhost";
$db   = "sqllab";
$user = "labuser";
$pass = "labpass";

try {
    $pdo = new PDO(
        "pgsql:host=$host;dbname=$db",
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (Exception $e) {
    die("DB connection failed");
}
session_start();
?>
