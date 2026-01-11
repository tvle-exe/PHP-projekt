<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Dragon ball</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Antonio Vladetić">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" href="./css/main.css">
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
<body>
	<?php include "includes/header.php"; ?>
	<nav class="mobile-nav">
		<a href="home.php">Home</a>
		<a href="news.php">News</a>
		<a href="contact.php">Contact</a>
		<a href="about.php">About</a>
		<a href="gallery.php">Gallery</a>
	</nav>
	<main>
		<section class="home">
			<h1 class="home__title">Dragon Ball</h1>
			<p class="home__p">Earth, known as the Dragon World and designated as "Planet 4032-877" by the celestial hierarchy, is the main setting for the entire Dragon Ball series.</p>
			<p class="home__p">It is mainly inhabited by Earthlings, a term used inclusively to refer all of the intelligent races native to the planet, including humans, anthropomorphic beings and monsters.</p>
			<p class="home__p">Starting from Dragon Ball Z series, various extraterrestrial species such as the Saiyans and Namekians have played a more prominent role.</p>
			<div class="home__div">
				<figure class="home__fig">
					<img src="img/GOKU.jpg" alt="Goku" title="slika">
					<figcaption class="home__fig--cap">Goku (Saiyan)</figcaption>
				</figure>
			</div>
			<p class="home__p">Dragon Ball Super establishes that the franchise is set in a multiverse composed of twelve numbered universes, each ruled by a number of deities, respectively called Supreme Kais and Gods of Destruction who are appointed by a higher being called the Grand Zeno, who watches over the multiverse along with the Grand Priest, the father of all the Angels.</p>
			<div class="home__div">
				<figure class="home__fig">
					<img src="img/BEERUS.jpg" alt="Beerus" title="slika">
					<figcaption class="home__fig--cap">Beerus (God of Destruction)</figcaption>
				</figure>
			</div>
		</section>		
	</main>
<?php include "includes/footer.php"; ?>
</body>
</html>