<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<style>
    body{
        font-family: 'Montserrat', sans-serif;
    }

    .main-content{
        margin-left: 4.5rem;
        margin-top: 4rem;
    }

      table {
    width: 90%;
    margin: 40px auto;
    border-collapse: collapse;
    border-radius: 9px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  
  th {
    background-color: #6b7dfc;
    color: white;
    padding: 16px;
    text-align: left;
  }
  
  td {
    background-color: #ffffff;
    padding: 14px 16px;
    border-bottom: 1px solid #f0f0f0;
  }
  
  tr:last-child td {
    border-bottom: none;
  }
</style>
<body>
<?php include 'sidebar.php'; ?>

<div class="main-content">
<h2 style="display: flex; justify-content: center; align-items:center;">Data Orang</h2>
<table border="1">
<tr><th>ID</th><th>Nama</th><th>Email</th><th>Aksi</th></tr>
<?php
$result = $conn->query("SELECT * FROM people");
while ($row = $result->fetch_assoc()):
?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
</div>
</body>
</html>
