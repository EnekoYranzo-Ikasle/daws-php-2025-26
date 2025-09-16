<?php
$diccionario = array(
  "Eneko" => array(
    "apellido" => "Yranzo",
    "email" => "eneko.yranzo@ikasle.egibide.org"
  ),
  "Koldo" => array(
    "apellido" => "Soriguren",
    "email" => "koldo.soriguren@ikasle.egibide.org"
  )
);

function getDatos($diccionario, $usuario, $valor)
{
  return (
    $diccionario[$usuario][$valor]
  );
}

$usuario1 = getDatos($diccionario, "Eneko", "email");

include "Ejercicio15.view.php";
