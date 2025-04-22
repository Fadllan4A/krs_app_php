<?php
include '../config/db.php';
$kodemk = $_GET['kodemk'];
$data = $koneksi->query("SELECT * FROM matakuliah WHERE kodemk='$kodemk'")->fetch_assoc();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama'];
  $sks = $_POST['jumlah_sks'];
  $koneksi->query("UPDATE matakuliah SET nama='$nama', jumlah_sks=$sks WHERE kodemk='$kodemk'");
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css"></head>
<body class="p-4">
<h2>Edit Mata Kuliah</h2>
<form method="POST">
  <input class="form-control mb-2" name="nama" value="<?= $data['nama'] ?>" required>
  <input class="form-control mb-2" name="jumlah_sks" type="number" value="<?= $data['jumlah_sks'] ?>" required>
  <button class="btn btn-success">Update</button>
</form>
</body>
</html>