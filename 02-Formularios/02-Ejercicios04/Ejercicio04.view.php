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
  <form action="Ejercicio04.php" method="post">
    Usuario: <input type="text" name="user"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Enviar">
  </form>
  <br><br>
  <div>
    <?php
    if ($logeado) {
      echo "Bienvenido, " . $userInput;
    } else {
      echo $error;
    }
    ?>
  </div>
</body>

</html>
