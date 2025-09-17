<?php
$numeros = [];

for ($i = 0; $i < 20; $i++) {
  $numeros[] = random_int(1, 999);
  array_push($numeros, ", ");
}

$min = $numeros[0];
$max = $numeros[0];

foreach ($numeros as $numero) {
  if ($numero < $min) {
    $min = $numero;
  }
  if ($numero > $max) {
    $max = $numero;
  }
}

include "Ejercicio31.view.php";
