<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for
for( $i = 1; $i <= 5; $i++ ) {
    echo "hello world! <br>";
}

// while (perbedaan dgn do.. while: ketika kondisinya bernilai false maka blocknya tidak akan dijalankan sama sekali)
// true
// $i = 0;
// while ( $i < 5) {
// echo "hello world <br>";
// $i++;
// }
// false
// $i = 10;
// while ( $i < 5) {
// echo "hello world <br>";
// $i++;
// }
   
// do.. while (perbedaan dgn while: ketika kondisinya bernilai false blocknya akan dijalankan 1 kali)
// true
// $i = 0;
// do {
//    echo "hello world <br>";
// $i++;     
// } while( $i < 5 );
// false
// $i = 10;
// do {
//    echo "hello world <br>";
// $i++;     
// } while( $i < 5 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>latihan 1</title>
      <style>
      .warna-baris {
            background-color: aqua;
         }
      </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
<!-- membuat table dari pengulagan php cara pertama : -->
   <!-- <?php 
    //  for( $i = 1; $i <= 3; $i++) {
    //     echo "<tr>";
    //     for( $j = 1; $j <= 5; $j++ ) {
    //         echo "<td>$i,$j</td>";
    //     }
    //     echo "</tr>";
    //  }
   ?> -->
<!-- membuat table dari pengulagan php cara kedua   -->
   <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
      <?php if( $i % 2 == 1) : ?>
         <tr class="warna-baris">
      <?php else : ?>
         <tr>    
      <?php endif; ?>
         <?php for($j = 1; $j <=5; $j++) : ?>
            <td><?= "$i,$j"; ?></td>
         <?php endfor; ?>
      </tr>
   <?php endfor; ?>
</table>    

</body>
</html>