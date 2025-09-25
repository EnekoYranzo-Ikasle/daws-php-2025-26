<?php
session_start();

include "ejercicio05.data.php";

function login($usernameInput, $passwordInput, $usuarios, &$intentosDisponibles) {
  if ($intentosDisponibles > 0) {
    if (array_key_exists($usernameInput, $usuarios)) {
      if ($usuarios[$usernameInput]["password"] == $passwordInput) {
        return 0; // Usuario correcto
      } else {
        $intentosDisponibles -= 1;
        return 1; // Contraseña incorrecta
      }
    } else {
      $intentosDisponibles -= 1;
      return 2; // Usuario incorrecto
    }
  } else {
    return 3; // No hay más intentos
  }
}


$error = -1;

if (!isset($_SESSION['intentosDisponibles'])) {
  $_SESSION['intentosDisponibles'] = 3;
}

if (isset($_POST["username"]) || isset($_POST["password"])) {
  $usernameInput = $_POST["username"];
  $passwordInput = $_POST["password"];

  $login = login($usernameInput, $passwordInput, $usuarios, $_SESSION['intentosDisponibles']);

  if ($login == 0) {
    $_SESSION["logeado"] = true;
  } else {
    $error = $login;
  }
}

if (isset($_GET['accion']) && $_GET['accion'] === 'logout') {
  session_unset();
  session_destroy();
}
include "ejercicio05.view.php";
