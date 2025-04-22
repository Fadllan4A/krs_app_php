<?php
include '../config/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $kodemk = $_POST['kodemk'];
  $nama = $_POST['nama'];
  $sks = $_POST['jumlah_sks'];
  $koneksi->query("INSERT INTO matakuliah VALUES ('$kodemk', '$nama', $sks)");
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css"></head>
<body class="p-4">
<h2>Tambah Mata Kuliah</h2>
<form method="POST">
  <input class="form-control mb-2" name="kodemk" placeholder="Kode MK" required>
  <input class="form-control mb-2" name="nama" placeholder="Nama MK" required>
  <input class="form-control mb-2" name="jumlah_sks" type="number" placeholder="Jumlah SKS" required>
  <button class="btn btn-success">Simpan</button>
</form>
</body>
</html>