<section>
        
    <div class="articles">
        <!-- Static (Manual) News -->
        <article>
            <a href="index.php?menu=2&clanak=1">
                <img src="images/math_competition.jpg" alt="Članak 1">
                <h2>Školsko natjecanje u matematici</h2>
                <p>U našoj školi održano je godišnje natjecanje u matematici, na kojem su sudjelovali učenici svih razreda....</p>
                <p><strong>Datum objave: 12.06.2024.</strong></p>
            </a>
        </article>
        <article>
            <a href="index.php?menu=2&clanak=2">
                <img src="images/humanitarna_akcija.jpg" alt="Članak 2">
                <h2>Humanitarna akcija - Pomoć obiteljima u potrebi</h2>
                <p>Naša škola organizirala je veliku humanitarnu akciju u kojoj su učenici i nastavnici prikupljali hranu...</p>
                <p><strong>Datum objave: 05.05.2024.</strong></p>
            </a>
        </article>
        <article>
            <a href="index.php?menu=2&clanak=3">
                <img src="images/plitvice.jpg" alt="Članak 3">
                <h2>Izlet u Nacionalni park Plitvička jezera</h2>
                <p>Učenici 5. i 6. razreda imali su priliku posjetiti jedno od najljepših mjesta u Hrvatskoj...</p>
                <p><strong>Datum objave: 20.04.2024.</strong></p>
            </a>
        </article>
        <article>
            <a href="index.php?menu=2&clanak=4">
                <img src="images/dani_sporta.jpg" alt="Članak 4">
                <h2>Dani sporta u školi</h2>
                <p>Održan je tradicionalni školski sportski dan gdje su učenici mogli sudjelovati u raznim disciplinama...</p>
                <p><strong>Datum objave: 15.03.2024.</strong></p>
            </a>
        </article>
        <article>
            <a href="index.php?menu=2&clanak=5">
                <img src="images/sigurnost_internet.png" alt="Članak 5">
                <h2>Radionica o sigurnosti na internetu</h2>
                <p>U sklopu edukacijskih aktivnosti, u školi je održana radionica o sigurnosti na internetu...</p>
                <p><strong>Datum objave: 10.02.2024.</strong></p>
            </a>
        </article>

        <!-- Approved News from Database -->
        <?php
        include 'db_connect.php';

        $result = $conn->query("SELECT * FROM news WHERE status = 'approved' ORDER BY created_at DESC");

        while ($row = $result->fetch_assoc()) {
            echo '<article>';
            echo '<a href="index.php?menu=2&clanak=' . $row['id'] . '">';
            echo '<img src="images/' . ($row['image'] ? $row['image'] : 'default.jpg') . '" alt="' . htmlspecialchars($row['title']) . '">';
            echo '<h2>' . htmlspecialchars($row['title']) . '</h2>';
            echo '<p>' . htmlspecialchars(substr($row['content'], 0, 100)) . '...</p>';
            echo '<p><strong>Datum objave: ' . date('d.m.Y.', strtotime($row['created_at'])) . '</strong></p>';
            echo '</a>';
            echo '</article>';
        }
        ?>
    </div>
</section>
