<?php
$servername = "localhost";
$username = "id17538287_wiltoncb";
$password = "Unad.12345678";
$dbname = "id17538287_bdunad36";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Se ha presentado el siguiente error de conexión: <font color='red'>" . $conn->connect_error . ".</font>&nbsp&nbsp");
}
?>
