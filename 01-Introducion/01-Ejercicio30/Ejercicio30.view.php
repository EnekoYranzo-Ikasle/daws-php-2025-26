<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01-Ejercicio30</title>
</head>

<body>
  <h2>Ejercicio 30:</h2>
  <h3>Solución:</h3>
  <ul>
    <?php
    foreach ($estudiantes as $estudiante) {
      echo "<li>La nota media de " . $estudiante["nombre"] . " es " . $estudiante["notaMedia"] . "</li>";
    }
    ?>
  </ul>
</body>

</html>
