<?php
$asunto = "";
$email = "";
$motivo = "";
$mensaje = "";
$enviado = false;

if (!empty($_POST)) {
  $asunto = $_POST["asunto"];
  $email = $_POST["email"];
  $motivo = $_POST["motivo"];
  $mensaje = $_POST["mensaje"];
  $enviado = true;
}

include "Ejercicio03.view.php";
