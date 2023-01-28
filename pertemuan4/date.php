<?php 
// date 
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-m-y");

// time
//  Unix timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time()+60*60*24*100);
// echo date("l", time()-60*60*24*100);
// echo date("d-M-Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun.
// echo date("l",mktime(0,0,0,5,31,2006))

// strtotime
// echo date("l",strtotime("31 may 2006"));

echo date("l-m-M-Y", time()+60*60*24*999999999); 
?>