<?php
$userInput = "";
$passwordInput = "";
$resultado = 0;
$logeado = false;
$error = "";

$usuarios = array(
  "user1" => array(
    "nombre" => 'Ane',
    "apellidos" => 'López',
    "password" => '123Abc'
  ),
  "user2" => array(
    "nombre" => 'Amaia',
    "apellidos" => 'Otsoa',
    "password" => '456Xyz'
  )
);

function login($usuarios, $userInput, $passwordInput)
{
  foreach ($usuarios as $user) {
    if ($userInput == $user["nombre"]) {
      if ($passwordInput == $user["password"]) {
        return 1;
      } else {
        return 2;
      }
    } else {
      return 3;
    }
  }
}

if (!empty($_POST)) {
  $userInput = $_POST["user"];
  $passwordInput = $_POST["password"];
}

$resultado = login($usuarios, $userInput, $passwordInput);

switch ($resultado) {
  case 1:
    $logeado = true;
    break;
  case 2:
    $error = "Contraseña incorrecta";
    break;
  case 3:
    $error = "Usuario incorrecto";
    break;
}


include "Ejercicio04.view.php";
