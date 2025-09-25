<?php
include "ejercicio.data.php";

$productoID = $_GET["productoID"] ?? null;
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Ejercicios07-10 | Detalles</title>
</head>

<body>
  <?php if (!$productoID || !isset($productos[$productoID])): ?>
    <h2>Error 404 | Producto no encontrado</h2>
  <?php else: ?>
    <?php
    $producto = $productos[$productoID];
    echo "<h2>Detalles del producto {$producto['nombre']} </h2>";
    echo "<p>{$producto['descripcion-ext']}</p>";
    ?>
    <a href="ejercicio.php">Volver</a>
  <?php endif; ?>
</body>

</html>
