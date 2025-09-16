<?php
$animales = ["Leon", "Buho", "Caballo", "Perro"];
$colores = ["Verde", "Marron", "Azul", "Rojo"];

$numObjAnimales = count($animales);
$numObjColores = count($colores);
$animalesFin = array_push($animales, "Gato");
$coloresStart = array_unshift($colores, "Magenta");
$mergeados = array_merge($animales, $colores);

include "Ejercicio13.view.php";
