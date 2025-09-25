<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Ejercicios07-10</title>
</head>

<body>
  <div class="idioma">
    <form action="ejercicio.php" method="post">
      <select name="idioma">
        <option>Euskera</option>
        <option>Castellano</option>
      </select>
      <input type="submit" value="Guardar">
    </form>
    <span>
      <?php
      switch ($idiomaSelecionado) {
        case "Euskera":
          echo "Ongi Etorri";
          break;
        case "Castellano":
          echo "Bienvenido";
          break;
      }
      ?>
    </span>
  </div>
  <h2>Catálogo de productos</h2>
  <table>
    <tr>
      <th></th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Detalles</th>
      <th>Precio</th>
      <th>Cantidad</th>
    </tr>
    <?php foreach ($productos as $id => $producto) {
      $esFavorito = isset($_COOKIE['favorito'][$id]);

      echo "<tr>";
      echo "<td><a href='?accion=favorito&productoID={$id}'><img src=" . ($esFavorito ? 'img/heartIconFilled.png' : 'img/heartIcon.png') . "></a></td>";
      echo "<td><p>{$producto['nombre']}</p></td>";
      echo "<td>{$producto['descripcion']}</td>";
      echo "<td><a href='?accion=detalles&productoID={$id}'>Ver detalles</a></td>";
      echo "<td>{$producto['precio']}&euro;</td>";
      echo "<td><a class='boton' href='?accion=agregar&productoID={$id}'>Agregar</a></td>";
      echo "</tr>";
    }
    ?>
  </table>
  <h2>Cesta de la compra</h2>
  <?php
  if ($productosCesta != null) {
    echo "<ul>";

    foreach ($productosCesta as $productoID) {
      echo "<li>{$productos[$productoID]['nombre']}</li>";
    }

    echo "</ul>";
    echo "<h3>Precio total: {$total} &euro;</h3>";
    echo "<a class='boton' href='ejercicio.php?accion=comprar'>Comprar</a>";
  } else {
    echo "No hay productos en la cesta";
  }
  ?>
</body>

</html>
