<?php 
print '
<!DOCTYPE html>
<html lang="hr">
<head>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="description" content="Galerija slika - PHP projekt">
	<meta name="keywords" content="galerija, slike, projekt">
	<meta name="author" content="Nina Šalković">
	<title>Galerija</title>
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



<!-- Galerija slika mora imati minimalno 10 slika. -->
<!-- Slike se otvaraju uvećane klikom na sliku u novom prozoru. -->
<!-- Svaka slika mora imati opis. -->



<main>
	<h1>Galerija slika</h1>
	<p>Dobrodošli u našu galeriju! Kliknite na sliku za uvećani prikaz.</p>
	<section class="gallery">
		<figure>
			<a href="images/slika1_large.jpg" target="_blank"><img src="images/slika1_thumb.jpg" alt="Opis slike 1"></a>
			<figcaption>Opis slike 1</figcaption>
		</figure>
		<figure>
			<a href="images/slika2_large.jpg" target="_blank"><img src="images/slika2_thumb.jpg" alt="Opis slike 2"></a>
			<figcaption>Opis slike 2</figcaption>
		</figure>
		<figure>
			<a href="images/slika3_large.jpg" target="_blank"><img src="images/slika3_thumb.jpg" alt="Opis slike 3"></a>
			<figcaption>Opis slike 3</figcaption>
		</figure>
		<figure>
			<a href="images/slika4_large.jpg" target="_blank"><img src="images/slika4_thumb.jpg" alt="Opis slike 4"></a>
			<figcaption>Opis slike 4</figcaption>
		</figure>
		<figure>
			<a href="images/slika5_large.jpg" target="_blank"><img src="images/slika5_thumb.jpg" alt="Opis slike 5"></a>
			<figcaption>Opis slike 5</figcaption>
		</figure>
		<figure>
			<a href="images/slika6_large.jpg" target="_blank"><img src="images/slika6_thumb.jpg" alt="Opis slike 6"></a>
			<figcaption>Opis slike 6</figcaption>
		</figure>
		<figure>
			<a href="images/slika7_large.jpg" target="_blank"><img src="images/slika7_thumb.jpg" alt="Opis slike 7"></a>
			<figcaption>Opis slike 7</figcaption>
		</figure>
		<figure>
			<a href="images/slika8_large.jpg" target="_blank"><img src="images/slika8_thumb.jpg" alt="Opis slike 8"></a>
			<figcaption>Opis slike 8</figcaption>
		</figure>
		<figure>
			<a href="images/slika9_large.jpg" target="_blank"><img src="images/slika9_thumb.jpg" alt="Opis slike 9"></a>
			<figcaption>Opis slike 9</figcaption>
		</figure>
		<figure>
			<a href="images/slika10_large.jpg" target="_blank"><img src="images/slika10_thumb.jpg" alt="Opis slike 10"></a>
			<figcaption>Opis slike 10</figcaption>
		</figure>
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
