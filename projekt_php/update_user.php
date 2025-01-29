<?php
include 'db_connect.php';
session_start();

if ($_SESSION['role'] !== 'admin') {
    exit("Nemate dozvolu.");
}

$user_id = $_POST['user_id'];
$role = $_POST['role'];

$stmt = $conn->prepare("UPDATE users SET role = ? WHERE id = ?");
$stmt->bind_param("si", $role, $user_id);
$stmt->execute();

header("Location: admin.php");
?>
