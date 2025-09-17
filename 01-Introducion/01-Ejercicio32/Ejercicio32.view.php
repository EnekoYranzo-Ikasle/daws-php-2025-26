<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01-Ejercicio32</title>
</head>

<body>
  <h2>Ejercicio 32:</h2>
  <h3>Solución:</h3>
  <table border="1">
    <tr>
      <th>Nombre</th>
      <th>Nota 1</th>
      <th>Nota 2</th>
      <th>Nota media</th>
    </tr>
    <?php
    foreach ($estudiantes as $estudiante) {
      echo "<tr>";
      echo "<td>" . $estudiante["nombre"] . "</td>";
      echo "<td>" . $estudiante["nota1"] . "</td>";
      echo "<td>" . $estudiante["nota2"] . "</td>";
      echo "<td>" . ($estudiante["nota1"] + $estudiante["nota2"]) / 2 . "</td>";
      echo "</tr>";
    }
    ?>
</body>

</html>
