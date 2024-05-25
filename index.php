<?php
//koneksi ke database
require "./test.php";
$mahasiswa = query("SELECT * FROM test");
// $result = mysqli_query($db,"SELECT * FROM test");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>NO</th>
      <td>Aksi</td>
      <td>gambar</td>
      <td>jurusan</td>
      <td>NRP</td>
      <td>nama</td>
    </tr>
    <?= $i = 1; ?>
    <?php foreach($mahasiswa as $row) : ?>
    <tr>
      <td><?= $i; ?>
        <p></p>
    </td>

      <td>
        <a href="">Ubah</a>
        <a href="">Hapus</a>
      </td>

      <td>
        <img src="./map.png" alt="map" width="100">
      </td>

      <td><?=$row["Jurusan"] ?></td>

      <td>
        <p><?= $row["NRP"]?></p>
      </td>

      <td>
        <p><?= $row["Nama"] ?></p>
      </td>

    </tr>
    <?= $i++ ?>
    <?php endforeach;?>

  </table>
</body>
</html>