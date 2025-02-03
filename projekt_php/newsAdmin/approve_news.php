<?php
session_start();
include '../db_connect.php';

if ($_SESSION['role'] !== 'admin') {
    exit("Nemate dozvolu za pristup.");
}

$id = $_GET['id'];

$stmt = $conn->prepare("UPDATE news SET status = 'approved' WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: manage_news.php");
exit();
?>
