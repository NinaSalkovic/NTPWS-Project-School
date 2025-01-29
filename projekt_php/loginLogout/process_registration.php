<?php
include '../db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ime = trim($conn->real_escape_string($_POST['ime']));
    $prezime = trim($conn->real_escape_string($_POST['prezime']));
    $email = trim($conn->real_escape_string($_POST['email']));
    $drzava_id = (int) $_POST['drzava'];
    $grad = trim($conn->real_escape_string($_POST['grad']));
    $ulica = !empty($_POST['ulica']) ? trim($conn->real_escape_string($_POST['ulica'])) : NULL;
    $datum_rodenja = trim($conn->real_escape_string($_POST['datum_rodenja']));
    $lozinka = $_POST['lozinka'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Neispravan email format.");
    }

    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email_count);
    $stmt->fetch();
    $stmt->close();

    if ($email_count > 0) {
        die("E-mail je već registriran.");
    }

    $hashed_lozinka = password_hash($lozinka, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (ime, prezime, email, drzava_id, grad, ulica, datum_rodenja, lozinka, role, is_active) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'user', 0)");
$stmt->bind_param("sssissss", $ime, $prezime, $email, $drzava_id, $grad, $ulica, $datum_rodenja, $hashed_lozinka);


    if ($stmt->execute()) {
        header("Location: prijava.php");
        exit();
    } else {
        echo "Greška pri registraciji: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
