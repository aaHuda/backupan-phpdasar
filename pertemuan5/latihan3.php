<?php
  $mahasiswa = [
  ["hudayana", "85728758", "tkj", "mhudayanahuda@gmail.com "],
  ["putra", "7225426456", "otomotif", "putra@gmail.com"],
  ["fajar", "8659265938", "kelistrikan", "fajarsetiawan@gmail.com"],
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pengimplementasian array</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs) : ?>
  <ul>
      <li> Nama : <?php echo $mhs[0]; ?></li>
      <li> NRP : <?php echo $mhs[1]; ?></li>
      <li> Jurusan : <?php echo $mhs[2]; ?></li>
      <li> Email : <?php echo $mhs[3]; ?></li>
  </ul>
<?php endforeach; ?>
</body>
</html>