<?php
session_start();
?>

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
		<div class="news">
			<div class="more_news">
				<figure class="more_news--fig">
					<a href="news_2.php"><img src="img/SUPERHERO.jpg" alt="Superhero movie" title="Superhero movie"></a>
					<figcaption>Superhero movie<figcaption>
				</figure>
				<figure class="more_news--fig">
					<a href="news_3.php"><img src="img/JIRENBROLY.jpg" alt="Jiren vs Broly" title="Jiren vs Broly"></a>
					<figcaption>Jiren vs Broly<figcaption>
				</figure>
				<figure class="more_news--fig">
					<a href="news_4.php"><img src="img/ZENO.jpg" alt="Zeno the strongest?" title="Zeno the strongest?"></a>
					<figcaption>Zeno the strongest?<figcaption>
				</figure>
				<figure class="more_news--fig">
					<a href="news_5.php"><img src="img/ANGELS.png" alt="Angels fight?" title="Angels fight?"></a>
					<figcaption>Angels fight?<figcaption>
				</figure>
			</div>
			<hr>
			<div class="content">
				<h1>Vegito vs Gogeta, who wins?</h1>
				<h2>Which Dragon Ball Fusion Is Stronger: Vegito or Gogeta? It's Easy</h2>
				<p>Goku and Vegeta have two fusion forms in Dragon Ball, Gogeta and Vegito. But which form is the most powerful? The answer is quite simple.
				</p>
				<img src="img/VEGITOGOGETA.jpg" alt="Vegito vs Gogeta" title="Vegito vs Gogeta">
				<p>There are two different fusion forms for Goku and Vegeta in the world of Dragon Ball -- Gogeta and Vegito -- but which one is stronger?
					The answer is quite simple, thanks to Dragon Ball Super. Having originated in Dragon Ball Z, fusion is a concept that allows two characters to "fuse" into one being.
					The point of the technique is to drastically increase their power level. It also combines their thoughts and personalities into one mind, two of the fusion methods in Dragon Ball are the Fusion Dance and the Potara Earrings.
				</p>
				<p>Goku and Vegeta have used both techniques. After being given the Potara Earrings in the Buu Saga, Goku and Vegeta combine to form "Vegito", 
					who at this point in time was the show's strongest character. In the Dragon Ball Z non-canon movie, Fusion Reborn, the two heroes perform 
					the Fusion Dance to become "Gogeta" and defeat Janemba. The Fusion Dance is repeated again in Dragon Ball GT, which has since been removed 
					from canon. Gogeta doesn't actually become part of the show's continuity until the 2018 film, Dragon Ball Super: Broly.
				</p>
				<p>There's been much debate over which fusion form is more formidable in combat. Both have been instrumental in battling some of the strongest 
					adversaries in Dragon Ball history, including Buu, Zamasu, and now Broly. While on the surface the two appear to be on equal footing, Gogeta 
					is superior to Vegito for one very simple reason: Vegito has a power limit.
				</p>
				<img src="img/GOGETA.jpg" alt="Gogeta" title="Gogeta">
				<p>It's established in Dragon Ball Z that Potara fusion lasts forever, but this is retconned by Dragon Ball Super which reveals that it actually 
					only lasts for an hour when the earrings are worn by mortals. However, the fusion lasting an hour still sounds a lot better than the time 
					constraints for the Fusion Dance, which only allows Goku and Vegeta to be "Gogeta" for thirty minutes. The up-side to this is that Gogeta 
					can fight with all his power, and even break through to his Super Saiyan Blue form without worrying about consequences.
				</p>
				<p>No matter what Gogeta does, the fusion lasts the full thirty minutes, whereas the Potara fusion is rather imperfect. This is surprising, 
					considering that it's a divine technique. As previously noted, the Potara fusion should last an hour, but Dragon Ball Super has proven 
					that this rule has its limitations. Against Zamasu, Vegito accessed the Super Saiyan Blue form and fought for less than fifteen minutes 
					before the fusion subsided. Goku and Vegeta defused after Vegito hit Zamasu with the Final Kamehemeha. Apparently, the amount of energy 
					dispensed by Vegito was too much. Gogeta doesn't have these restrictions and can hit his opponents with the full force of his power, 
					making him the stronger warrior.
				</p>
				<p>Source: <a href="https://screenrant.com/dragon-ball-gogeta-vegito-fusion-form-stronger/">screenrant.com</a></p>
				<a class="content__link" href="news.php">Back to news</a>
			</div>
        </div>	
	</main>
<?php include "includes/footer.php"; ?>
</body>
</html>