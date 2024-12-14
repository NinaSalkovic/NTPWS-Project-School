<?php 
print '
<!DOCTYPE html>
<html lang="hr">
	<head>
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="PHP project 24/25">
        <meta name="keywords" content="blog, journal, project">
        <meta name="author" content="Nina Šalković">
		<title>Članci - Blog</title>
	</head>
	<body>
		<header>
			<!-- Banner -->
			<img src="banner.jpg" alt="Blog Banner" class="banner">
			
			<!-- Navigation -->
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

<!-- svaki članak mora imati malu sliku (thumbnail), naslov, kratak tekst, datum objave i veza na više o tom članku. -->


		<main>
			<h1>Članci</h1>
			<section class="articles">
				<article>
					<a href="article1.php">
						<img src="thumb1.jpg" alt="Članak 1" class="thumbnail">
					</a>
					<h2><a href="article1.php">Naslov članka 1</a></h2>
					<p class="date">Objavljeno: 29.11.2024.</p>
					<p>Kratki opis članka 1. Saznajte više o temi...</p>
					<a href="article1.php" class="read-more">Pročitajte više</a>
				</article>

				<article>
					<a href="article2.php">
						<img src="thumb2.jpg" alt="Članak 2" class="thumbnail">
					</a>
					<h2><a href="article2.php">Naslov članka 2</a></h2>
					<p class="date">Objavljeno: 28.11.2024.</p>
					<p>Kratki opis članka 2. Više o ovoj temi...</p>
					<a href="article2.php" class="read-more">Pročitajte više</a>
				</article>

				<article>
					<a href="article3.php">
						<img src="thumb3.jpg" alt="Članak 3" class="thumbnail">
					</a>
					<h2><a href="article3.php">Naslov članka 3</a></h2>
					<p class="date">Objavljeno: 27.11.2024.</p>
					<p>Kratki opis članka 3. Detaljniji pregled...</p>
					<a href="article3.php" class="read-more">Pročitajte više</a>
				</article>

				<article>
					<a href="article4.php">
						<img src="thumb4.jpg" alt="Članak 4" class="thumbnail">
					</a>
					<h2><a href="article4.php">Naslov članka 4</a></h2>
					<p class="date">Objavljeno: 26.11.2024.</p>
					<p>Kratki opis članka 4. Pročitajte zanimljive detalje...</p>
					<a href="article4.php" class="read-more">Pročitajte više</a>
				</article>

				<article>
					<a href="article5.php">
						<img src="thumb5.jpg" alt="Članak 5" class="thumbnail">
					</a>
					<h2><a href="article5.php">Naslov članka 5</a></h2>
					<p class="date">Objavljeno: 25.11.2024.</p>
					<p>Kratki opis članka 5. Otkrijte dodatne informacije...</p>
					<a href="article5.php" class="read-more">Pročitajte više</a>
				</article>
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
