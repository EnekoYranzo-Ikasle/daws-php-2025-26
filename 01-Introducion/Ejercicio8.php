<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01-Ejercicio8</title>
</head>

<body>
  <h2>Ejercicio 8:</h2>
  <h3>Solución:</h4>
    <?php
    function esMayor($a, $b)
    {
      return $a > $b;
    }

    $resultado = esMayor(9, 5);
    echo var_export($resultado);
    ?>
</body>

</html>
