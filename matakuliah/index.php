<?php
include '../config/db.php';
$data = $koneksi->query("SELECT * FROM matakuliah");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
  <title>Data Mata Kuliah</title>
</head>
<body class="p-4">
  <h2>Data Mata Kuliah</h2>
  <a href="tambah.php" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>
  <table class="table table-bordered">
    <tr><th>Kode</th><th>Nama</th><th>SKS</th><th>Aksi</th></tr>
    <?php while ($row = $data->fetch_assoc()): ?>
    <tr>
      <td><?= $row['kodemk'] ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['jumlah_sks'] ?></td>
      <td>
        <a href="edit.php?kodemk=<?= $row['kodemk'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus.php?kodemk=<?= $row['kodemk'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>