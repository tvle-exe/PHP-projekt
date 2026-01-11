<?php include "includes/db.php"; ?>
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
        <section class="news">
        <?php $result = mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC");

        while ($row = mysqli_fetch_assoc($result)):
        ?>
        <br><br><br><br>
        <article>
            <h2 style="color:#f76f00"><?= htmlspecialchars($row['title']) ?></h2>
            <p style="color:white"><?= nl2br(htmlspecialchars($row['content'])) ?></p>
        </article>
        <?php endwhile; ?>
        
		
            <div>
                <a class="news__link" href="news_1.php"><img src="img/VEGITOGOGETA.jpg" alt="Vegito vs Gogeta, who wins?" title="Vegito and Gogeta"></a>
                <h2 class="news__title"><a href="news_1.php">Vegito vs Gogeta, who wins?</a></h2>
                <p class="news__p">While on the surface the two appear to be on equal footing, Gogeta is superior to Vegito for one very simple reason: <a href="news_1.html">More ...</a></p>
                <p class="news__p"><time datetime="2019-11-04">04 November 2019</time></p>
            </div>
            <hr>
            <div>
                <a class="news__link" href="news_2.php"><img src="img/SUPERHERO.jpg" alt="Why is the next Dragon Ball Super movie called 'Super Hero'" title="Dragon Ball Super movie"></a>
                <h2 class="news__title"><a href="news_2.php">Why is the next Dragon Ball Super movie called 'Super Hero'?</a></h2>
                <p class="news__p">According to Dragon Ball Super manga executive editor Akio Iyoku. <a href="news_2.php">More ...</a></p>
                <p class="news__p"><time datetime="2021-12-30">30 December 2021</time></p>
            </div>
            <hr>
            <div>
                <a class="news__link" href="news_3.php"><img src="img/JIRENBROLY.jpg" alt="Jiren vs Broly, who wins?" title="Jiren and Broly"></a>
                <h2 class="news__title"><a href="news_3.php">Jiren vs Broly, who wins?</a></h2>
                <p class="news__p">Would Pride Trooper Jiren get the best of Super Saiyan Broly, or is Broly stronger than Jiren? <a href="news_3.php">More ...</a></p>
                <p class="news__p"><time datetime="2021-10-10">10 October 2021</time></p>
            </div>
            <hr>
            <div>
                <a class="news__link" href="news_4.php"><img src="img/ZENO.jpg" alt="Is Zeno really the strongest character?" title="Zeno's power"></a>
                <h2 class="news__title"><a href="news_4.php">Is Zeno really the strongest?</a></h2>
                <p class="news__p">Ever since Dragon Ball, Goku and the Z Fighters have met omnipotent beings wielding the power of the gods, with escalating strength. <a href="news_4.html">More ...</a></p>
                <p class="news__p"><time datetime="2019-12-03">03 December 2019</time></p>
            </div>
            <hr>
            <div>
                <a class="news__link" href="news_5.php"><img src="img/ANGELS.png" alt="Why angels don't fight?" title="Angels"></a>
                <h2 class="news__title"><a href="news_5.php">Why angels don't fight?</a></h2>
                <p class="news__p">The Angels of Dragon Ball Super serve as mentors for Gods of Destruction, teaching them to control the power of Destruction. <a href="news_5.html">More ...</a></p>
                <p class="news__p"><time datetime="2021-07-24">24 July 2021</time></p>
            </div>
        </section>
    
	
	</main>
<?php include "includes/footer.php"; ?>
</body>
</html>