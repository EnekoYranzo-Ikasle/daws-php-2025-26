<?php
function getValor($array, $posicion)
{
  return ($array[$posicion]);
}

function setValor($array, $posicion, $valor)
{
  $array[$posicion] = $valor;
  return ($array);
}

include "Ejercicio12.view.php";
