<?php
  //koneksi ke database
  $db = mysqli_connect("localhost", "root", "", "phpdasar");
  
  function query( $query ) {
    global $db;
    $result = mysqli_query( $db, $query );
    $rows = [];
    while( $row = mysqli_fetch_assoc( $result ) ) {
      $rows[] = $row;
    }
    
    return $rows;
  }
  
  function tambah( $data ) {
    global $db;
    // ambil data dari setiap elemen dalam form
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    
    //upload gambar
    $gambar = upload();
    if( !$gambar ) {
      return false;
    }
  
  
  // query insert data
  $query = "INSERT INTO mahasiswa
  VALUES
  ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
  ";
  mysqli_query($db, $query);
  
  return mysqli_affected_rows( $db );
  }
  
  
  function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error']; 
    $tmpName = $_FILES['gambar']['tmp_name'];
    
    // cek apakah tidak ada gambar yang diapload
    if($error === 4) {
      echo "<script>
              alert('pilih gambar terlebih dahulu!');
            </script>";
        
        return false;
        
    }
    
    // cek apakah yang di upload adalah gambar atau bukan menggunakan extensions
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
      echo "<script>
          alert('yang anda upload bukan gambar!');
        </script>";
    
    return false;
    }
    
    //jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ){
      echo "<script>
              alert('ukuran gambar terlalu besar!');
            </script>";
        
        return false;
    }
    
    // lolos pengecekan gambar siap di apload
    // generate nama gambar baru yang sama
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    
    move_uploaded_file($tmpName, 'poto/' . $namaFileBaru);
    
    return $namaFileBaru;
    
  } 
  
  
  function hapus( $id ) {
    global $db;
    mysqli_query( $db, "DELETE FROM mahasiswa WHERE id  = $id" );
    return mysqli_affected_rows( $db );
  }
  
  function ubah( $data ) {
    global $db;
    // ambil data dari setiap elemen dalam form
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    //cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4) {
      $gambar = $gambarLama;
    } else {
      $gambar = upload();
    }
  
  
  // query insert data
  $query = "UPDATE mahasiswa SET
    nrp = '$nrp',
    nama = '$nama',
    email = '$email',
    jurusan = '$jurusan',
    gambar = '$gambar'
  WHERE id = $id
  ";
  
  mysqli_query($db, $query);
  
  return mysqli_affected_rows( $db );
  }
  
  function cari( $keyword ) {
    $query = "SELECT * FROM mahasiswa 
      WHERE 
      nama LIKE '%$keyword%' OR
      nrp LIKE '%$keyword%' OR
      email LIKE '%$keyword%' OR
      jurusan LIKE '%$keyword%' 
    ";
    return query($query);
  }
  
?>