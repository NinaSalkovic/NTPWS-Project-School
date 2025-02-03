<?php
session_start();
include '../db_connect.php';  // Adjust path if necessary

// Check user role (admin)
if ($_SESSION['role'] !== 'admin') {
    echo "Nemate dozvolu za pristup.";
    exit();
}

// Fetch all news from database
$query = "SELECT id, title, author_id, created_at, status FROM news";
$result = $conn->query($query);

// Check if the query was successful
if ($result === false) {
    die("Error in query: " . $conn->error);  // This will print the error message if the query fails
}

echo "<h2>Upravljanje novostima</h2>";
echo "<table border='1'><tr><th>Naslov</th><th>Autor</th><th>Datum</th><th>Status</th><th>Akcije</th></tr>";

// Loop through news records
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['title']}</td>
            <td>{$row['author_id']}</td>
            <td>{$row['created_at']}</td>
            <td>" . ucfirst($row['status']) . "</td>
            <td>
                <form method='POST' action='edit_news.php'>
                    <input type='hidden' name='news_id' value='{$row['id']}'>
                    <button type='submit'>Uredi</button>
                </form>

                <form method='POST' action='archive_news.php'>
                    <input type='hidden' name='news_id' value='{$row['id']}'>
                    <button type='submit'>" . ($row['status'] === 'archived' ? 'Poništi arhivu' : 'Arhiviraj') . "</button>
                </form>

                <form method='POST' action='approve_news.php'>
                    <input type='hidden' name='news_id' value='{$row['id']}'>
                    <button type='submit'>" . ($row['status'] === 'approved' ? 'Ponovno odobri' : 'Odobri') . "</button>
                </form>

                <form method='POST' action='delete_news.php'>
                    <input type='hidden' name='news_id' value='{$row['id']}'>
                    <button type='submit' onclick='return confirm(\"Are you sure you want to delete this news?\")'>Obriši</button>
                </form>
            </td>
          </tr>";
}

echo "</table>";
?>
