<?php
function concatenar($a, $b)
{
  return $a . $b;
}

$a = $_GET["a"] ?? "Palabra1";
$b = $_GET["b"] ?? "Palabra2";
$frase = concatenar($a, $b);

include "Ejercicio11.view.php";
