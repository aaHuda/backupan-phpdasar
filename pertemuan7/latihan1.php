<?php
  //SUPERGLOBAL
  // variable global milik php
  //merupakan Array  Associative
  
  // echo $_SERVER["SERVER_NAME"];
  // $_GET["nama"] = "mhudayana";
  // $_GET["NRP"] = "85728952587";
  
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
    <title>$_GET</title>
  </head>
  <body>
    <h1>Daftar Mahasiswa</h1>
    
    <ul>
      <?php foreach( $mahasiswa as $mhs) : ?>
        <li>
          <a href="latihan2.php?
            nama=<?php echo $mhs["nama"]; ?>&
            nrp=<?php echo $mhs["nrp"]; ?>&
            email=<?php echo $mhs["email"]; ?>&
            jurusan=<?php echo $mhs["jurusan"]; ?>&
            gambar=<?php echo $mhs["gambar"]; ?>&">
          <?php echo $mhs["nama"] ; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
    
  </body>
  </html>