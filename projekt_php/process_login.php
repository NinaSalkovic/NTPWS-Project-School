<?php
session_start();
include 'db_connect.php';

// Debugging: Show what was received
if (empty($_POST)) {
    die("Error: No data received from the form.");
}

if (!isset($_POST['email']) || !isset($_POST['lozinka'])) {
    die("Error: Email or password field is missing in POST request.");
}

$email = trim($_POST['email']);  // Use 'email', not 'korisnicko_ime'
$password = trim($_POST['lozinka']);

if (empty($email) || empty($password)) {
    die("Molimo unesite e-mail i lozinku.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Neispravan format e-maila.");
}

// Query database using email, since username is removed
$stmt = $conn->prepare("SELECT id, ime, prezime, email, lozinka FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['lozinka'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['ime'] = $user['ime'];
        $_SESSION['prezime'] = $user['prezime'];

        echo "<script type='text/javascript'>
                alert('Prijava uspjela! Vraćamo vas na početnu stranicu...');
                window.location.href = 'index.php';
              </script>";
        exit();
    } else {
        echo "Pogrešna lozinka.";
    }
} else {
    echo "Korisnik s unesenim e-mailom ne postoji.";
}

$stmt->close();
$conn->close();
?>
