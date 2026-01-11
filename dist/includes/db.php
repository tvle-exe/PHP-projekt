<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpprojekt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Greška spajanja na bazu: " . $conn->connect_error);
}
?>
