 <?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_or_email = $_POST['korisnicko_ime'];
    $password = $_POST['lozinka'];

    
    $stmt = $conn->prepare("SELECT id, lozinka FROM users WHERE korisnicko_ime = ? OR email = ?");
    $stmt->bind_param("ss", $username_or_email, $username_or_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['lozinka'])) {
            
            $_SESSION['user_id'] = $user['id'];
            /* header("Location: index.php"); */

            $success_message = "Prijava uspjela! Vraćamo vas na početnu stranicu...";
            
            echo "<script type='text/javascript'>
                    alert('$success_message');
                    window.location.href = 'index.php';
                  </script>";

            exit();
        } else {
            echo "Kriva lozinka.";
        }
    } else {
        echo "Nema takvog korisnika.";
    }
}
?>