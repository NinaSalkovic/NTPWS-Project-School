<?php 
print '
<!DOCTYPE html>
<html lang="hr">
<head>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="description" content="O nama - PHP projekt">
	<meta name="keywords" content="o nama, projekt, blog">
	<meta name="author" content="Nina Šalković">
	<title>O nama</title>
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

<!-- uredi tekst (3 odlomka), dodaj video koji radi, stavi video tako da tekst wrap around radi? -->



<main>
	<h1>O nama</h1>
	<p>Dobrodošli na naš blog posvećen tehnologiji, inovacijama i kreativnosti. Naša misija je stvoriti platformu na kojoj ljubitelji tehnologije mogu pronaći inspiraciju, naučiti nešto novo i podijeliti svoja iskustva.</p>
	
	<p>Tim našeg bloga sastoji se od stručnjaka iz različitih područja, uključujući programiranje, dizajn, marketing i razvoj softvera. Kroz naše članke trudimo se pružiti vrijedne informacije i praktične savjete za naše čitatelje.</p>
	
	<p>Cijenimo vašu podršku i povratne informacije koje nam pomažu da unaprijedimo naš rad. Naša zajednica raste svakim danom, a mi se veselimo svakom novom čitatelju koji postane dio našeg tehnološkog putovanja.</p>

	<section class="video-section">
		<h2>Pogledajte naš video</h2>
		<video controls>
			<source src="videos/onama.mp4" type="video/mp4">
			<source src="videos/onama.ogv" type="video/ogg">
			<source src="videos/onama.webm" type="video/webm">
			Vaš preglednik ne podržava video element.
		</video>
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
