<?php
function diaSemana($num)
{
  switch ($num) {
    case 1:
      return "Lunes";
      break;
    case 2:
      return "Martes";
      break;
    case 3:
      return "Miercoles";
      break;
    case 4:
      return "Jueves";
      break;
    case 5:
      return "Viernes";
      break;
    case 6:
      return "Sabado";
      break;
    case 7:
      return "Domingo";
      break;
    default:
      return ($num . " no es ningun dia de la semana.");
  }
}

$num = $_GET["num"];
$resultado = diaSemana($num);

include "Ejercicio18.view.php";
