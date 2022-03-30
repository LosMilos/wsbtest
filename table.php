<?php
echo "<table>";
echo "<tr><th>Imię</th></tr>";
echo "<tr><td>Janusz</th></tr>";
echo "<tr><td>Anna</th></tr>";
echo "</table>";

echo <<< TABLE
  <table>
    <tr>
      <th>Imię</th>
      <th>Nazwisko</th>
      </tr>
TABLE;
      for ($i=1; $i < 5; $i++) {
        echo <<< ROW
        <tr>
        <td>Imię$i</td>
        <td>Nazwisko$i</td>
        </tr>
ROW;
      }
echo "</table>";
