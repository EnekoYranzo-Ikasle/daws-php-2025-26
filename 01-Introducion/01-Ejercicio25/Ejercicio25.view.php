<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01-Ejercicio25</title>
</head>

<body>
  <h2>Ejercicio 25:</h2>
  <h3>Solución:</h3>
  <ul>
    <?php
    $i = 0;
    while ($i < count($estudiantes)) {
      echo "<li>{$estudiantes[$i]}</li>";
      $i++;
    }
    ?>
  </ul>
</body>

</html>
