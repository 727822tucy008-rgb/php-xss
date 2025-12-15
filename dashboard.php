<?php
include "db.php";
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}
?>

<h2>Welcome <?php echo $_SESSION["user"]; ?></h2>
<p>Role: <?php echo $_SESSION["role"]; ?></p>

<a href="users.php">View Users</a> |
<a href="chat.php">Chat</a> |
<a href="logout.php">Logout</a>
