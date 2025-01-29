<?php
include 'db_connect.php';
session_start();

if ($_SESSION['role'] !== 'admin') {
    exit("Nemate dozvolu.");
}

$user_id = $_POST['user_id'];
$activate = $_POST['activate'];

$stmt = $conn->prepare("UPDATE users SET is_active = ? WHERE id = ?");
$stmt->bind_param("ii", $activate, $user_id);
$stmt->execute();

header("Location: admin.php");
?>
