<?php
include "db.php";
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $msg = $_POST["message"];
    $user = $_SESSION["user"];

    // ❌ STORED XSS
    $pdo->query(
        "INSERT INTO messages (username, message)
         VALUES ('$user', '$msg')"
    );
}

$chats = $pdo->query(
    "SELECT username, message FROM messages"
)->fetchAll();
?>

<h2>Chat</h2>

<form method="POST">
    <input name="message" placeholder="message">
    <button>Send</button>
</form>

<hr>

<?php foreach ($chats as $c): ?>
    <p>
        <b><?php echo $c["username"]; ?>:</b>
        <?php echo $c["message"]; ?>
    </p>
<?php endforeach; ?>
