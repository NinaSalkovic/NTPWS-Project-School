<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $conn->real_escape_string($_POST['ime']);
    $prezime = $conn->real_escape_string($_POST['prezime']);
    $email = $conn->real_escape_string($_POST['email']);
    $drzava = (int)$_POST['drzava'];
    $grad = $conn->real_escape_string($_POST['grad']);
    $ulica = $conn->real_escape_string($_POST['ulica']);
    $datum_rodenja = $conn->real_escape_string($_POST['datum_rodenja']);
    $lozinka = password_hash($conn->real_escape_string($_POST['lozinka']), PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users (ime, prezime, email, drzava_id, grad, ulica, datum_rodenja, lozinka) 
            VALUES ('$ime', '$prezime', '$email', $drzava, '$grad', '$ulica', '$datum_rodenja', '$lozinka')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registracija uspješna!";
    } else {
        echo "Greška: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
