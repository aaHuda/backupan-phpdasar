<?php
  require 'functions.php';
  
  // ambil data dari URL
  $id = $_GET["id"];
  
  //query data mahasiswa berdasarkan id
  $mhs = query( "SELECT * FROM mahasiswa WHERE id = $id" )[0];
  // cek apakah tombol sudah ditekan atau belum
  if( isset( $_POST["submit"] ) ) {
    
    // cek data apakah data berhasil di ubah atau tidak
    if( ubah( $_POST ) > 0 ) {
      echo "
        <script>
          alert('data berhasil diubah!');
          document.location.href = 'index.php';
        </script>
      ";
    } else {
      echo "
      <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
      </script>
      ";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>
<body>
  
  <h1>Tambah Data Mahasiswa</h1>
  
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?php echo $mhs["gambar"]; ?>">
    <ul>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required value="<?php echo $mhs["Nama"]; ?>">
      </li>
      <li>
        <label for="nrp">NRP :</label>
        <input type="text" name="nrp" id="nrp" required value="<?php echo $mhs["nrp"]; ?>">
      </li>
      <li>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" required value="<?php echo $mhs["email"]; ?>">
      </li>
      <li>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" required value="<?php echo $mhs["jurusan"]; ?>">
      </li><br>
      <li>
        <label for="gamnbar">Gambar :</label>
        <img src="poto/<?php echo $mhs['gambar']; ?>" width="40" height="40"><br>
        <input type="file" name="gambar" id="gambar">
      </li><br>
      <li>
        <button type="submit" name="submit">Ubah Data</button>
      </li>
    </ul>
  </form>
  
  <a href="index.php">kembali ke tabel</a>
  
  
</body>
</html>