<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio02</title>
</head>

<body>
  <h1>Ejercicio 02:</h1>
  <h3>Solución:</h3>
  <?php
  if ($usuarioGuardado != null) {
    echo "El usuario almacenado es " . $usuarioGuardado;
  } else {
    echo "No hay ningún usuario almacenado.";
  }
  ?>

  <form action="ejercicio02.php" method="post">
    Introduce el nombre del usuario que quieras almacenar:
    <input type="text" name="usuarioInp">
    <input type="submit" value="Guardar">
  </form>

  <form action="ejercicio02.php" method="post" style="margin-top:10px;">
    <input type="submit" name="borrar" value="Borrar cookie">
  </form>
</body>

</html>
