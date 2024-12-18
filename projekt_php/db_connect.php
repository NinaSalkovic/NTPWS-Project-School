<?php
$host = "localhost";
$user = "root";
$password = "sql"; 
$dbname = "skoladb";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Konekcija nije uspjela: " . $conn->connect_error);
}
?>
