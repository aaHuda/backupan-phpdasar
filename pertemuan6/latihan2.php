<?php
  // $mahasiswa = [
  //   ["hudayana", "85728758", "tkj", "mhudayanahuda@gmail.com "],
  //   ["putra", "7225426456", "otomotif", "putra@gmail.com"],
  //   ["fajar", "8659265938", "kelistrikan", "fajarsetiawan@gmail.com"],
  //   ];
  
  // Array associative
  // key adalah string yang kita buat sendiri 
  // definisinya sama seperti array numerik , kecuali
  // key-nya adalah string yang kita buat sendiri
  $mahasiswa = [
              ["nama" => "hudayana",
                "nrp" => "85728758",
                "email" => "mhudayanahuda@gmail.com ",
                "jurusan" => "tkj", 
                "gambar" => "huda2.jpeg",
              ],
              ["nama" => "antokewer",
                "nrp" => "7225426456",
                "email" => "antoireng@gmail.com",
                "jurusan" => "kuli jawa",
                "gambar" => "anto2.jpeg",
              ]
            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>array associative</title>
  <style>
    h1 {
      text-align: center;
    }
    
    ul {
      float: left;
    }
    
    ul li {
      list-style-type: none;
    }
  </style>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  
  <?php foreach( $mahasiswa as $mhs) : ?>
  <ul>
    <li>
      <img src="poto/<?php echo $mhs ["gambar"] ?>" width="100" height="100">
    </li>
    <li> Nama : <?php echo $mhs["nama"]; ?></li>
    <li> NRP : <?php echo $mhs["nrp"]; ?></li>
    <li> Jurusan : <?php echo $mhs["jurusan"]; ?></li>
    <li> Email : <?php echo $mhs["email"]; ?></li>
  </ul>
  <?php endforeach; ?>
  
</body>
</html>

