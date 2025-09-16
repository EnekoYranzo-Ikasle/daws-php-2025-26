<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01-Ejercicio29</title>
</head>

<body>
  <h2>Ejercicio 29:</h2>
  <h3>Solución:</h3>
  <table border="1">
    <tr>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Telefono</th>
      <th>Email</th>
    </tr>
    <?php
    foreach ($agenda as $contacto) {
      echo "<tr>";
      echo "<td>" . $contacto["nombre"] . "</td>";
      echo "<td>" . $contacto["apellidos"] . "</td>";
      echo "<td>" . $contacto["telefono"] . "</td>";
      echo "<td>" . $contacto["email"] . "</td>";
      echo "</tr>";
    }
    ?>
</body>

</html>
