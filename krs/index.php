<?php
include '../config/db.php';
$query = "
SELECT m.nama AS mahasiswa, mk.nama AS matakuliah, mk.jumlah_sks
FROM krs
JOIN mahasiswa m ON m.npm = krs.npm
JOIN matakuliah mk ON mk.kodemk = krs.kodemk
";
$data = $koneksi->query($query);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
  <title>Data KRS</title>
</head>
<body class="p-4">
  <h2>Data KRS</h2>
  <table class="table table-bordered">
    <tr><th>No</th><th>Nama Lengkap</th><th>Mata Kuliah</th><th>Keterangan</th></tr>
    <?php $no=1; while ($row = $data->fetch_assoc()): ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['mahasiswa'] ?></td>
      <td><?= $row['matakuliah'] ?></td>
      <td><?= $row['mahasiswa'] ?> Mengambil Mata Kuliah <?= $row['matakuliah'] ?> (<?= $row['jumlah_sks'] ?> SKS)</td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>