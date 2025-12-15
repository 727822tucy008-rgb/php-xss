<?php
include "db.php";

$stmt = $pdo->query("SELECT username, role FROM users");
$users = $stmt->fetchAll();
?>

<h2>All Users</h2>

<?php foreach ($users as $u): ?>
    <p>
        <?php echo $u["username"]; ?> (<?php echo $u["role"]; ?>)
        <a href="delete.php?u=<?php echo $u["username"]; ?>">Delete</a>
    </p>
<?php endforeach; ?>
