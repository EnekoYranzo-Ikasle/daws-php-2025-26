<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio1</title>
</head>

<body>
  <h1>Ejercicio 01:</h1>
  <h3>Solución:</h3>
  <?php
  echo "<b>Resultado de la conversión (" . $temperatura . " " . $unidad . "): " . $resultado . "</b>";
  ?>
  <form action="Ejercicio01.php" method="post">
    Introduce la temperatura: <input type="text" name="temperatura"><br>
    Indica la unidad de la temperatura introduccida:
    <select name="unidad">
      <option>Celsius</option>
      <option>Farenheit</option>
    </select><br>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>
