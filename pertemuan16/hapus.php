<?php
  
  session_start();
  
  if(!isset($_SESSION["login"])) {
    header("Location: Login.php");
    exit;
  }
  
  require 'functions.php';
  
  $id = $_GET["id"];
  
  if( hapus( $id ) > 0 ) {
    echo "
        <script>
          alert('data berhasil hapus!');
          document.location.href = 'index.php';
        </script>
      ";
  } else {
    echo "
    <script>
      alert('data gagal hapus!');
      document.location.href = 'index.php';
    </script>
  ";
  }
  
?>