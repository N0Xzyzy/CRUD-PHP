<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include "koneksi.php";

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM people WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");
?>