<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FORM</title>
  </head>
  <body>
    <h4>Dane użytkownika</h4>
    <form method="get">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj imię"><br><br>
      <input type="submit" value="Zatwierdz"><br><br>
</form>
<?php
//  echo $_GET['name']; - zmienna pusta na początku jest błąd
if (!empty($_GET['name'])) {
  echo "Imię: ".$_GET['name']."<br>";
}

?>

  </body>
</html>
