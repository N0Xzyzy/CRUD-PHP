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
        margin-left: 5rem;
        margin-top: 3rem;
    }

    button {
            padding: 10px 15px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
        }

    label{
        font-size: 1.3rem;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <div class="main-content">
    <h2>Tambah Data</h2>
        <?php include 'sidebar.php'; ?>
        <form method="post">
            <label for="nama">Nama</label> <br>
            <input type="text" name="name" required><br>
            <label for="email">Email</label> <br>
            <input type="email" name="email" required><br>
            <button type="submit">Simpan</button>
        </form>
</div>
</body>
</html>

