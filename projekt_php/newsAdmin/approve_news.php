<?php
session_start();
include '../db_connect.php';

if ($_SESSION['role'] !== 'admin') {
    die("Nemate dozvolu za ovu akciju.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $news_id = $_POST['news_id'];
    $new_status = isset($_POST['approve']) ? 'approved' : 'archived';

    $stmt = $conn->prepare("UPDATE news SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $new_status, $news_id);
    $stmt->execute();

    header("Location: manage_news.php");
    exit();
}
?>
