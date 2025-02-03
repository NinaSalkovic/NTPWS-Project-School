<?php
session_start();
include '../db_connect.php';

if ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'editor') {
    exit("Nemate dozvolu za pristup.");
}

$result = $conn->query("SELECT id, title, author_id, status, created_at FROM news");

echo "<h2>Upravljanje vijestima</h2>";
echo "<table border='1'>
        <tr>
            <th>Naslov</th>
            <th>Autor</th>
            <th>Datum</th>
            <th>Status</th>
            <th>Slike</th>
            <th>Akcije</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    $news_id = $row['id'];
    $images = $conn->query("SELECT image_path FROM news_images WHERE news_id = $news_id");

    echo "<tr>
            <td>{$row['title']}</td>
            <td>{$row['author_id']}</td>
            <td>{$row['created_at']}</td>
            <td>{$row['status']}</td>
            <td>";
    
    while ($img = $images->fetch_assoc()) {
        echo "<img src='{$img['image_path']}' width='50' height='50'> ";
    }
    
    echo "</td>
            <td>
                <a href='edit_news.php?id={$row['id']}'>Uredi</a> |
                " . ($_SESSION['role'] === 'admin' ? "<a href='delete_news.php?id={$row['id']}'>Obriši</a> |" : "") . "
                " . ($_SESSION['role'] === 'admin' ? "<a href='approve_news.php?id={$row['id']}'>Odobri</a>" : "") . "
            </td>
          </tr>";
}

echo "</table>";
echo "<br><a href='add_news.php'><button>Dodaj novu vijest</button></a>";
echo "<br><br><a href='../index.php'><button>Vrati se na početnu</button></a>";
?>
