<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$respuesta;

if ($num1 != $num2) {
  $respuesta = $num1 + $num2;
}

if ($num1 == $num2) {
  $respuesta = $num1 * $num2;
}

include "Ejercicio16.view.php";
