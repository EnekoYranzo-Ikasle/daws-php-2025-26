<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio2</title>
</head>

<body>
  <h1>Ejercicio 02:</h1>
  <h3>Solución:</h3>
  <?php
  echo "<b>Ultimo resultado: " . $resultado . "</b>";
  ?>
  <form action="Ejercicio02.php" method="post">
    Primer numero: <input type="number" name="num1"><br>
    Segundo numero: <input type="number" name="num2"><br>
    Seleccione operacción:
    <select name="operador">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicar</option>
      <option>Dividir</option>
    </select><br>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>
