<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 3</title>
  </head>
  <body>
    <h4>Sesja 3</h4>
    <?php
    echo $_SESSION['name'];
    if (isset($_SESSION['surname'])) {
      echo 'zmienna sesyjne surname istnieje<br>';
    }else{
      echo 'zmienna sesyjne surname nie istnieje<br>';
    }
    echo "<br>Identyfikator sesji: ".session_id();
    session_regenerate_id();
     ?>
<br><a href="./session.php">Sesja 1</a>
  </body>
</html>
