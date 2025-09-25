<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio04</title>
</head>

<body>
  <h1>Ejercicio 04:</h1>
  <h3>Solución:</h3>
 > <h4>Lista de asistentes:</h4>
  <ul>
    <?php
    if ($asistentes != null) {
      foreach ($asistentes as $asistente) {
        echo "<li>{$asistente}</li>";
      }
    } else {
      echo "No hay ningún asistente.";
    }

    ?>
  </ul>
  <form action="ejercicio04.php" method="post">
    <h4>Añadir asistente</h4>
    <input type="text" name="asistenteInp">
    <input type="submit" value="Añadir">
  </form>

  <form action="ejercicio04.php" method="post" style="margin-top:10px;">
    <input type="submit" name="borrar" value="Borrar">
  </form>
</body>

</html>
