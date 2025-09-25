<?php
session_start();

if (!isset($_SESSION["asistentes"])) {
  $_SESSION["asistentes"] = [];
}

function guardar($input)
{
  $_SESSION["asistentes"][] = $input;
}

function getAsistentes()
{
  return $_SESSION["asistentes"] ?? "";
}

function deleteAsistentes()
{
  unset($_SESSION["asistentes"]);
}

if (!empty($_POST)) {
  if (isset($_POST['borrar'])) {
    deleteAsistentes();
  } elseif (isset($_POST['asistenteInp'])) {
    $input = $_POST['asistenteInp'];
    guardar($input);
  }
}

$asistentes = getAsistentes();

include "ejercicio04.view.php";
