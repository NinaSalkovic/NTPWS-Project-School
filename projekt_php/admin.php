<?php
session_start();
include 'db_connect.php';

if ($_SESSION['role'] !== 'admin') {
    echo "Nemate dozvolu za pristup.";
    exit();
}

$result = $conn->query("SELECT id, ime, prezime, email, role, is_active FROM users");

echo "<h2>Upravljanje korisnicima</h2>";
echo "<table border='1'><tr><th>Ime</th><th>Prezime</th><th>Email</th><th>Rola</th><th>Aktivan</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['ime']}</td>
            <td>{$row['prezime']}</td>
            <td>{$row['email']}</td>
            <td>
                <form method='POST' action='update_user.php'>
                    <input type='hidden' name='user_id' value='{$row['id']}'>
                    <select name='role'>
                        <option value='user' " . ($row['role'] == 'user' ? 'selected' : '') . ">User</option>
                        <option value='editor' " . ($row['role'] == 'editor' ? 'selected' : '') . ">Editor</option>
                        <option value='admin' " . ($row['role'] == 'admin' ? 'selected' : '') . ">Admin</option>
                    </select>
                    <button type='submit'>Promijeni</button>
                </form>
            </td>
            <td>
                <form method='POST' action='activate_user.php'>
                    <input type='hidden' name='user_id' value='{$row['id']}'>
                    <input type='hidden' name='activate' value='" . ($row['is_active'] ? 0 : 1) . "'>
                    <button type='submit'>" . ($row['is_active'] ? 'Deaktiviraj' : 'Aktiviraj') . "</button>
                </form>
            </td>
          </tr>";
}
echo "</table>";

echo "<br><br><a href='index.php'><button>Vrati se na početnu stranicu</button></a>";
?>
