<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01-Ejercicio10</title>
</head>

<body>
  <h2>Ejercicio 10:</h2>
  <h3>Solución:</h4>
    <?php
    function concatenar($a, $b)
    {
      return $a . $b;
    }

    $a = $_GET["a"] ?? "Palabra1";
    $b = $_GET["b"] ?? "Palabra2";

    $resultado = concatenar($a, $b);
    echo $resultado;
    ?>
</body>

</html>
