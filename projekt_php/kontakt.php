<?php 
print '
<!DOCTYPE html>
<html lang="hr">
<head>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="description" content="Kontakt stranica - PHP projekt">
	<meta name="keywords" content="kontakt, škola, obrazovanje">
	<meta name="author" content="Nina Šalković">
	<title>Kontakt</title>
</head>

<body>
<header>
	<img src="banner.jpg" alt="Blog Banner" class="banner">
	<nav>
		<ul>
			<li><a href="index.php">Početna stranica</a></li>
			<li><a href="novosti.php">Novosti</a></li>
			<li><a href="kontakt.php">Kontakt</a></li>
			<li><a href="onama.php">O nama</a></li>
			<li><a href="galerija.php">Galerija</a></li>
		</ul>
	</nav>
</header>

<main>
	<h1>Kontaktirajte nas</h1>
	<section>
		<h2>Naša lokacija</h2>
		<p>Možete nas pronaći na sljedećoj lokaciji:</p>
		<!-- Embed Google Maps -->
		<iframe 
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.5668319441576!2d15.978153976021902!3d45.81539910866701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d1c637ac2de1%3A0x92cdec4d6c4f3d01!2sZagreb%2C%20Hrvatska!5e0!3m2!1shr!2shr!4v1686661234567!5m2!1shr!2shr" 
			width="100%" 
			height="400" 
			style="border:0;" 
			allowfullscreen="" 
			loading="lazy" 
			referrerpolicy="no-referrer-when-downgrade">
		</iframe>
	</section>

	<section>
		<h2>Pošaljite nam poruku</h2>
		<form action="process_form.php" method="POST">
			<div class="form-group">
				<label for="first-name">Ime:</label>
				<input type="text" id="first-name" name="first-name" required>
			</div>
			<div class="form-group">
				<label for="last-name">Prezime:</label>
				<input type="text" id="last-name" name="last-name" required>
			</div>
			<div class="form-group">
				<label for="email">E-mail adresa:</label>
				<input type="email" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="message">Poruka:</label>
				<textarea id="message" name="message" rows="5"></textarea>
			</div>
			<button type="submit">Pošalji</button>
		</form>
	</section>
</main>

<footer>
	<div class="footer-content">
		<p>&copy; 2024 Nina Šalković. Sva prava pridržana.</p>
		<div class="social-links">
			<a href="https://facebook.com" target="_blank"><img src="facebook-icon.png" alt="Facebook" class="social-icon"></a>
			<a href="https://twitter.com" target="_blank"><img src="twitter-icon.png" alt="Twitter" class="social-icon"></a>
			<a href="https://instagram.com" target="_blank"><img src="instagram-icon.png" alt="Instagram" class="social-icon"></a>
		</div>
		<div class="github-link">
			<a href="https://github.com/your-username/your-repo" target="_blank">
				<img src="github-icon.png" alt="GitHub" class="github-icon">
				Pogledajte naš GitHub
			</a>
		</div>
	</div>
</footer>
</body>
</html>';
?>
