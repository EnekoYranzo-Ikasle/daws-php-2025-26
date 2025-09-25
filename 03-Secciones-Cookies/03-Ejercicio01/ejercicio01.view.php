<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio01</title>
</head>

<body>
  <h1>Ejercicio 01:</h1>
  <h3>Solución:</h3>
  <?php
  if ($usuarioGuardado != null) {
    echo "El usuario almacenado es " . $usuarioGuardado;
  } else
    echo "No hay ningun usuario almacenado."
  ?>
  <form action="ejercicio01.php" method="post">
    Introduce el nombre del usuario que quieras almacenar <input type="text" name="usuarioInp">
    <input type="submit" value="Guardar">
  </form>
</body>

</html>
