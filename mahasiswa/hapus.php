<?php
include '../config/db.php';
$npm = $_GET['npm'];
$koneksi->query("DELETE FROM mahasiswa WHERE npm='$npm'");
header("Location: index.php");
?>