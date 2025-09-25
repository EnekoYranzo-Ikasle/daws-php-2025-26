<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio03</title>
</head>

<body>
  <h1>Ejercicio 03:</h1>
  <h3>Solución:</h3>
  <?php
  if ($idiomaGuardado != null) {
    echo "Idioma " . $idiomaGuardado;
  } else {
    echo "No hay ningún idioma almacenado.";
  }
  ?>

  <form action="ejercicio03.php" method="post">
    <select name="idioma">
      <option>Euskera</option>
      <option>Castellano</option>
    </select>
    <input type="submit" value="Guardar">
  </form>
</body>

</html>
