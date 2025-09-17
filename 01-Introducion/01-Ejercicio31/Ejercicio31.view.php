<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01-Ejercicio31</title>
</head>

<body>
  <h2>Ejercicio 31:</h2>
  <h3>Solución:</h3>
  <h4>Numeros generados:</h4><br>
  <?php
  foreach ($numeros as $numero) {
    echo $numero;
  }
  ?>
  <br>
  <?php
  echo "El número más pequeño es " . $min . "<br>";
  echo "El número más grande es " . $max . "<br>";
  ?>
</body>

</html>
