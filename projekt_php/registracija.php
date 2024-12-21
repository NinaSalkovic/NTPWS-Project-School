<?php
include 'db_connect.php';
?>

<section>
    <form action="process_registration.php" method="POST">
        <label for="ime">Ime:</label>
        <input type="text" id="ime" name="ime" required>

        <label for="prezime">Prezime:</label>
        <input type="text" id="prezime" name="prezime" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="drzava">Država:</label>
        <select id="drzava" name="drzava" required>
            <?php
            $result = $conn->query("SELECT id, naziv FROM drzave");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['naziv']}</option>";
            }
            ?>
        </select>

        <label for="grad">Grad:</label>
        <input type="text" id="grad" name="grad" required>

        <label for="ulica">Ulica:</label>
        <input type="text" id="ulica" name="ulica">

        <label for="datum_rodenja">Datum rođenja:</label>
        <input type="date" id="datum_rodenja" name="datum_rodenja" required>

        <label for="lozinka">Lozinka:</label>
        <input type="password" id="lozinka" name="lozinka" required>

        <button type="submit">Registriraj se</button>
    </form>
</section>