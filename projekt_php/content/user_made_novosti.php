<section>
<?php
$result = $conn->query("SELECT id, title, content, created_at FROM news WHERE status = 'approved' ORDER BY created_at DESC");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $news_id = $row['id'];
        echo "<div class='news-item'>";
        echo "<h3>{$row['title']}</h3>";
        echo "<p><small>Datum objave: {$row['created_at']}</small></p>";

        $images = $conn->query("SELECT image_path FROM news_images WHERE news_id = $news_id");
        if ($images->num_rows > 0) {
            while ($img = $images->fetch_assoc()) {
                echo "<img src='{$img['image_path']}' width='200' height='150' alt='Slika'>";
            }
        }
        
        echo "<p>" . nl2br($row['content']) . "</p>";
        echo "<a href='news_details.php?id={$row['id']}'>Pročitaj više</a>";
        echo "</div>";
        echo "<hr>";
    }
} else {
    echo "<p>Nema objavljenih vijesti.</p>";
}
?>
</section>