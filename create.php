<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $stmt = $conn->prepare("INSERT INTO people (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();
    header("Location: index.php");
}
?>

<style>
    .main-content{
        font-family: 'Montserrat', sans-serif;
        margin-left: 4.5rem;
    }
</style>
<div class="main-content">
    <h2>Tambah Data</h2>
<?php include 'sidebar.php'; ?>
<form method="post">
    Nama: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit">Simpan</button>
</form>
</div>
