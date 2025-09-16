<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01-Ejercicio12</title>
</head>

<body>
  <h2>Ejercicio 12:</h2>
  <h3>Solución:</h3>
  <p>
    <?php
    $ciudades = ["Paris", "Berlin", "Amsterdam", "Praga"];

    $respuesta = getValor($ciudades, 3);

    echo "La ciudad con posicion 3 es " . $respuesta . "<br>";

    $respuesta = setValor($ciudades, 1, "Madrid");

    echo var_export($respuesta);
    ?>
  </p>
</body>

</html>
