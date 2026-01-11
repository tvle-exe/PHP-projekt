<?php
session_start();
include "includes/db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user["username"];
            header("Location: admin.php");
            exit();
        } else {
            $message = "Pogrešna lozinka.";
        }
    } else {
        $message = "Korisnik ne postoji.";
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
	<title>Prijava</title>
</head>

<body>
<?php include "includes/header.php"; ?>

<main>
	<div class="about">
		<div class="about__div">
			<form class="contact__div--form" action="" method="post">
				<div>	
					<label for="username">Username *</label>
					<input type="username" id="username" name="username" placeholder="Your username..." class="form-control" required>
				</div>
                <div>	
					<label for="password">Password *</label>
					<input type="password" id="password" name="password" placeholder="Your password..." class="form-control" required>
				</div>
					
				<div>
					<input type="submit" class="btn btn-default" value="Login"> 
					<input type="reset" class="btn btn-default" value="Reset">
				</div>
			</form>
		</div>
    </div>


</main>

<?php include "includes/footer.php"; ?>
</body>
</html>
