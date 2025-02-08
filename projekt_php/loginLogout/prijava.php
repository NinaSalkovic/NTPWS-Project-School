
<html>
<head>
    <link rel="stylesheet" href="../style.css">    
    <link rel="icon" type="image/png" href="../images/school.png">    
    <title>Registracija</title>
</head>

<section>
    <div class="registration-container">
    <form action="process_login.php" method="POST">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="lozinka">Lozinka:</label>
        <input type="password" id="lozinka" name="lozinka" required>

        <button type="submit">Prijavi se</button>
    </form>
    </div>
</section>
</html>