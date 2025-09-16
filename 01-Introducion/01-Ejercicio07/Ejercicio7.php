<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01-Ejercicio7</title>
</head>

<body>
  <h2>Ejercicio 7:</h2>
  <h3>Solución:</h4>
    <?php
    function multiplicar($a, $b)
    {
      return $a * $b; // No se
    }

    $a = $_GET["a"];
    $b = $_GET["b"];

    $resultado = multiplicar($a, $b);
    echo "El resultado de a x b es $resultado";
    ?>
</body>

</html>
