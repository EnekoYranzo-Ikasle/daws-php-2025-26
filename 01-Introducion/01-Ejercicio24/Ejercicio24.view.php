<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01-Ejercicio24</title>
</head>

<body>
  <h2>Ejercicio 24:</h2>
  <h3>Solución:</h3>
  <table border="1">
    <tr>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Telefono</th>
      <th>Email</th>
    </tr>
    <?php
    for ($i = 0; $i < count($agenda); $i++) {
      echo "<tr>";
      echo "<td>" . $agenda[$i]["nombre"] . "</td>";
      echo "<td>" . $agenda[$i]["apellidos"] . "</td>";
      echo "<td>" . $agenda[$i]["telefono"] . "</td>";
      echo "<td>" . $agenda[$i]["email"] . "</td>";
      echo "</tr>";
    }
    ?>
</body>

</html>
