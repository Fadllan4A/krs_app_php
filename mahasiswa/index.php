<?php
include '../config/db.php';
$mahasiswa = $koneksi->query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
  <title>Data Mahasiswa</title>
</head>
<body class="p-4">
  <h2>Data Mahasiswa</h2>
  <a href="tambah.php" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
  <table class="table table-bordered">
    <tr>
      <th>NPM</th><th>Nama</th><th>Jurusan</th><th>Alamat</th><th>Aksi</th>
    </tr>
    <?php while ($row = $mahasiswa->fetch_assoc()): ?>
    <tr>
      <td><?= $row['npm'] ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['jurusan'] ?></td>
      <td><?= $row['alamat'] ?></td>
      <td>
        <a href="edit.php?npm=<?= $row['npm'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus.php?npm=<?= $row['npm'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>