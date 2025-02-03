<?php
session_start();
include '../db_connect.php';

if (!isset($_SESSION['role']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'editor')) {
    die("Pristup odbijen.");
}

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Uređivanje vijesti</title>
</head>
<body>
    <h2>Dobrodošli u sekciju za uređivanje vijesti</h2>

    <ul>
        <li><a href="manage_news.php">Upravljaj vijestima</a></li>
        <li><a href="add_news.php">Dodaj novu vijest</a></li>
        <li><a href="index.php">Povratak na početnu stranicu</a></li>
    </ul>
</body>
</html>
