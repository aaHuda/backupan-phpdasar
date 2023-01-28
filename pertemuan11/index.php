<?php
  require 'functions.php';
  
  $mahasiswa = query("SELECT * FROM mahasiswa");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
  <style>
    
    .tambah {
      margin-left: 150px;
    }
    
    td {
      background:#eaeaea;
    }
    
    h1 {
      text-align: center;
    }
    
    th {
      background: aqua;
    }
    
    table {
      text-align: center;
      margin-left: 150px;
    }
  </style>
<body>
  
  <h1>Halaman Mahasiswa</h1>
  
  <a href="tambah.php" class="tambah">Tambah Data Mahasiswa</a>
  <br><br>
  
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
    
    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
    
    <tr>    
      <td><?php echo $i; ?></td>
      <td>
        <a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> |
        <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
      </td>
      <td><img src="poto/<?php echo $row["gambar"] ?>" width="50" height="50"></td>
      <td><?php echo $row["nrp"] ?></td>
      <td><?php echo $row["Nama"] ?></td>
      <td><?php echo $row["email"] ?></td>
      <td><?php echo $row["jurusan"] ?></td>
    </tr>
    
    <?php $i++; ?>
    <?php endforeach  ; ?>
    
  </table>
  
</body>
</html>