<?php
$num = $_GET["num"];
$resultado = 0;

for ($i = 0; $i <= $num; $i++) {
  if ($i % 2 == 0) {
    if ($resultado + $i > 100) {
      break;
    }
    $resultado += $i;
  }
}


include "Ejercicio21.view.php";
