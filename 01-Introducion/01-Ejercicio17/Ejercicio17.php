<?php
$usuarios = [
  "user1" => [
    "nombre" => "Nora",
    "password" => "123123",
    "email" => "nora@php.net"
  ],
  "user2" => [
    "nombre" => "Mario",
    "password" => "321321",
    "email" => "mario@php.net"
  ],
];

function validarUsuario($usuarios, $user, $password)
{
  if (isset($usuarios[$user])) {
    if ($usuarios[$user]["password"] === $password) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}

$user = $_GET["user"];
$password = $_GET["password"];

$resultado = validarUsuario($usuarios, $user, $password);

include "Ejercicio17.view.php";
