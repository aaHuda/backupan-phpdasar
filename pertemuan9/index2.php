<?php
  //koneksi ke database
  $db = mysqli_connect("localhost", "root", "", "phpdasar");
  
  //ambil data dari tabel mahasiswa /query data mahasiswa / ambil lemari
  $result = mysqli_query( $db, "SELECT * FROM mahasiswa" );
  
  //ambil data (fetch) mahasiswa dari objek result
  // mysqli_fecth_row() // mengembalikan array numerik
  //mysqli_fetch_assoc() // mengembalikan array associative
  //mysqli_fetch_array() // mengembalikan keduanya
  //mysqli_fetch_object()
  
  //jika ingin mengambil 1 data / ambil 1 baju :
  
  //row
  // $mhs = mysqli_fetch_row($result);
  // var_dump($mhs[1]);
  
  //assoc
  // $mhs = mysqli_fetch_assoc($result);
  // var_dump($mhs["jurusan"]);
  
  //array
  // $mhs = mysqli_fetch_object($result);
  // var_dump($mhs->Nama);
  
  //jika ingin mengambil semua data / ambil semua baju :
  // while ($mhs = mysqli_fetch_assoc($result) ) {
  //   var_dump($mhs);
  // }
  
  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
  
  <h1>Halaman Mahasiswa</h1>
  
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
    <?php while( $row = mysqli_fetch_assoc( $result ) ) : ?>
    
    <tr>
      <td><?php echo $i; ?></td>
      <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
      </td>
      <td><img src="poto/<?php echo $row["gambar"] ?>" width="50" height="50"></td>
      <td><?php echo $row["nrp"] ?></td>
      <td><?php echo $row["Nama"] ?></td>
      <td><?php echo $row["email"] ?></td>
      <td><?php echo $row["jurusan"] ?></td>
    </tr>
    
    <?php endwhile; ?>
    
  </table>
  
</body>
</html>