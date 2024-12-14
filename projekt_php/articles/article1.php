<?php 
print '
<!DOCTYPE html>
<html lang="hr">
	<head>
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="Školsko natjecanje">
        <meta name="keywords" content="natjecanje, škola, uspjeh">
        <meta name="author" content="Nina Šalković">
		<title>Školsko natjecanje</title>
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

<!-- dodaj naslov, podnaslov, minimalno 5 odlomaka, datum objave, vezu prema natrag -->


		<main>
			<h1>Školsko natjecanje - Izvrsni rezultati naših učenika!</h1>
			<figure>
				<img src="school-competition.jpg" alt="Školsko natjecanje" class="featured-image">
				<figcaption>Slika: Učenici tijekom natjecanja</figcaption>
			</figure>
			<p>
				U petak, 24. studenog 2024., održano je školsko natjecanje iz matematike, na kojem su sudjelovali učenici iz svih razreda. 
				Cilj natjecanja bio je poticanje kreativnog razmišljanja, rješavanja problema i razvijanje timskog duha među učenicima.
			</p>
			<p>
				S ponosom možemo reći da je natjecanje bilo veliki uspjeh! Naši učenici pokazali su izvanrednu snalažljivost 
				i znanje te su ostvarili odlične rezultate. Prvo mjesto osvojila je učenica Mia Kovačević iz 8.a razreda, dok su drugo i treće mjesto 
				osvojili Luka Horvat (7.b) i Ivana Petrović (6.c).
			</p>
			<p>
				Natjecanje je organizirao naš nastavnički tim uz podršku ravnateljice škole. Nakon natjecanja, svi sudionici uživali su u kratkom druženju 
				i prigodnoj zakusci u školskoj kantini. Zahvaljujemo svim sudionicima, nastavnicima i roditeljima na podršci te se radujemo idućem natjecanju!
			</p>
			<a href="galerija.php" class="read-more">Pogledajte slike s natjecanja</a>
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
