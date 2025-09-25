<?php
$idiomaGuardado = "";

function getIdiomaAlmacenado()
{
  return $_COOKIE['idioma'] ?? "";
}

function guardarIdioma($input)
{
  setcookie("idioma", $input, time() + 60);
}

if (!empty($_POST)) {
  $input = $_POST["idioma"];

  guardarIdioma($input);
}

$idiomaGuardado = getIdiomaAlmacenado();

include "ejercicio03.view.php";
