<?php
session_start();
include '../db_connect.php';

if ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'editor') {
    exit("Nemate dozvolu za pristup.");
}

$id = $_GET['id'];
$result = $conn->query("SELECT title, content FROM news WHERE id = $id");
$news = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);

    $stmt = $conn->prepare("UPDATE news SET title = ?, content = ? WHERE id = ?");
    $stmt->bind_param("ssi", $title, $content, $id);
    $stmt->execute();

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $image_name = basename($_FILES['images']['name'][$key]);
        $target_file = "../uploads/" . $image_name;
        
        if (move_uploaded_file($tmp_name, $target_file)) {
            $stmt = $conn->prepare("INSERT INTO news_images (news_id, image_path) VALUES (?, ?)");
            $stmt->bind_param("is", $id, $target_file);
            $stmt->execute();
        }
    }

    header("Location: manage_news.php");
    exit();
}
?>

<form method="POST" enctype="multipart/form-data">
    <label>Naslov:</label>
    <input type="text" name="title" value="<?= $news['title'] ?>" required>
    <br>
    <label>Sadržaj:</label>
    <textarea name="content" required><?= $news['content'] ?></textarea>
    <br>
    <label>Dodajte nove slike:</label>
    <input type="file" name="images[]" multiple>
    <br>
    <button type="submit">Spremi promjene</button>
</form>
