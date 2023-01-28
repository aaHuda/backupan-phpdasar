<?php
  if( !isset($_GET["nama"]) || 
      !isset($_GET["nrp"]) ||
      !isset($_GET["email"]) || 
      !isset($_GET["jurusan"]) ||
      !isset($_GET["gambar"])) {
    //redirect
    header("Location: latihan1.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>variable global</title>
</head>
<body>
  
  <ul>
    <li><img src="poto/<?php echo $_GET["gambar"]; ?>" width="100" height="100"></li>
    <li><?php echo $_GET["nama"]; ?></li>
    <li><?php echo $_GET["nrp"]; ?></li>
    <LI><?php echo $_GET["email"]; ?></LI>
    <LI><?php echo $_GET["jurusan"]; ?></LI>
  </ul>
  
  <a href="latihan1.php">kembali ke daftar mahasiswa</a>
  
</body>
</html>