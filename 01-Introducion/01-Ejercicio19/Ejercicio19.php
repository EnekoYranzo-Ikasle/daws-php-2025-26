<?php
$num = $_GET["num"];
$resultado = 0;

for ($i = 0; $i <= $num; $i++) {
  $resultado += $i;
}


include "Ejercicio19.view.php";
