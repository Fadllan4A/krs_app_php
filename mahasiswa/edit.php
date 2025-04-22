<?php
include '../config/db.php';
$npm = $_GET['npm'];
$mhs = $koneksi->query("SELECT * FROM mahasiswa WHERE npm='$npm'")->fetch_assoc();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $koneksi->query("UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', alamat='$alamat' WHERE npm='$npm'");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
  <title>Edit Mahasiswa</title>
</head>
<body class="p-4">
  <h2>Edit Mahasiswa</h2>
  <form method="POST">
    <input class="form-control mb-2" name="nama" value="<?= $mhs['nama'] ?>" required>
    <select name="jurusan" class="form-control mb-2">
      <option value="Teknik Informatika" <?= $mhs['jurusan']=='Teknik Informatika'?'selected':'' ?>>Teknik Informatika</option>
      <option value="Sistem Operasi" <?= $mhs['jurusan']=='Sistem Operasi'?'selected':'' ?>>Sistem Operasi</option>
    </select>
    <textarea class="form-control mb-2" name="alamat" required><?= $mhs['alamat'] ?></textarea>
    <button class="btn btn-success">Update</button>
  </form>
</body>
</html>