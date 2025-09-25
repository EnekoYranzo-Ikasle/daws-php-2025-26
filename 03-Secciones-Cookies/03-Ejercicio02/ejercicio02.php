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

function deleteUsuarioAlmacenado()
{
  setcookie("usuario", "");
}

if (!empty($_POST)) {
  if (isset($_POST['usuarioInp'])) {
    $input = $_POST['usuarioInp'];
    guardarUsuario($input);
  } elseif (isset($_POST['borrar'])) {
    deleteUsuarioAlmacenado();
  }
}

$usuarioGuardado = getUsuarioAlmacenado();

include "ejercicio02.view.php";
