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
		<div class="contact">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.7497739460773!2d139.66071245105306!3d35.707774780090794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1526a2c61c820803%3A0x212f02f5ad914091!2sToei%20Animation%20Co.%2C%20Ltd.%20Head%20Office!5e0!3m2!1shr!2shr!4v1641233163790!5m2!1shr!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			<div class="contact__div">
				<form class="contact__div--form" action="" method="push">
					<div>
						<label for="fname">First Name *</label>
						<input type="text" id="fname" name="firstname" placeholder="Your first name..." class="form-control" required>
					</div>
					<div>
						<label for="lname">Last Name *</label>
						<input type="text" id="lname" name="lastname" placeholder="Your last name..." class="form-control" required>
					</div>
					<div>	
						<label for="email">Your E-mail *</label>
						<input type="email" id="email" name="email" placeholder="Your e-mail..." class="form-control" required>
					</div>
					<div>
						<label for="country">Country</label>
						<select id="country" name="country" class="form-control">
						<option value="" selected>Please select</option>
						<option value="BE">Japan</option>
						<option value="HR" >Croatia</option>
						<option value="LU">USA</option>
						<option value="HU">Germany</option>
						</select>
					</div>
					<div>
						<label for="message">Message</label>
						<textarea id="message" name="message" placeholder="Write something..." class="form-control"></textarea>
					</div>
					<label>
    					<input type="checkbox" name="newsletter" required>
    						I want to receive the newsletter
					</label>
					<div>
						<input type="submit" class="btn btn-default" value="Send"> 
						<input type="reset" class="btn btn-default" value="Reset">
					</div>
					
				</form>
			</div>
        </div>			
	</main>
<?php include "includes/footer.php"; ?>
</body>
</html>