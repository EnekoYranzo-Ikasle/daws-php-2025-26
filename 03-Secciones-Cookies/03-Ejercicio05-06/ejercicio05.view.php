<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio05</title>
</head>

<body>
  <main>
    <?php if (isset($_SESSION["logeado"]) && $_SESSION["logeado"] === true): ?>
      <h1>Bienvenido</h1>
      <a href="ejercicio05.php?accion=logout">Cerrar Sesión</a>
    <?php else: ?>
      <?php
      if ($error > 0) {
        switch ($error) {
          case 1:
            echo "Contraseña Incorrecta";
            break;
          case 2:
            echo "Usuario incorrecto";
            break;
          case 3:
            echo "Has alcanzado el maximo de intentos disponibles en esta sesión.";
            break;
        }
      }
      ?>
      <form action="ejercicio05.php" method="post">
        <b>Username:</b>
        <input type="text" name="username"><br>
        <b>Password:</b>
        <input type="password" name="password">
        <input type="submit" value="Login">
      </form>
    <?php endif; ?>
  </main>
</body>

</html>
