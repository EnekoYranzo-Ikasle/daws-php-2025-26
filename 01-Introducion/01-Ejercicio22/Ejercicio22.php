<?php
$paises = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];

function encontrarPosicion($input)
{
  global $paises;

  for ($i = 0; $i < count($paises); $i++) {
    if ($paises[$i] == $input) {
      return $i;
    }
  }

  return -1;
}

$input = $_GET["pais"];
$resultado = encontrarPosicion($input);

include "Ejercicio22.view.php";
