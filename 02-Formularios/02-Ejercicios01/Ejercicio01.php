<?php
$temperatura = $_POST["temperatura"];
$unidad = $_POST["unidad"];
$resultado;

function convertir($temperatura, $unidad)
{
  if ($unidad == "Celcius") {
    return $temperatura + 32;
  } else {
    return $temperatura - 32;
  }
}

$resultado = convertir($temperatura, $unidad);

include "Ejercicio01.view.php";
