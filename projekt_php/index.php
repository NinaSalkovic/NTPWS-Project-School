<?php 
print '
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="PHP project 24/25">
        <meta name="keywords" content="blog, journal, project">
        <meta name="author" content="Nina Šalković">
		<title>PHP Project</title>
	</head>


<body>
<header>
    
<!-- add an image for the banner -->
<img src="" alt="Blog Banner" class="banner">

<!-- create php files for the given: -->
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


<!-- adjust main to specific content: -->
<main>
			<section>
				<h1>Dobrodošli na naš blog</h1>
				<h2>Sve o svijetu tehnologije i inovacija</h2>
				<p>
					U današnjem digitalnom svijetu, tehnologija se razvija nevjerojatnom brzinom. Naš blog posvećen je praćenju najnovijih trendova, 
					te pružanju korisnih savjeta i uvida za sve zainteresirane za inovacije i napredak u tehnologiji.
				</p>
				<p>
					Ovdje ćete pronaći članke o raznim temama, od umjetne inteligencije i blockchaina do savjeta za produktivnost 
					u digitalnom okruženju. Naš cilj je pružiti vrijedne informacije na jednostavan i razumljiv način.
				</p>
				<p>
					Bilo da ste entuzijast, student ili profesionalac, naš blog ima nešto za svakoga. Pratite nas i otkrijte 
					kako tehnologija oblikuje naš svakodnevni život i budućnost.
				</p>
			</section>

			<figure>
				<img src="tech-image.jpg" alt="Tehnološki uređaji" class="featured-image">
				<figcaption>Slika: Prikaz različitih tehnoloških uređaja</figcaption>
			</figure>
		</main>


    <!-- adjust footer to specific content: -->  
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