<?php
session_start();
include '../db_connect.php';

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

$stmt = $conn->prepare("SELECT id, lozinka, role, is_active FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (!$user['is_active']) {
        echo "Vaš račun nije aktiviran. Kontaktirajte administratora.";
        exit();
    }

    if (password_verify($password, $user['lozinka'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        header("Location: ../admin.php");
        exit();
    } else {
        echo "Pogrešna lozinka.";
    }
} else {
    echo "Korisnik ne postoji.";
}


$stmt->close();
$conn->close();
?>
