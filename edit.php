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
        margin-left: 5rem;
        margin-top: 3rem;
        font-family: 'Montserrat', sans-serif;
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

    label {
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
    <?php include "sidebar.php" ?>
    <h2>Edit Data</h2>
<form method="post">
    <label for="nama">Nama</label> <br>
    <input type="text" name="name" value="<?= $data['name'] ?>" required><br>
    <label for="emain">Email</label> <br>
    <input type="email" name="email" value="<?= $data['email'] ?>" required><br>
    <button type="submit">Update</button>
</form>
</div>
</body>
</html>

