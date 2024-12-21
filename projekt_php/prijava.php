<?php
include 'db_connect.php';
?>

<section>
    <form action="process_login.php" method="POST">
        <label for="korisnicko_ime">Korisničko ime:</label>
        <input type="text" id="korisnicko_ime" name="korisnicko_ime" required>

        <label for="lozinka">Lozinka:</label>
        <input type="password" id="lozinka" name="lozinka" required>

        <button type="submit">Prijavi se</button>
    </form>
</section>
