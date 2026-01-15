<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

$xmlFile = __DIR__ . "/data/users.xml";
$xml = simplexml_load_file($xmlFile);

if (isset($_GET["delete"])) {
    $deleteUsername = $_GET["delete"];

    for ($i = 0; $i < count($xml->user); $i++) {
        if ((string)$xml->user[$i]->username === $deleteUsername) {
            unset($xml->user[$i]);
            $xml->asXML($xmlFile);
            header("Location: admin.php");
            exit();
        }
    }
}
?>

<?php
include "includes/db.php";

/* CREATE */
if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query($conn, "INSERT INTO news (title, content) VALUES ('$title', '$content')");
    header("Location: admin.php");
}

/* DELETE */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM news WHERE id=$id");
    header("Location: admin.php");
}

/* UPDATE */
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query($conn,
        "UPDATE news SET title='$title', content='$content' WHERE id=$id"
    );
    header("Location: admin.php");
}

/* READ (za edit) */
$editRow = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = mysqli_query($conn, "SELECT * FROM news WHERE id=$id");
    $editRow = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Admin sučelje</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="./css/main.css">
		<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
</head>
<body>

<?php include "includes/header.php"; ?>

<main>
    <br><br><br><br><br>
    <h1>Admin sučelje – Vijesti</h1>

    <!-- CREATE / UPDATE FORMA -->
    <form method="post">
        <?php if ($editRow): ?>
            <input type="hidden" name="id" value="<?= $editRow['id'] ?>">
        <?php endif; ?>
        <div>
			<label>Naslov</label>
			<input type="text" name="title" class="form-control" required value="<?= $editRow['title'] ?? '' ?>">
		</div>
         <div>
			<label>Sadržaj</label>
			<textarea name="content" class="form-control" required><?= $editRow['content'] ?? '' ?></textarea>
		</div>
        <br>
        <?php if ($editRow): ?>
            <button type="submit" name="update">Spremi izmjene</button>
            <a href="admin.php">Odustani</a>
        <?php else: ?>
            <button type="submit" name="create">Dodaj vijest</button>
        <?php endif; ?>
    </form>

    <hr>

    <!-- READ + DELETE -->
    <h2>Postojeće vijesti</h2>

    <table border="1" cellpadding="5" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Naslov</th>
            <th>Akcije</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM news");
        while ($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['title'] ?></td>
            <td>
                <a href="admin.php?edit=<?= $row['id'] ?>">Uredi</a> |
                <a href="admin.php?delete=<?= $row['id'] ?>"
                   onclick="return confirm('Sigurno obrisati?')">Obriši</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>



    <h2>Registrirani korisnici</h2>

    <table border="1" cellpadding="8" style="width:100%">
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Email</th>
            <th>Username</th>
            <th>Akcija</th>
        </tr>

        <?php foreach ($xml->user as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user->ime) ?></td>
                <td><?= htmlspecialchars($user->prezime) ?></td>
                <td><?= htmlspecialchars($user->email) ?></td>
                <td><?= htmlspecialchars($user->username) ?></td>
                <td>
                    <?php if ($_SESSION["user"] !== (string)$user->username): ?>
                        <a href="admin.php?delete=<?= $user->username ?>"
                        onclick="return confirm('Obrisati korisnika?');">
                        Obriši
                        </a>
                    <?php else: ?>
                        —
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</main>



</body>
</html>
