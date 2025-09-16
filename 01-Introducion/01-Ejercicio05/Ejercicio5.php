<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01-Ejercicio5</title>
</head>

<body>
  <h2>Ejercicio 5:</h2>
  <h3>Solución:</h4>
    <?php
    $a = $_GET["a"];
    $b = $_GET["b"];

    $resta = $a - $b;
    $division = $a / $b;
    $mayor = $a > $b;
    $menorIgual = $a <= $b;

    echo ("<p>Resta: $resta</p>");
    echo ("<p>Division: $division</p>");
    echo ("<p>Mayor: " . var_export($mayor) . "</p>");
    echo ("<p>Menor igual: " . var_export($menorIgual) . "</p>");
    ?>
</body>

</html>
