<?php
include '../config/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO mahasiswa VALUES ('$npm', '$nama', '$jurusan', '$alamat')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
  <title>Tambah Mahasiswa</title>
</head>
<body class="p-4">
  <h2>Tambah Mahasiswa</h2>
  <form method="POST">
    <input class="form-control mb-2" name="npm" placeholder="NPM" required>
    <input class="form-control mb-2" name="nama" placeholder="Nama" required>
    <select name="jurusan" class="form-control mb-2">
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Sistem Operasi">Sistem Operasi</option>
    </select>
    <textarea class="form-control mb-2" name="alamat" placeholder="Alamat" required></textarea>
    <button class="btn btn-success">Simpan</button>
  </form>
</body>
</html>