<?php
  function jarak() {
    echo "<br>";
  }
  
  tambah(50, 50); 
  jarak();
  kurang(30,20);
  
  
  function tambah($a, $b) {
    $hasiltambah = $a + $b;
    
    return $hasiltambah;
  }
  
  $hasil = tambah(50, 50) * 10;
  echo "hasil penjumlahan dan dikali 10 adalah ". $hasil;
  
  function kurang($nilai1, $nilai2) {
    $hasilkurang = $nilai1 - $nilai2;
    
    return $hasilkurang;
  }
  
  echo " hasil pengurangan ". kurang(30,20);
?>