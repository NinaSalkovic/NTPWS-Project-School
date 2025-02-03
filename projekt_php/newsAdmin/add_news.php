<?php
session_start();
include '../db_connect.php';

if (!isset($_SESSION['role']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'editor')) {
    die("Nemate dozvolu za dodavanje vijesti.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author_id = $_SESSION['user_id'];
    
    $stmt = $conn->prepare("INSERT INTO news (title, content, author_id) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $title, $content, $author_id);
    
    if ($stmt->execute()) {
        echo "Vijest uspješno dodana.";
    } else {
        echo "Greška pri dodavanju vijesti.";
    }
}
?>

<form method="POST">
    <input type="text" name="title" placeholder="Naslov" required>
    <textarea name="content" placeholder="Tekst vijesti" required></textarea>
    <button type="submit">Dodaj vijest</button>
</form>
