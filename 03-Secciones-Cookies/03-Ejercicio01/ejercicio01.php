<?php
$usuarioGuardado = "";

function getUsuarioAlmacenado()
{
  return $_COOKIE['usuario'] ?? "";
}

function guardarUsuario($input)
{
  setcookie("usuario", $input);
}

if (!empty($_POST)) {
  $input = $_POST['usuarioInp'];

  guardarUsuario($input);
}

$usuarioGuardado = getUsuarioAlmacenado();

include "ejercicio02.view.php";
