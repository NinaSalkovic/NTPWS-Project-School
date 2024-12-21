<?php
session_start();
include 'db_connect.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: prijava.php");
    exit();
}

// Fetch user details
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT ime, prezime, email FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uspješna prijava!</title>
</head>

<body>
    <h1>Dobro došli, <?php echo htmlspecialchars($user['ime']); ?>!</h1>
    <p>vaš email je: <?php echo htmlspecialchars($user['email']); ?></p>

    <nav>
        <a href="index.php">Vratite se na poćetnu stranicu.</a>
        <a href="odjava.php">Odjavite se.</a>
    </nav>
</body>

</html>