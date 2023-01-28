<?php
  
  if(isset($_POST['submit'])) {
    if($_POST['pass'] =='1234') {
      echo "SELAMAT DATANG ADMIN!";
    } else {
      echo "PASSWORD SALAH!";
    }
  }
  
?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    
    <form action="" method="post">
      <label for="input">Masukan Password : </label>
      <input type="password" id="input" name="pass">
      <button type="submit" name="submit">kirim</button>
    </form>
    
  </body>
  </html>