
<nav>
    <ul>
        <li><a href="index.php?menu=1">Početna stranica</a></li>
        <li><a href="index.php?menu=2">Novosti</a></li>
        <li><a href="index.php?menu=3">Kontakt</a></li>
        <li><a href="index.php?menu=4">O nama</a></li>
        <li><a href="index.php?menu=5">Galerija</a></li>

        <?php if (isset($_SESSION['user_id'])): ?>
            <?php if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'editor'): ?>
                <li><a href="newsAdmin/manage_news.php">Uredi vijesti</a></li>
            <?php endif; ?>
            
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <li><a href="admin.php">Administracija</a></li>
            <?php endif; ?>

            <li><a href="loginLogout/odjava.php">Odjava</a></li>
        <?php else: ?>
            <li><a href="loginLogout/registracija.php">Registracija</a></li>
            <li><a href="loginLogout/prijava.php">Prijava</a></li>
        <?php endif; ?>
    </ul>
</nav>
