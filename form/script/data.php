<?php
  echo "<h4>Dane Użytkownika</h4>";
//  echo $_POST['name'];
// print_r($_POST); sprawdzanie formularzy od strony technicznej

$error=0;
if (!isset($_POST['gender'], $_POST['terms'])) {
  $error=1;

}

foreach ($_POST as $key => $value) {
  if (empty($value)) {
    $error=1;

  }else{
  echo "$key: $value<br>";
  }
}
if (!isset($_POST['terms'])) {
  $error=1;

}

 ?>
