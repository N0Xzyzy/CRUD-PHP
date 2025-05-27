<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include "koneksi.php";

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM people WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $stmt = $conn->prepare("UPDATE people SET name=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $email, $id);
    $stmt->execute();
    header("Location: index.php");
}
?>
<style>
    .main-content{
        margin-left: 4.5rem;
        font-family: 'Montserrat', sans-serif;
    }
</style>
<div class="main-content">
    <?php include "sidebar.php" ?>
    <h2>Edit Data</h2>
<form method="post">
    Nama: <input type="text" name="name" value="<?= $data['name'] ?>" required><br>
    Email: <input type="email" name="email" value="<?= $data['email'] ?>" required><br>
    <button type="submit">Update</button>
</form>
</div>
