<?php 
include "includes/db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sigurno čitanje POST podataka
    $ime      = $_POST["firstname"] ?? "";
    $prezime  = $_POST["lastname"] ?? "";
    $email    = $_POST["email"] ?? "";
    $username = $_POST["username"] ?? "";
    $password = password_hash($_POST["password"] ?? "", PASSWORD_DEFAULT);

    // Provjera da obavezna polja nisu prazna
    if ($ime && $prezime && $email && $username && $password) {

        $sql = "INSERT INTO users (ime, prezime, email, username, password)
                VALUES ('$ime', '$prezime', '$email', '$username', '$password')";

        if ($conn->query($sql)) {
            $message = "Registracija uspješna!";
        } else {
            $message = "Greška pri registraciji.";
        }

    } else {
        $message = "Sva obavezna polja moraju biti popunjena.";
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Registracija</title>
</head>

<body>

<?php include "includes/header.php"; ?>

<main>
	<div class="home">
		<div class="home__div">

            <?php if ($message): ?>
                <div class="alert alert-info">
                    <?= $message; ?>
                </div>
            <?php endif; ?>

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
					<input type="text" id="username" name="username" placeholder="Your username..." class="form-control" required>
				</div>

                <div>	
					<label for="password">Password *</label>
					<input type="password" id="password" name="password" placeholder="Your password..." class="form-control" required>
				</div>

				<div>
				    <label for="country">Country</label>
					<select id="country" name="country" class="form-control">
					    <option value="" selected>Please select</option>
					    <option value="JP">Japan</option>
					    <option value="HR">Croatia</option>
					    <option value="US">USA</option>
					    <option value="DE">Germany</option>
					</select>
				</div>
					
				<div class="mt-3">
					<input type="submit" class="btn btn-primary" value="Send"> 
					<input type="reset" class="btn btn-secondary" value="Reset">
				</div>
			</form>

		</div>
    </div>	
</main>

<?php include "includes/footer.php"; ?>
</body>
</html>
