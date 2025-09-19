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
  <form action="Ejercicio03.php" method="post">
    Asunto: <input type="text" name="asunto"><br>
    Email: <input type="text" name="email"><br>
    Motivo:
    <select name="motivo">
      <option>Soporte técnico</option>
      <option>Información de productos</option>
      <option>Queja</option>
      <option>Otro</option>
    </select><br>
    <textarea name="mensaje"></textarea><br>
    <input type="submit" value="Enviar">
  </form>
  <br><br>
  <div>
    <?php
    if ($enviado) {
      echo "Asunto: " . $asunto . "<br>";
      echo "Email: " . $email . "<br>";
      echo "Motivo del mensaje: " . $motivo . "<br>";
      echo "Mensaje: " . $mensaje . "<br>";
    }
    ?>
  </div>
</body>

</html>
