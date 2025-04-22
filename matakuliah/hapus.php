<?php
include '../config/db.php';
$kodemk = $_GET['kodemk'];
$koneksi->query("DELETE FROM matakuliah WHERE kodemk='$kodemk'");
header("Location: index.php");
?>