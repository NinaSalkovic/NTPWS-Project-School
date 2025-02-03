<!-- svaki članak mora imati malu sliku (thumbnail), naslov, kratak tekst, datum objave i veza na više o tom članku. -->

<section>
    <h1>Novosti</h1>
    <p>Ovdje možete pronaći najnovije vijesti i članke iz naše škole.</p>
    <div class="articles">
        <article>
            <a href="index.php?menu=2&clanak=1">
                <img src="images/thumbnail1.jpg" alt="Članak 1">
                <h2>Naslov članka 1</h2>
                <p>Kratki opis prvog članka...</p>
                <p><strong>Datum objave: 10.06.2024.</strong></p>
            </a>
        </article>
        <article>
            <a href="index.php?menu=2&clanak=2">
                <img src="images/thumbnail2.jpg" alt="Članak 2">
                <h2>Naslov članka 2</h2>
                <p>Kratki opis drugog članka...</p>
                <p><strong>Datum objave: 12.06.2024.</strong></p>
            </a>
        </article>
        <article>
            <a href="index.php?menu=2&clanak=3">
                <img src="images/thumbnail3.jpg" alt="Članak 3">
                <h2>Naslov članka 3</h2>
                <p>Kratki opis trećeg članka...</p>
                <p><strong>Datum objave: 14.06.2024.</strong></p>
            </a>
        </article>
        <article>
            <a href="index.php?menu=2&clanak=4">
                <img src="images/thumbnail4.jpg" alt="Članak 4">
                <h2>Naslov članka 4</h2>
                <p>Kratki opis četvrtog članka...</p>
                <p><strong>Datum objave: 15.06.2024.</strong></p>
            </a>
        </article>
        <article>
            <a href="index.php?menu=2&clanak=5">
                <img src="images/thumbnail5.jpg" alt="Članak 5">
                <h2>Naslov članka 5</h2>
                <p>Kratki opis petog članka...</p>
                <p><strong>Datum objave: 17.06.2024.</strong></p>
            </a>
        </article>
    </div>

    <?php
    include 'db_connect.php';
    $result = $conn->query("SELECT * FROM news WHERE status = 'approved' ORDER BY created_at DESC");

    while ($row = $result->fetch_assoc()) {
        echo "<h2>{$row['title']}</h2><p>{$row['content']}</p>";
    }
    ?>



</section>