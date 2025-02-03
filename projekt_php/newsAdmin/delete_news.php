<?php
session_start();
include '../db_connect.php';

if ($_SESSION['role'] !== 'admin') {
    die("Nemate dozvolu za ovu akciju.");
}

if (isset($_GET['id'])) {
    $news_id = (int)$_GET['id'];
} else {
    die("Nema ID-a vijesti.");
}

$stmt = $conn->prepare("DELETE FROM news WHERE id = ?");
$stmt->bind_param("i", $news_id);

if ($stmt->execute()) {
    header("Location: manage_news.php");
    exit();
} else {
    echo "Greška pri brisanju vijesti: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
