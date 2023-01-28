<?php 
echo "hai materi ada vscode atau di file htdocs/phpdasar/pertemuan2/index.php ya 😁 cara mengakses di browser = localhost/phpdasar/pertemuan2/";
// //   pertemuan 2 PHP Dasar
// //   sintaks PHP b

// // Standar output
// // echo, print
// // print_r
// // var_dump

// // variabel dan tipe data
// // variabel (untuk menampung sebuah nilai)
// // (aturan) variabel tidak boleh diawali dengan angka, tapi boleh mengandung angka
// // boleh
// $nama = "m.hudayana";
// // boleh
// $nama1 = "HUDA KOUJI";  
// // tidak boleh
// // $1nama = "huda gg";

// echo "M.HUDAYANA TAMVAN ";

// // operator
// // aritmatika
// // + - * / %
// echo 0.5 + 0.5 ;
// echo 3 - 1 ;
// echo 1 * 3 ;
// echo 8 / 2 ;

// // aritmatika + variabel
// $x = "20";
// $y = "20";
// echo $x * $y ;


// // pengabung string / concatenation / concat
// // .
// $nama_depan = "M.HUDA";
// $nama_belakang = "YANA";
// echo $nama_depan . " ". $nama_belakang;

// // assignment
// //  =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "m.hudayana";
// $nama .= " ";
// $nama .= "ganteng";
// echo $nama;

// // perbandingan 
// // <, >, <=, >=, ==
// var_dump (1 < 5);
// var_dump (1 > 5);
// var_dump (1 == 5);
// var_dump (1 == "1");

// // identitas (cara mengecek tipe data)
// // ===, !==
// var_dump (1 === "1");

// // logika
// // &&, ||, !
// // menggunakan && semuanya harus benar jika salah satu salah maka akan disebut false
// $x = 10;
// var_dump ($x < 20 && $x % 2 == 0);
// $y = 30;
// var_dump ($y < 20 && $y % 2 == 0);
// // menggunakan || jika hanya satu yang benar yang lain salah maka akan tetap di baca true
// $z = 30;
// var_dump ($z < 20 || $z % 2 == 0);



// // penulisan sintaks PHP
// // 1. PHP di dalam HTML (disarankan selalu dipakai di bandingkan no.2)
// // 2.HTML di dalam PHP
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar PHP</title>
</head>
<body>
<!-- 1. PHP di dalam HTML (disarankan selalu dipakai di bandingkan no.2) -->
    <!-- <h1>INI PHP DIDALAM <?php echo "HTML"; ?></h1>
    <p><?php echo "INI JUGA PHP DIDALAM HTML"; ?></p> -->
<!-- 2.HTML di dalam PHP -->
    <!-- <?php echo "<h1>INI HTML DIDALAM PHP</h1>";?> -->
<!-- variabel (untuk menampung sebuah nilai) -->
    <!-- <h1>halo selamat datang <?php echo $nama; ?> (contoh variabel)</h1>    -->
</body>
</html>