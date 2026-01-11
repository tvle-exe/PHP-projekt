<?php include "includes/db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (ime, prezime, email, username, password)
            VALUES ('$ime', '$prezime', '$email', '$username', '$password')";

    if ($conn->query($sql)) {
        $message = "Registracija uspješna!";
    } else {
        $message = "Greška pri registraciji.";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="./css/main.css">
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Registracija</title>
</head>

<body>
<?php include "includes/header.php"; ?>

<main>
	<div class="home">
		<div class="home__div">
			<form class="contact__div--form" action="" method="post">
				<div>
					<label for="fname">First Name *</label>
					<input type="text" id="fname" name="firstname" placeholder="Your first name..." class="form-control" required>
				</div>
				<div>
					<label for="lname">Last Name *</label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name..." class="form-control" required>
				</div>
				<div>	
					<label for="email">E-mail *</label>
					<input type="email" id="email" name="email" placeholder="Your e-mail..." class="form-control" required>
				</div>
				<div>	
					<label for="username">Username *</label>
					<input type="username" id="username" name="username" placeholder="Your username..." class="form-control" required>
				</div>

                <div>	
					<label for="password">Password *</label>
					<input type="password" id="password" name="password" placeholder="Your password..." class="form-control" required>
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
