<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio05</title>
</head>

<body>
  <h1>Ejercicio 05:</h1>
  <h3>Solución:</h3>
  <h4>Catálogo de productos</h4>
  <form action="Ejercicio05.php" method="post">
    <table border="1">
      <tr>
        <th>Nombre</th>
        <th>Despripción</th>
        <th>Precio</th>
        <th>Cantidad</th>
      </tr>
      <?php
      foreach ($productos as $id => $producto) {
        echo "<tr>";
        echo "<td>{$producto["nombre"]}</td>";
        echo "<td>{$producto["descripcion"]}</td>";
        echo "<td>{$producto["precio"]}</td>";
        echo "<td><input type='number' value='0' name={$id}></td>";
        echo "</tr>";
      }
      ?>
    </table>
    <br>
    <input type="submit" value="Comprar">
  </form>
  <div>
    <h4>Precio total:</h4>
    <p>
      <?php
      echo "El importe total de la compra realizada es de " . $total . "€";
      ?>
    </p>
  </div>
  <div>
    <h4>Detalle de la compra:</h4>
    <ul>
      <?php
      foreach ($listaCompra as $id => $producto) {
        echo "<li>{$producto['nombre']} ({$producto['cantidad']})</li>";
      }
      ?>
    </ul>
  </div>
</body>

</html>
