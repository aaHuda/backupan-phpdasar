<?php
  function penjumlahan($nilai1, $nilai2) {
    $hasil = $nilai1 + $nilai2;
    return $hasil;
  }
  
  echo "hasil penjumlahan ". penjumlahan(5, 4);
  
  function salam($waktu = "datang", $nama = "admin") {
    return "selamat $waktu $nama!";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan function</title>
</head>
<body>
  <h1><?= salam("pagi"); ?></h1>
</body>
</html>

