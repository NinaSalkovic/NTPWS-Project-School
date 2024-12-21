<!-- <?php
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
?> -->


<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $drzava_id = $_POST['drzava'];
    $grad = $_POST['grad'];
    $ulica = $_POST['ulica'];
    $datum_rodenja = $_POST['datum_rodenja'];

    // Generate a username
    $korisnicko_ime = strtolower(substr($ime, 0, 1) . $prezime);

    // Check if the username exists
    $check_stmt = $conn->prepare("SELECT korisnicko_ime FROM users WHERE korisnicko_ime = ?");
    $check_stmt->bind_param("s", $korisnicko_ime);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        $korisnicko_ime .= rand(100, 999); // Add a random number to make it unique
    }

    // Hash the password
    $lozinka = password_hash($_POST['lozinka'], PASSWORD_DEFAULT);

    // Insert the user into the database
    $stmt = $conn->prepare("INSERT INTO users (ime, prezime, email, drzava_id, grad, ulica, datum_rodenja, korisnicko_ime, lozinka) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssisssss", $ime, $prezime, $email, $drzava_id, $grad, $ulica, $datum_rodenja, $korisnicko_ime, $lozinka);

    if ($stmt->execute()) {
        echo "Registration successful!";
        header("Location: prijava.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

