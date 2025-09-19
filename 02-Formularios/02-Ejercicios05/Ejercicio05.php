<?php
$productos = [
  "01" => [
    "nombre" => "Logitech K120",
    "descripcion" => "Teclado multimedia USB plug&play, trackPoint Caps (10pk, Soft Dome)",
    "precio" => 25.99
  ],
  "02" => [
    "nombre" => "Lenovo LI5",
    "descripcion" => "El mouse Lenovo 300 compacto inalámbrico es el accesorio perfecto para cualquier persona que desee un mayor control y libertad",
    "precio" => 12.99
  ],
  "03" => [
    "nombre" => "Monitor LG X10",
    "descripcion" => "LCD con retroiluminación LED ThinkVision T1714p Square de 17 pulgadas",
    "precio" => 179.99
  ],
  "04" => [
    "nombre" => "Monitor Lenovo Q24i",
    "descripcion" => "Pantalla de 60.45 cm (23.8”) Funciones como AMD FreeSync",
    "precio" => 172.00
  ],
  "05" => [
    "nombre" => "ThinkPad X1 Extreme",
    "descripcion" => "ThinkPad X1 Extreme de 2.ª generación gestiona exigentes tareas informáticas sin problemas. Con pantalla táctil 4K OLED",
    "precio" => 1200.00
  ]
];

$listaCompra = [];
$total = 0;

function crearTicket($productos)
{
  foreach ($productos as $id => $producto) {
    if (isset($_POST[$id]) && $_POST[$id] > 0) {
      $cantidad = (int) $_POST[$id];
      $producto['cantidad'] = $cantidad;
      $producto['total'] = $cantidad * $producto['precio'];
      $listaCompra[$id] = $producto;
    }
  }
  return $listaCompra;
}

function calcularTotal($listaCompra)
{
  $suma = 0;
  foreach ($listaCompra as $id => $producto) {
    $suma += $producto['total'];
  }
  return $suma;
}


if (!empty($_POST)) {
  $listaCompra = crearTicket($productos);
  $total = calcularTotal($listaCompra, $total);
}

include "Ejercicio05.view.php";
