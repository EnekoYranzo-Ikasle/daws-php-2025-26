<?php
$num = $_GET["num"];
$resultado = 0;

for ($i = 0; $i <= $num; $i++) {
  if ($i % 2 == 0) {
    $resultado += $i;
  }
}


include "Ejercicio20.view.php";
