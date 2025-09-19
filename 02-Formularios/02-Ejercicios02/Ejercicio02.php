<?php
$num1 = $_POST["num1"] ?? 0;
$num2 = $_POST["num2"] ?? 0;
$operador = $_POST["operador"] ?? "Suma";
$resultado = 0;

switch ($operador) {
  case "Suma":
    $resultado = $num1 + $num2;
    break;
  case "Resta":
    $resultado = $num1 - $num2;
    break;
  case "Multiplicar":
    break;
  case "Dividir":
    $resultado = ($num1 > 0 && $num2 > 0) ?  $num1 / $num2 : "No se puede dividir entre 0";
    break;
}

include "Ejercicio02.view.php";
