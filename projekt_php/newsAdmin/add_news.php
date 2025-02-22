<?php
session_start();
include '../db_connect.php';

if ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'editor') {
    exit("Nemate dozvolu za pristup.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $author_id = $_SESSION['user_id'];
    $status = ($_SESSION['role'] === 'admin') ? 'approved' : 'pending';

    $stmt = $conn->prepare("INSERT INTO news (title, content, author_id, status) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $title, $content, $author_id, $status);
    $stmt->execute();
    $news_id = $stmt->insert_id;

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $image_name = basename($_FILES['images']['name'][$key]);
        $target_file = "../uploads/" . $image_name;
        
        if (move_uploaded_file($tmp_name, $target_file)) {
            $stmt = $conn->prepare("INSERT INTO news_images (news_id, image_path) VALUES (?, ?)");
            $stmt->bind_param("is", $news_id, $target_file);
            $stmt->execute();
        }
    }

    header("Location: manage_news.php");
    exit();
}
?>

<form method="POST" enctype="multipart/form-data">
    <label>Naslov:</label>
    <input type="text" name="title" required>
    <br>
    <label>Sadržaj:</label>
    <textarea name="content" required></textarea>
    <br>
    <label>Dodajte slike:</label>
    <input type="file" name="images[]" multiple>
    <br>
    <button type="submit">Dodaj vijest</button>
</form>
